<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\post ;
use App\user;
use DB;

class PostsController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   //  public function index()
   //  {   //$posts=post::all();
   //      //$posts=post::where();
   // //     $post=DB::select('select * from posts');
   //      $posts=post::orderBy('title','asc')->paginate(1);
   //      return view('posts.index')->with('posts',$posts);
   //  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'category'=>'required',
            'cover_image'=>'image|nullable|max:1999'

        ]);

        if($request->hasFile('cover_image')){
           
            $extention=$request->file('cover_image')->getClientOriginalExtension();

            $fileNameToStore=time().'.'.$extention;
            //
            $path=$request->file('cover_image')->storeAs('public/cover_image',$fileNameToStore);
        }
        else{
            $fileNameToStore='noimage.jpg';
         }

        $post = new Post;
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->user_id =auth()->user()->id;
        $post->cover_image=$fileNameToStore;
        $post->category=$request->input('category');

        $post->save();
        return redirect('/posts')->with('success','post created');
        // return redirect('/posts')->with('success','post created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= post ::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post= post ::find($id);
        if(auth()->user()->id!=$post->user_id){
            return redirect('/posts')->with('error','unautarized page');
        }
        return view('posts.edit')->with('post',$post);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'cover_image'=>'image|nullable|max:1999'

        ]);
        $post =Post::find($id);

        if($request->hasFile('cover_image')){
            Storage::delete('public/cover_image/'.$post->cover_image);

            $filenameWithExt=$request->file('cover_image')->getClientOriginalName();
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extention=$request->file('cover_image')->getClientOriginalExtension();

            $fileNameToStore=$filename.'_'.time().'.'.$extention;
            //
            $path=$request->file('cover_image')->storeAs('public/cover_image',$fileNameToStore);
            $post->cover_image=$fileNameToStore;        
        }

        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->save();
        // return redirect('/profile/posts')->with('success','post updated succesfully'); 
        return redirect()->back()->with('success','updated succesfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $post =Post::find($id);
        Storage::delete('public/cover_image/'.$post->cover_image);
        $post->delete();
        return redirect()->back()->with('success','deleted succesfully');
        
    }


    public function index($category = null)
    {   if($category!=null){
            $posts=post::whereRaw('category like \'%'.$category.'%\'' )->get();
            return view('myhome')->with('posts',$posts);
        }
        else
           { 
               $posts=post::all();
               return view('home2')->with('posts',$posts);
           }
    }

    public function post_save($id){
        $user=auth()->user();
        $post=Post::find($id);
        $user->saves()->attach($post);
        return back()->with('success','saved succesfully');
    }
    public function post_remove($id){
        $user=auth()->user();
        $post=Post::find($id);
        $user->saves()->detach($post);
        return redirect()->back()->with('success','sremove from saved succesfully');
    }

    public function search(Request $request){
        $search=$request->input('search_string');

        $posts=post::whereRaw('title like \'%'.$search.'%\'' )->get();
        
        if (count($posts)){
            return view('myhome')->with('posts',$posts);
        }
        else{
            return redirect()->back();
        }
    }


}
