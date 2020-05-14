<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>BLOGON</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		
		<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
		
		
		<link rel="stylesheet" href="/lsapp/public/css/swiper.min.css">
		<link rel="stylesheet" href="/lsapp/public/css/homestyle.css">
		
		
	</head>
	<body class="welcome">
		  <span id="splash-overlay" class="splash"></span>
		  <span id="welcome" class="z-depth-4"></span>
		  <div class="area">
				  @include('inc.navbar')

				  <div class="slider" style="background-image: url(/lsapp/public/Images/slider-back.jpg)">
						  	<h2 class="category">CATEGORIES</h2>
						  	<div class="swiper-container">
							    <div class="swiper-wrapper"> 
							      <div class="swiper-slide" >
							      	<div class="card" id="image">
										<img src="/lsapp/public/Images/movies.jpg" class="card-img-top cat"height="163px">
										<a href="/lsapp/public/posts/movies"><div class="quick-view">MOVIES</div></a>
									</div>
							      </div>

							     <div class="swiper-slide" >
							      	<div class="card" id="image">
										<img src="/lsapp/public/Images/meme.png" class="card-img-top cat"height="163px">
										<a href="/lsapp/public/posts/memes"><div class="quick-view">MEMES</div></a>
									</div>
							      </div>
							      <div class="swiper-slide" >
							      	<div class="card" id="image">
										<img src="/lsapp/public/Images/music.jpg" class="card-img-top cat"height="163px">
										<a href="/lsapp/public/posts/music"><div class="quick-view">MUSIC</div></a>
									</div>
							      </div>
							      <div class="swiper-slide" >
							      	<div class="card" id="image">
										<img src="/lsapp/public/Images/travel.jpg" class="card-img-top cat"height="165px">
										<a href="/lsapp/public/posts/travel"><div class="quick-view">TRAVEL</div></a>
									</div>
							      </div>
							      <div class="swiper-slide" >
							      	<div class="card" id="image">
										<img src="/lsapp/public/Images/food.jpg" class="card-img-top cat"height="163px">
										<a href="/lsapp/public/posts/food"><div class="quick-view">FOOD</div></a>
									</div>
							      </div>
							      <div class="swiper-slide" >
							      	<div class="card" id="image">
										<img src="/lsapp/public/Images/book.jpg" class="card-img-top cat"height="163px">
										<a href="/lsapp/public/posts/books"><div class="quick-view">BOOKS</div></a>
									</div>
							      </div>
							      <div class="swiper-slide" >
							      	<div class="card" id="image">
										<img src="/lsapp/public/Images/animals.jpg" class="card-img-top cat"height="163px">
										<a href="/lsapp/public/posts/WildLife"><div class="quick-view">WILDLIFE</div></a>
									</div>
							      </div>
							    </div>
							</div>
				  	</div> 

				   <div class="container-fluid bg-light-gray" id="mainbody">
					   	<div class="container mt-5 mb-5">
							<div class="row no-gutters">

								<div class="col-md-12">
								@if(count($posts)>0)

        							@foreach($posts as $post)
									<div class="card" id="posts">
										<div class="card-header text-center"> 
											<h6 style="color:#777777">Posted By {{$post->user->name}} at {{$post->created_at}} on {{$post->category}}
											<h5 class="card-title" style="color:green ;font-variant:"> 
												{{$post->title}}
											</h5> 
										</div>
										<div class="card-body"> 
											@if($post->cover_image !='noimage.jpg')
												<img class="card-img-top" src='/lsapp/storage/app/public/cover_image/{{$post->cover_image}}' alt="Card image cap" height="500px"> 
											@endif
											<p  class="card-text describe" > 
												{!! $post->body !!}
												
											</p>
										</div> 
										<div class="card-footer text-center"> 
											<a href="/lsapp/public/posts/{{$post->id}}/comments">
											<button class="post-btn float-left" id="vote"> 
												  <i class="fas fa-comment-alt"></i>  Comment
											</button>
											</a>
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
									</div>
									@endforeach
									@endif
									
								</div>
							</div>
						</div>
				   </div>

				  

				  <ul class="circles">
					   		<li></li>
					   		<li></li>
					   		<li></li>
					   		<li></li>
					   		<li></li>
					   		<li></li>
					   		<li></li>
					   		<li></li>
					   		<li></li>
					   		<li></li>
				  </ul>
		   </div>

		   <footer class="page-footer deep-purple darken-3 valign-wrapper">
				    <div class="footer-copyright deep-purple darken-4">
				      <div class="container-fluid bg-dark header-top d-none d-md-block">	
						<div class="container" id="footer">
							<div class="row">
								<div class="col-md-4">
									<div class="footer-section">
										<h4 class="title"><b>CreatedBy:</b></h4>
										<ul class="icons">
										<li>Mahipal Purohit 2018130041</li>
											<li>Bhargavi Poyekar 2018130040</li>
											<li>Pritam Rao 2018130044</li>
										</ul>
									</div><!-- footer-section -->
								</div><!-- col-lg-4 col-md-6 -->
								<div class="col-md-4">
									<div class="footer-section">
										<h4>&copy; 2020 WTL</h4>
									</div><!-- footer-section -->
								</div>

								<div class="col-md-4">
										<div class="footer-section">
											<h4 class="title"><b>CATEGORIES</b></h4>
											<div class="row">
												<div class="col-md-6">
													<ul>
														<li><a href="/lsapp/public/posts/movies">Movies</a></li>
														<li><a href="/lsapp/public/posts/memes">Memes</a></li>
														<li><a href="/lsapp/public/posts/music">Music</a></li>
														<li><a href="/lsapp/public/posts/travel">Travel</a></li>
													</ul>
												</div>
												<div class="col-md-6">
													<ul>
														<li><a href="/lsapp/public/posts/food">Food</a></li>
														<li><a href="/lsapp/public/posts/books">Books</a></li>
														<li><a href="/lsapp/public/posts/WildLife">WildLife</a></li>
														
													</ul>
												</div>
											</div>
										</div><!-- footer-section -->
								</div><!-- col-lg-4 col-md-6 -->
							</div><!-- row -->
						</div><!-- container -->
					  </div>
				    </div>
				  </footer>
		  
		  <script type="text/javascript" src="/lsapp/public/js/swiper.min.js"></script>

		   <script>
			    var swiper = new Swiper('.swiper-container', {
			      effect: 'coverflow',
			      grabCursor: true,
			      keyboard:true,
			      centeredSlides: true,
			      slideToClickedSlide:true,
			      slidesPerView: 'auto',
			      initialSlide:'3',
			      coverflowEffect: {
			        rotate: 50,
			        stretch: 0,
			        depth: 100,
			        modifier: 1,
			        slideShadows : true,
			      },
			      pagination: {
			        el: '.swiper-pagination',
			      },
			    });


			document.getElementById("date").innerHTML = Date();
			</script>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		
		
	</body>
</html>