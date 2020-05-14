@extends('layouts.app')

@section('content')
	<br><br><br>
	<br><br><br>
	<a href="/lsapp/public/posts" class="btn btn-primary">go back</a>
	<div class="well">
		<h3>{{$post->title}}</h3>
		<small>written on {!! $post->body !!}</small>
	</div>
	<hr>
	@if(!Auth::guest())
		@if(Auth::user()->id==$post->user_id)
			<a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-danger">Edit</a>
			
			{!! Form::open(['action' => ['PostsController@destroy',$post->id],'method'=>'DELETE']) !!}
		    {{ form::submit('delete',['class'=>'btn btn-primary']) }}
			{!! Form::close() !!}
		@endif
	@endif
@endsection