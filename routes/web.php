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

Auth::routes(['verify' => true]);

Route::get('/home', 'ViewsController@home')->middleware('verified');
// Route::get('/users/profile/{username}', function($username = 'aaa') {
//     return view('users.index');
// });
Route::get('/login/guest', 'Auth\LoginController@guestLogin');


Route::get('/posts/{post}', 'PostsController@show')->where('post', '[0-9]+');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/edit/{post}', 'PostsController@edit');
Route::patch('/posts/{post}', 'PostsController@update');
Route::delete('/posts/{post}', 'PostsController@destroy');
Route::get('/posts/timeline', 'PostsController@timeline');

Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::get('/comments/edit/{comment}', 'CommentsController@edit');
Route::patch('/comments/{comment}', 'CommentsController@update');

Route::post('/posts/{post}/like', 'LikeController@like');
Route::post('/posts/{post}/unlike', 'LikeController@unlike');

Route::get('/users/edit/{user}', 'UsersController@edit');
Route::patch('/users/update', 'UsersController@update');
// Route::get('/users/profile/{user:username}', 'UsersController@show');
Route::get('/users/profile/{user}', 'UsersController@show');
Route::get('/users/like/{user}', 'UsersController@like');
Route::get('/users/tag/{user}', 'UsersController@tag');

Route::get('/search/users', 'SearchController@users');
Route::get('/search/posts', 'SearchController@posts');

Route::post('/users/{user}/follow', 'FollowUserController@follow');
Route::post('/users/{user}/unfollow', 'FollowUserController@unfollow');
Route::get('/users/{user}/following', 'UsersController@following');
Route::get('/users/{user}/followers', 'UsersController@followers');

Route::get('/tags/{tag:name}', 'TagsController@show');
Route::get('/search/tags', 'TagsController@search');
// Route::get('/tags/{user:username}/{tag:name}', 'TagsController@userTag');


