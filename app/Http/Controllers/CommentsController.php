<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Request $request, Post $post, User $user) {
        $this->validate($request, [
            'body' => 'required'
        ]);
        $user = Auth::user();
        $comment = new Comment();
        $comment->body = $request->body;
        $comment->user_id = $user->id;
        $post->comments()->save($comment);
        return redirect()->action('PostsController@show', $post);
    }

    public function edit(Post $post, Comment $comment) {
        return view('comments.edit')->with([
            'post' => $post,
            'comment' => $comment,
        ]);
    }

    public function update(Request $request, Comment $comment) {
        $comment->body = $request->body;
        $comment->save();
        return redirect('/home');
    }
}
