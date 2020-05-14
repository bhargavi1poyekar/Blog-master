@extends('layouts.app')

@section('content')
	<br><br><br>
	<br><br><br>
	@if(count($posts)>0)
        @foreach($posts as $post)
        	<div class="well">
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <img style ='width:100px ; height:100px' src='/lsapp/storage/app/public/cover_image/{{$post->cover_image}}'>

              </div>
              <div class="col-md-8 col-sm-8">  
            		<h3><a href="/lsapp/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
            		<small>{!! $post->body !!}</small>
                <small>by {{$post->user->name}}</small>
              </div>
            </div>
        	</div>
        @endforeach
        {{$posts->links()}}

	@else
		<p> no post found</p>
	@endif


@endsection