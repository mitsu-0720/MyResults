<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;;
use App\Post;
use App\User;
use App\Http\Requests\CreatePostRequest;
use Carbon\Carbon;
use App\Like;
use App\Tag;
use App\FollowUser;

class UsersController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(User $user) {
        $user = Auth::user();
        $posts = Post::where('user_id', $user->id)->latest()->get();
        return view('users.index')->with([
            'user' => $user,
            'posts' => $posts,
            ]);
    }

    public function edit(User $user) {
        return view('users.edit')->with('user', $user);
    }

    public function update(Request $request, User $user) {
        $user = Auth::user();
        $nowtime = Carbon::now();

        // 更新処理
        $user->name = $request->name;
        
        // 画像変更の有無
        if(!empty($request->path)) {
            $filename = $user->id . "_" . $nowtime . "_" . $request->file('path')->getClientOriginalName();
            $request->file('path')->storeAs('public',$filename);
            $user->path = '/storage/' . $filename;
        } else {
            $user->path = $user->path;
        }
        $user->detail = $request->detail;
        $user->save();
        return redirect('/home');
    }

    public function show(User $user) {
        $posts = Post::where('user_id', $user->id)->latest()->paginate(10);
        // $likes = Like::where('user_id', $user->id)->get();
        $defaultCount = count($user->followUsers);
        $defaultFollowed = $user->followUsers->where('id', \Auth::user()->id)->first();
        if(empty($defaultFollowed)) {
            $defaultFollowed = false;
        } else {
            $defaultFollowed = true;
        }
        return view('users.show')->with([
            'user' => $user,
            'posts' => $posts,
            // 'likes' => $likes,
            'defaultFollowed' => $defaultFollowed,
            'defaultCount' => $defaultCount,
        ]);
    }

    public function like(User $user) {
        $likes = Like::where('user_id', $user->id)->paginate(10);
        $defaultCount = count($user->followUsers);
        $defaultFollowed = $user->followUsers->where('id', \Auth::user()->id)->first();
        if(empty($defaultFollowed)) {
            $defaultFollowed = false;
        } else {
            $defaultFollowed = true;
        }
        return view('users.like')->with([
            'user' => $user,
            'likes' => $likes,
            'defaultFollowed' => $defaultFollowed,
            'defaultCount' => $defaultCount,
        ]);
    }

    public function tag(User $user) {
        $posts = Post::where('user_id', $user->id)->latest()->paginate(30);
        $defaultCount = count($user->followUsers);
        $defaultFollowed = $user->followUsers->where('id', \Auth::user()->id)->first();
        if(empty($defaultFollowed)) {
            $defaultFollowed = false;
        } else {
            $defaultFollowed = true;
        }
        
        foreach($posts as $post) {
            $tags = $post->tags()->orderby('tag_id')->get();
            $tagName = [];
            foreach($tags as $tagRecord) {
                $tagName[] = $tagRecord->name;
            }
            $post['tags'] = $tagName;
        }
        
        return view('users.tag')->with([
            'user' => $user,
            'posts' => $posts,
            'defaultFollowed' => $defaultFollowed,
            'defaultCount' => $defaultCount,
        ]);
    }

    public function following(User $user) {
        return view('users.following')->with('user', $user);
    }

    public function followers(User $user) {
        return view('users.followers')->with('user', $user);
    }

}
