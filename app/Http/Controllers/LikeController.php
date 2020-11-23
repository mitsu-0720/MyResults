<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Like;

class LikeController extends Controller
{
    public function like(Post $post) {
        $like = Like::create([
            'user_id' => \Auth::user()->id,
            'post_id' => $post->id
        ]);
        $likeCount = count(Like::where('post_id', $post->id)->get());
        return response()->json(['likeCount' => $likeCount]);
    }

    public function unlike(Post $post) {
        $like = Like::where('user_id', \Auth::user()->id)->where('post_id', $post->id)->first();
        $like->delete();
        $likeCount = count(Like::where('post_id', $post->id)->get());

        return response()->json(['likeCount' => $likeCount]);
    }
}
