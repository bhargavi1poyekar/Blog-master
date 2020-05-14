<!DOCTYPE html>
<html>
	<head>
		<title>Edit profile</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
		 <link rel="stylesheet" href="/lsapp/public/css/homestyle.css">
		<link rel="stylesheet" type="text/css" href="/lsapp/public/css/editprofile.css">

		<!-- display loaded image -->
		<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
	
		<!-- display loaded image -->


		<script type="text/javascript">
			function readURL(input) {
        	if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#profile_pic')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
		</script>

		<!-- display loaded image -->

		<style>
			.container:after{
				background-image: url(/lsapp/public/Images/pb1.jpg);
				z-index: -1
			}
			.left{
				background-image: url(/lsapp/public/Images/pb1.jpg);
			}
		</style>

	</head>
	<body >

		<div class="container-fluid bg-dark header-top d-none d-md-block">
            
                @include('inc.navbar')
        </div>

		<div class="container"  >
			{!! Form::open(['action' => ['UsersController@update',$user->id],'method'=>'PUT','enctype' =>'multipart/form-data']) !!}

			<div class="contact-box">
				<div class="left">
					 <div class="text-center">
					 @if($user->profile_pic)
					 <img src="/lsapp/storage/app/public/profile_images/{{$user->profile_pic}}" id='profile_pic' class="profile" alt="avatar" width="200" style="border-radius: 50%">
 				     @else
      				<img src=" /lsapp/public/Images/default_user_img.png" id='profile_pic' class="profile" alt="avatar" width="200" style="border-radius: 50%">
     				 @endif
	         			 
	         			 
	         			 {{form::file('profile_pic',['class'=>'post-btn change','onchange'=>'readURL(this)'])}}
	         			 <!-- <button class="post-btn change" > 
												  Change Profile photo
											</button> -->
	          			 
        	     	 </div>
				</div>
				<div class="right">
					<h2>Edit Profile</h2>
					{{ Form::text('name',$user->name,['class'=>'field', 'placeholder'=>'Name']) }}

					<!-- <input type="text" class="field" placeholder="Name"> -->

					{{ Form::text('user_name',$user->username,['class'=>'field', 'placeholder'=>'user_name']) }}

					<!-- <input type="text" class="field" placeholder="Username"> -->

					{{ Form::text('contact_number',$user->contact_number,['class'=>'field', 'placeholder'=>'Contact_No.']) }}
				<!-- 	<input type="text" class="field" placeholder="Contact No."> -->
					{{ Form::textarea('bio',$user->bio,['class'=>'field Bio', 'placeholder'=>'Add to your Bio...']) }}
				<!-- 	<textarea class="field" placeholder="Add to your Bio..."></textarea> -->
					{{ form::submit('Save Changes',['class'=>'post-btn']) }}
					<!-- <button class="post-btn" > 
												  Save Changes
											</button> -->
											
				</div>
				{!! Form::close() !!}
			</div>
		</div>
		<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	</body>
</html>
