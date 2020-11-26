@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 bg-white">
            <p class="mt-2 text-center fs-20">
              <a href="{{ action('UsersController@show', $user) }}"><img src="{{ $user->path }}" width="50px" height="50px" class="circle mr-3">{{ $user->name }}</a>
            </p>

            <div class="row">
              <div class="col-6 bg-light fs-20 text-center border-right">
                <a href="{{ action('UsersController@following', $user) }}">フォロー</a>
              </div>

              <div class="col-6 bg-light fs-20 text-center">
                <a href="{{ action('UsersController@followers', $user) }}" class="text-dark">フォロワー</a>
              </div>
            </div>

            @foreach($user->followUsers as $follower)
            <p><img src="" alt=""></p>
            @endforeach

        </div>
    </div>
</div>
@endsection
