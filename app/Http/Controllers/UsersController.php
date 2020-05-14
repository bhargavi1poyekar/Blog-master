<?php

namespace App\Http\Controllers;



use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\User ;


class UsersController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile($id)
    {	$i=auth()->user()->id;
        if($i!=$id){
            return redirect()->back()->with('error','not your profile' );
        } 
        $user=user::find($id);
    	return view('users.profile')->with('user',$user);
    }

    public function edit($id){
    	$user=user::find($id);
    	return view('users.edit')->with('user',$user);


    }

    //working
    public function myPosts(){
        // $id=Auth()->user()->id();
        $user=auth()->user();
        $posts=$user->posts;
        return view('myposts')->with('posts',$posts);

    }

    public function mySave(){
        $user=auth()->user();
        $posts=$user->saves ;
        return view('saved')->with('posts',$posts);
    }


    public function update(Request $request, $id)
    {	
    	$user=user::find($id);

    	// $this->validate($request,[
     //        'name'=>'required',
     //        'username'=>'required',
     //        'profile_pic'=>'image|nullable|max:1999'

     //    ]);
    	if($request->hasFile('profile_pic')){

    		if($user->profile_pic!='default_profile.png'){
    			Storage::delete('public/profile_images/'.$user->profile_pic);
    		}    
            $extention=$request->file('profile_pic')->getClientOriginalExtension();
            $fileNameToStore=time().'.'.$extention;
            //
            $path=$request->file('profile_pic')->storeAs('public/profile_images',$fileNameToStore);

            $user->profile_pic=$fileNameToStore;
        
        }

        $user->name=$request->input('name');
        $user->username=$request->input('user_name');
        $user->contact_number=$request->input('contact_number');
        $user->bio=$request->input('bio');
        $user->save();

        $a=['user'=>$user,'success'=>'saved succesfully'];
        // return view('users.profile')->with('user',$user)->with('success','saved succesfully');
        // return view('users.profile')->with($a);
        return redirect()->back()->with('success','saved succesfully');
    }



}




