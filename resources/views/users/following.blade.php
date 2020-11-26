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
                <a href="{{ action('UsersController@following', $user) }}" class="text-dark">フォロー</a>
              </div>

              <div class="col-6 bg-light fs-20 text-center">
                <a class="" href="{{ action('UsersController@followers', $user) }}">フォロワー</a>
              </div>
            </div>

            <div class="mt-4">
              @foreach($user->follows as $following)
              <p><a href="{{ action('UsersController@show', $following) }}"><img src="{{ $following->path }}" width="50px height="50px class="circle mr-2">{{ $following->name }}</a></p>
              <p>{{ $following->detail }}</p>
              <hr>
              @endforeach
            </div>

        </div>
    </div>
</div>
@endsection
