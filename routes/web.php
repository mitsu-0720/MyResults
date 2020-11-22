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

Route::get('/', function () {
    return view('views.index');
});

Auth::routes();

Route::get('/home', 'ViewsController@home');

Route::get('/posts/{post}', 'PostsController@show')->where('post', '[0-9]+');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/edit/{post}', 'PostsController@edit');
Route::patch('/posts/{post}', 'PostsController@update');

Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::get('/comments/edit/{comment}', 'CommentsController@edit');
Route::patch('/comments/{comment}', 'CommentsController@update');

Route::get('/users/edit/{user}', 'UsersController@edit');
Route::patch('/users/update', 'UsersController@update');
Route::get('/users/profile/{user:username}', 'UsersController@show');

Route::get('/search/users', 'SearchController@users');
Route::get('/search/posts', 'SearchController@posts');


