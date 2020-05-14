<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Comment Page</title>
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
        
        
        <link rel="stylesheet" href="/lsapp/public/css/commentstyle.css">

        <link rel="stylesheet" href="/lsapp/public/css/swiper.min.css">
		<link rel="stylesheet" href="/lsapp/public/css/posts.css">
		<style>
            body{
                background-image: url(/lsapp/public/Images/pb1.jpg);
                background-size:cover;
            }
        </style>
	
</head>

<body  >

            @include('inc.navbar')

            <div class="main">
             <div class="container-fluid bg-light-gray" id="mainbody">
					   	<div class="container mt-5 mb-5">
							<div class="row no-gutters">

								<div class="col-md-12">
									<div class="card" id="posts">
										<div class="card-header text-center"> 
											<h6 style="color:#777777">{{$post->user->name}} <span id="date"></span></h6>
											<h5 class="card-title" style="color:green ;font-variant:"> 
												{{$post->title}}
											</h5> 
										</div>
										<div class="card-body"> 
											<img class="card-img-top" src= "/lsapp/storage/app/public/cover_image/{{$post->cover_image}}"
											alt="Card image cap" height="500px"> 
											<p class="card-text describe" > 
												{!!$post->body!!}
											</p>
										</div> 
										<div class="card-footer"> 

											<a href="/lsapp/public/vote/{{$post->id}}">
												<button class="post-btn vote up float-left" id="vote">
													<i class="fas fa-arrow-circle-up"></i>
												</button>
											</a>  

											<button class="post-btn count float-left" id="vote">
												 <div >{{count($post->votes)}}</div>
											</button>

											<a href="/lsapp/public/posts/save/{{$post->id}}"> 
												<button class="post-btn vote down float-left "id="vote">
													save
													<!-- <i class="fas fa-arrow-circle-down">	
													</i> -->
												</button>
											</a>

											<button class="post-btn float-right"id="vote" > 
												  <i class="fas fa-share"></i></i> 
											</button>
											<button class="post-btn float-right" id="vote"> 
												  <i class="fas fa-download"></i></i>  
											</button>
										</div> 

										<div class="comment-section">
											<!-- <textarea class="field" rows="4" cols="130" placeholder="Write your comment..."></textarea><br>
											<button class="post-btn" > 
												  Comment
											</button> -->


											{!! Form::open([ 'action' => ['CommentController@store' ,$id=$post->id],'enctype' =>'multipart/form-data' ]) !!}

											{{ Form::text('user_comment', '' ,['class'=>' form-control','row'=>'4','cols'=>'130', 'placeholder'=>'Write your comment...']) }} 
											<br>
									{{ form::submit('Comment',['class'=>'post-btn']) }}
									{!! Form::close() !!}

										</div> 

										<div class="other-comments">
											@if(count($post->comments)>0)
												@foreach($post->comments as $comment)
													<div class="wrapper">
													    <div class="left">
													        <img src=" /lsapp/storage/app/public/profile_images/{{$comment->user->profile_pic}}" alt="user" width="75">
													    </div>
													    <div class="right">
													        <div class="info">
													            <h6>{{$comment->user->name}}</h6>
													            <div class="info_data">
													                 <div class="data">
													                    <p>{{$comment->comment_body}}
													                    </p>
													                 </div>		  
													            </div>
													        </div>
													    </div>
													</div>
												@endforeach
											@endif			

										</div>

									</div>
								</div>
							</div>
						</div>
			 </div>
			</div>


  			<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</body>
</html>

	

