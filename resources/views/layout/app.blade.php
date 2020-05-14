<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','LSAPP')}}</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

    </head>
    <body>
    	@include('inc.navbar')
        <br><br><br><br><br>
        @include('inc.message')
    	<div class='container '>
      	  @yield('content')
        </div>

        <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
            <script>
                ClassicEditor
                .create(document.querySelector('#article-ckeditor'))
                .catch(error=>{
                console.error(error);
                });                                             
            </script>
<!-- 
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script> -->
    </body>
</html>
