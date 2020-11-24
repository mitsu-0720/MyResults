@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 bg-white pt-4">
            @foreach($posts as $post)
              <div class="col-md-8 offset-md-2">
                <div class="row">

                  <div class="col-6">
                    <p><a href="{{ action('UsersController@show', $post->user) }}"><img src="{{ $post->user->path }}" width="50px" height="50px" class="circle mr-2">{{ $post->user->name }}</a></p>
                  </div>
                  @if($post->user->id == Auth::user()->id)
                  <div class="col-6">
                    <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      <p class="text-right mb-0 mt-1"><i class="fas fa-ellipsis-h fs-24 text-dark"></i></p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ action('PostsController@edit', $post) }}"><i class="far fa-edit mr-2"></i>編集</a>
                      <a class="dropdown-item text-danger" href="{{ action('UsersController@edit', Auth::user()->id) }}"><i class="far fa-trash-alt mr-2 fs-18"></i>削除</a>
                    </div>
                  </div>
                  @endif
                </div>
                  
                  <a href="{{ action('PostsController@show', $post) }}"><img src="{{ $post->path }}" width="100%"></a>
                  <p class="">{{ $post->detail }}</p>
                  <div class="row justify-content-between">
                      <div class="col-6 pl-4">
                          <i class="fas fa-reply"></i> 0 <i class="fas fa-heart ml-2"></i> 0
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
