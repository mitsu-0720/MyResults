<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;;
use App\Post;
use App\User;
use App\Http\Requests\CreatePostRequest;
use Carbon\Carbon;
use App\Like;
use App\FollowUser;

class UsersController extends Controller
{
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

}
