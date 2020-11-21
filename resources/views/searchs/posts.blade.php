@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 bg-white">
            <h1 class="text-center mt-4">検索</h1>

            <div class="form-group mt-4 text-center">
              <form class="" action="{{ url('/search/posts') }}">
                    <input type="text" name="keyword" value="{{ $keyword }}" class="form-control mr-2" placeholder="検索ワードを入力">
                    <input type="submit" value="検索" class="register-btn-mini mt-3">
              </form>
            </div>
            <hr>

            @if(!empty($keyword))
              @foreach($data as $post)
                <div class="col-md-10 offset-md-1">
                    <p><a href="{{ action('PostsController@show', $post) }}"><img src="{{ $post->user->path }}" width="50px" height="50px" class="circle mr-2">{{ $post->user->name }}</a></p>

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
            @else

            @foreach($posts as $post)
              <div class="col-md-8 offset-md-2 pt-4">
                  <p><a href="{{ action('PostsController@show', $post) }}"><img src="{{ $post->user->path }}" width="50px" height="50px" class="circle mr-2">{{ $post->user->name }}</a></p>

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

            @endif
        </div>
    </div>
</div>
@endsection
