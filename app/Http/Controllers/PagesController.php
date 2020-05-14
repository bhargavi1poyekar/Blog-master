<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post ;
use DB;

class PagesController extends Controller
{
    // public function index($category = null)
    // {	if($category!=null){
    // 		$posts=post::whereRaw('category like \'%'.$category.'%\'' )->get();
    // 	}
    // 	else
    // 		$posts=post::all();
    	
    // 	return view('home2')->with('posts',$posts);
    // }

     public function about()
    {
    	return view('pages.about');
    }
}