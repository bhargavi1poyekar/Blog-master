@extends('layouts.app')

@section('content')
<head>
		<meta charset="utf-8">
		<title>Login</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		
		<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
		
		
		<link rel="stylesheet" href="/lsapp/public/css/swiper.min.css">
		<link rel="stylesheet" href="/lsapp/public/css/homestyle.css">
        <link rel="stylesheet" href="/lsapp/public/css/logstyle.css">
        
        <style>
            body{
                background-image: url(/lsapp/public/Images/pb1.jpg);
                background-size:cover;
            }
        </style>
	</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/lsapp/public/posts/create" class="btn btn-primary create">create post</a><br>

                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        
                        @foreach($posts as $post)
                            <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/lsapp/public/posts/{{$post->id}}" class="btn btn-danger">edit</a></td>
                            <th>{!! Form::open(['action' => ['PostsController@destroy',$post->id],'method'=>'DELETE']) !!}
    {{ form::submit('delete',['class'=>'btn btn-primary']) }}
    {!! Form::close() !!}</th>
                            
                        </tr>
                        @endforeach

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
