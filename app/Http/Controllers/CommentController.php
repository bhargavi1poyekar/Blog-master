<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;
use App\post;

class CommentController extends Controller
{	

	public function __construct()
    {
        $this->middleware('auth');
    }

	public function index($id){
    	$post=post::find($id);
    	return view('comment')->with('post',$post);
    }

    public function store(Request $request,$id){
    	
    	$comment = new comment;
    	$comment->user_id=auth()->user()->id;
    	$comment->post_id=$id;
    	$comment->reply_to=0;
    	$comment->comment_body=$request->input('user_comment');
        $comment->save();

        return redirect('posts/'.$id.'/comments');
    }



}
