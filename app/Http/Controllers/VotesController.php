<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\post ;
use App\vote;

use Illuminate\support\Facades\DB;


class VotesController extends Controller
{	
	public function __construct()
    {
        $this->middleware('auth');
    }

 	public function create($id){
 		$u_id=auth()->user()->id;
 		$post= post::find($id);
 		$count=vote::where('post_id','=',$id)->where('user_id','=',$u_id)->count();
 		if ($count==0){
 			$vote = new Vote;
 			$vote->post_id=$id;
 			$vote->user_id=$u_id;
 			$vote->type=1;
        	$vote->save();
        	return 'voted succesfully';
 		}
 		elseif ($count==1) {
 			$vote=vote::where('post_id','=',$id)->where('user_id','=',$u_id);
 			$vote->delete();
 			return 'vote deleted';
 		}
 		else{
  			return 'error detected';
 		}

 	}
 	public function delete(){

 	}
}
