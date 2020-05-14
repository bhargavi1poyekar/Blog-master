<head>
		<meta charset="utf-8">
		<title>BLOGON</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		
		<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
		
		
		<link rel="stylesheet" href="/lsapp/public/css/swiper.min.css">
		<link rel="stylesheet" href="/lsapp/public/css/homestyle.css">
	</head>

<header class="navbar-fixed"> 
            <div class="container-fluid bg-dark header-top d-none d-md-block">
          
            <div class="row text-light pt-2 pb-2">
              <div class="col-md-3 user" >
                <i class="far fa-envelope"></i></i>
                @if(Auth::guest())
                Guest
                @else
                {{Auth::user()->email}}
                @endif
              </div>
              <div class="col-md-3 search">
                
                {!! Form::open(['url'=>'/posts/search' , 'class'=>'form-inline my-2 my-lg-0 input-group md-form form-sm form-2 pl-0' ,'enctype' =>'multipart/form-data' ]) !!}

                {{ Form::text('search_string', '' ,['class'=>' form-control my-0 py-1 red-border','aria-label'=>'Search', 'placeholder'=>'search']) }}

                <div class="input-group-append">
                {{ form::submit('search',['class'=>'fas fa-search']) }}
                </div>
                  {!! Form::close() !!}

                <!-- <form class="form-inline my-2 my-lg-0 input-group md-form form-sm form-2 pl-0">
                  
                      <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">

                    <div class="input-group-append">
                       <span class="input-group-text red lighten-3" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></span>
                    </div>
                  </form> -->
              </div>
              
              @if(Auth::guest())

                <div class="col-md-4" id="log-sign">
                  <a href="{{ route('login')}}"><button class="log-in">LOG IN</button></a>
                
                  <a href="{{ route('register') }}"><button class="sign-up">SIGN-UP</button></a>
                </div>
              @else
                <div class="col-md-2" id="log-sign">
                  <a href="/lsapp/public/profile/saved"><button class="sign-up">Saved</button></a>
                  <a href="/lsapp/public/profile/posts"><button class="log-in">MyPosts</button></a>
                </div>
                <div class="col-md-3" id="log-sign">
                 
                  <a href="/lsapp/public/posts/create"><button class="log-in">create</button></a>
                  <a href="/lsapp/public/profile/{{Auth::user()->id}}">
                    <button class="sign-up"><i class="far fa-user"></i> </button>
                  </a>
                  
                  <a href="{{ route('logout') }}" ><button class="log-in" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__('LogOut')}}</button></a>
                  <form id = "logout-form" action="{{route('logout')}}" method="POST" style="display:none;" >
                  @csrf
                  </form>
                </div>
              @endif
              <div class="col-md-1" id="log-sign">
                <a href="/lsapp/public/posts/"><button class="log-in"><i class="fas fa-home"></i> </button></a> 
              </div>
            </div>
          </div>
          </header>

@if(count($errors)>0)
  @foreach($errors->all() as $error)
    <div class ='alert alert-danger'>
      {{$error}}
    </div>
  @endforeach

@endif


@if( session('success') )
  <div class='alert alert-success'>
    {{session('success')}}
  </div>
  
@endif


@if(session('error'))
  <div class='alert alert-danger'>
    {{session('error')}}
  </div>
  
@endif