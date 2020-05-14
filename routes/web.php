<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/about','PagesController@about');

// Route::resource('/posts','PostsController');
Route::get('/posts/create','PostsController@create');
Route::get('/posts/{id}/edit','PostsController@edit');
Route::put('/posts/{id}','PostsController@update');
Route::get('/posts/{id}/delete','PostsController@destroy');

Route::post('/posts','PostsController@store');

Route::get('/profile/posts','UsersController@myPosts');
Route::get('/profile/saved','UsersController@mySave');
Route::get('/profile/{id}','UsersController@profile');
Route::get('/profile/{id}/edit','UsersController@edit');
Route::put('/profile/{id}','UsersController@update');

Route::get('/vote/{id}','VotesController@create'); 

Route::get('/posts/{category?}', 'PostsController@index');
Route::get('/posts/save/{id}','PostsController@post_save');
Route::get('/posts/save/remove/{id}','PostsController@post_remove');
Route::get('/posts/{id}/comments','CommentController@index');
Route::post('/posts/{id}/comments','CommentController@store');
Route::post('/posts/search','PostsController@search');

// Route::get('/service', function () {
//     return view('pages.about');
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');




