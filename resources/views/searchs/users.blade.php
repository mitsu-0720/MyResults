@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 bg-white">
            <h1 class="text-center mt-4">ユーザー検索</h1>

            <div class="form-group mt-4 text-center">
              <form class="" action="{{ url('/search/users') }}">
                    <input type="text" name="keyword" value="{{ $keyword }}" class="form-control mr-2" placeholder="名前、自己紹介などで検索(例:beatmania,大学生)">
                    <input type="submit" value="検索" class="register-btn-mini mt-3">
              </form>
            </div>

            <div class="row">

              <div class="col-6 bg-light fs-20 text-center border-right">
                <a href="{{ url('/search/posts') }}">投稿</a>
              </div>

              <div class="col-6 bg-light fs-20 text-center">
                <a class="text-dark" href="{{ url('/search/users') }}">ユーザー</a>
              </div>

            </div>
            <hr>

            @if(!empty($keyword))
              @foreach($data as $user)
                <div class="col-md-10 offset-md-1">
                    <p><a href="{{ action('UsersController@show', $user) }}"><img src="{{ $user->path }}" width="50px" height="50px" class="circle mr-2">{{ $user->name }}</a></p>

                    <p class="">{{ $user->detail }}</p>
                </div>
                <hr>
              @endforeach

              @else

              @foreach($users as $user)
                <div class="col-md-10 offset-md-1">
                    <p><a href="{{ action('UsersController@show', $user) }}"><img src="{{ $user->path }}" width="50px" height="50px" class="circle mr-2">{{ $user->name }}</a></p>

                    <p class="">{{ $user->detail }}</p>
                </div>
                <hr>
              @endforeach

            @endif
        </div>
    </div>
</div>
@endsection
