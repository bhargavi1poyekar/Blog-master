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
	<div class="container cpost">
	<h1>Create a Post</h1>

	{!! Form::open([ 'action' => 'PostsController@store' , 'enctype' =>'multipart/form-data' ]) !!}
		<div class="form-group">
			{{ Form::label('title', 'Title') }}
			{{ Form::text('title', '' ,['class'=>'form-control', 'placeholder'=>'Title']) }} 
		</div>
		<div class="form-group">
			{{ Form::label('body', 'Body') }}
			{{ Form::textarea('body', '' ,['id'=>'article-ckeditor','class'=>'form-control', 'placeholder'=>'Body Text']) }} 
		</div>

		<div class="form-group">
			{{ Form::select('category', ['movie'=>'Movie','music' => 'Music',
			'memes'=>'Memes','travel'=>'Travel','food'=>'Food','books'=>'Books', 'wildlife' => 'Wildlife'], null, ['placeholder' => 'choose a category...']) }}
		</div>
		
		<div class="form-group ">
			{{form::file('cover_image')}}
		</div>
				<div class="submit">
		{{ form::submit('submit',['class'=>'btn btn-primary post-btn']) }}
			</div>
		
    
	{!! Form::close() !!}

			</div>
@endsection