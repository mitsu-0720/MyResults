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
}
