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

Route::post('/post/{post}/comments', 'CommentsController@store');

Route::get('/users/edit/{user}', 'UsersController@edit');
Route::patch('/users/update', 'UsersController@update');

