<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class ViewsController extends Controller
{
    public function home() {
        $posts = Post::where('user_id', Auth::user()->id)->latest()->get();
        // $likes = Like::where('user_id', $user->id)->get();
        return view('views.home')->with('posts', $posts);
    }
}
