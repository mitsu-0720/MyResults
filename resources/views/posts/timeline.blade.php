@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 bg-white pt-4">
          <h1 class="text-center mb-4">タイムライン</h1>
          <p class="text-center">フォローしたユーザーの投稿が表示されます</p>
          <hr>
            @foreach($posts as $post)
              <div class="col-md-8 offset-md-2">
                <div class="row">
                  <div class="col-6">
                    <p class="mb-2"><a href="{{ action('UsersController@show', $post->user) }}"><img src="{{ $post->user->path }}" width="50px" height="50px" class="circle mr-2">{{ $post->user->name }}</a></p>
                  </div>
                  @if($post->user->id == Auth::user()->id)
                  <div class="col-6">
                    <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      <p class="text-right mb-0 mt-1"><i class="fas fa-ellipsis-h fs-24 text-dark"></i></p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ action('PostsController@edit', $post) }}">編集</a>
                      <form method="post" action="{{ url('/posts', $post->id) }}">
                      @csrf
                      @method('DELETE')
                      <input type="submit" class="dropdown-item text-danger" href="{{ action('PostsController@destroy', $post) }}" value="削除" onclick='return confirm("この投稿を本当に削除しますか？");'>
                      </form>
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
