<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Post;

class TagsController extends Controller
{
    public function show (Tag $tag) {
        // $posts = Post::where('tag_id', $tag->id)->get();
        $posts = Tag::find($tag->id)->posts()->latest()->get();
        return view('tags.show')->with([
            'tag' => $tag,
            'posts' => $posts,
        ]);
    }

    public function userTag (Tag $tag , User $user) {
        // $posts = Post::where('tag_id', $tag->id)->get();
        $posts = Tag::find($tag->id)->posts()->latest()->get();
        return view('tags.userTag')->with([
            'tag' => $tag,
            'posts' => $posts,
            'user' => $user,
        ]);
    }

    public function search(Request $request) {
        $keyword = $request->input('keyword');
        $query = Tag::query();
        if(!empty($keyword)) {
            $query->where('name', 'like', '%' . $keyword . '%');
        }
        $data = $query->orderBy('created_at', 'desc')->get();
        $tags = Tag::all();
        return view('tags.search')->with([
            'tags' => $tags,
            'data' => $data,
            'keyword' => $keyword,
            ]);
    }
}
