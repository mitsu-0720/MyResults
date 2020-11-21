<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class SearchController extends Controller
{
    public function users(Request $request) {
        $keyword = $request->input('keyword');
        $query = User::query();
        if(!empty($keyword)) {
            $query->where('name', 'like', '%' . $keyword . '%')->orWhere('detail', 'like', '%' . $keyword . '%');
        }
        $data = $query->orderBy('created_at', 'desc')->get();
        $users = User::all();
        return view('searchs.users')->with([
            'users' => $users,
            'data' => $data,
            'keyword' => $keyword,
            ]);
    }

    public function posts(Request $request) {
        $keyword = $request->input('keyword');
        $query = Post::query();
        if(!empty($keyword)) {
            $query->where('detail', 'like', '%' . $keyword . '%');
        }
        $data = $query->orderBy('created_at', 'desc')->get();
        $posts = Post::all();
        return view('searchs.posts')->with([
            'posts' => $posts,
            'data' => $data,
            'keyword' => $keyword,
            ]);
    }
}
