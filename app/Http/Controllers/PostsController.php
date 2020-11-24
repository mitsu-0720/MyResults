<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;
use App\Comment;
use App\Http\Requests\CreatePostRequest;
use Carbon\Carbon;
use App\Like;
use \InterventionImage;

class PostsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function show(Post $post) {
        $post->load('likes');
        $defaultCount = count($post->likes);
        $defaultLiked = $post->likes->where('user_id', \Auth::user()->id)->first();
        if(empty($defaultLiked)) {
            $defaultLiked == false;
        } else {
            $defaultLiked == true;
        }

        $comments = Comment::where('post_id', $post->id)->latest()->get();
        return view('posts.show')->with([
            'post' => $post,
            'comments' => $comments,
            'defaultLiked' => $defaultLiked,
            'defaultCount' => $defaultCount,
        ]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        // $nowtime = Carbon::now();
        $user = Auth::user();
        $file = $request->file('path');
        $filename = $file->getClientOriginalName();
        $request->file('path')->storeAs('public',$filename);
        // InterventionImage::make($file)->blur(80)->save(public_path('/storage/' . $filename ) );;
        // $img = InterventionImage::make($file);
        // dd($img->filesize());

        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->path = '/storage/' . $filename;
        $post->detail = $request->detail;
        $post->save();
        // $user->posts()->save($post);
        // session()->flash('flash_message', '投稿が完了しました');
        return redirect('/home');
    }

    public function edit(Post $post) {
        return view('posts.edit')->with('post', $post);
    }

    public function update(Request $request, Post $post) {
        // 画像変更の確認
        if(!empty($request->path)) {
            $file = $request->file('path');
            $filename = $file->getClientOriginalName();
            $request->file('path')->storeAs('public',$filename);
            $post->path = '/storage/' . $filename;
        }else {
            $post->path = $post->path;
        }
        $post->detail = $request->detail;
        $post->save();
        // $user->posts()->save($post);
        // session()->flash('flash_message', '投稿が完了しました');
        return redirect('/home');
    }

    public function timeline() {
        $posts = Post::latest()->get();
        $users = User::all();
        return view('posts.timeline')->with([
            'posts' => $posts,
            'users' => $users,
            ]);
    }
}
