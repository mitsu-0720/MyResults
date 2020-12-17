@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 bg-white">
          <p class="fs-24 mb-4">{{ $user->name }}→<span class="badge badge-pill badge-info fs-24 mt-3">{{ $tag->name }}</span></p>
          @foreach($posts as $post)
          <div class="col-md-10 offset-md-1">
              <p class="mb-2"><a href="{{ action('UsersController@show', $post->user) }}"><img src="{{ $post->user->path }}" width="50px" height="50px" class="circle mr-2">{{ $post->user->name }}</a></p>

              <a href="{{ action('PostsController@show', $post) }}"><img src="{{ $post->path }}" width="100%"></a>
              <p class="">{{ $post->detail }}</p>
              <div class="row justify-content-between">
                  <div class="col-6 pl-4">
                      <i class="fas fa-reply"></i> {{ count($post->comments) }} <i class="fas fa-heart ml-2"></i> {{  count($post->likes)}}
                  </div>
                  <div class="col-6">
                      <p class="mr-1 text-right">{{ $post->created_at->format('Y.m.d H:i') }}</p>
                  </div>
              </div>
          </div>
          <hr>
          @endforeach
        </div>
    </div>
</div>
@endsection
