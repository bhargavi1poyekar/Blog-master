<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile Page</title>
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
        
        
        <link rel="stylesheet" href="/lsapp/public/css/swiper.min.css">
        <link rel="stylesheet" href="/lsapp/public/css/homestyle.css">
        <link rel="stylesheet" href="/lsapp/public/css/prostyles.css">
        <style>
          body{
                background-image: url(/lsapp/public/Images/pb1.jpg);
                background-size:cover;
            }
          </style>
	
</head>
<body>

<div class="container-fluid bg-dark header-top d-none d-md-block">
            
                @include('inc.navbar')

<div class="main">
<div class="wrapper">
    <div class="left">
      @if($user->profile_pic)
        <img src=" /lsapp/storage/app/public/profile_images/{{$user->profile_pic}}" class="dp" alt="user" width="100">
      @else
      <img src=" /lsapp/public/Images/default_user_img.png" alt="user" width="100">
      @endif
        <h4>{{$user->name}}</h4>
         <p>{{$user->username}}</p>
    </div>
    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Email</h4>
                    <p>{{$user->email}}</p>
                 </div>
                 <div class="data">
                   <h4>Contact No.</h4>
                    <p>{{$user->contact_number}}</p>
              </div>
            </div>
        </div>
      
      <div class="Bio">
            <h3>BIO</h3>
            <div class="Bio_data">
                 <div class="data">
                    
                    <p>{{$user->bio}}</p>
                 </div>
                 
            </div>
        </div>
      <div class="edit">
      	<a href="{{Auth::User()->id}}/edit" target="_blank" class="button">Edit Profile</a>
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