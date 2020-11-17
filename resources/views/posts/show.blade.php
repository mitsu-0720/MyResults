@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

      <div class="col-md-6 bg-white">
        <!-- 投稿部分 -->
          <section>
            <div class="row mb-2 mt-3">
              <div class="col-6 pl-4">
                <img src="{{ $post->user->path }}" width="50px" height="50px" class="circle mr-2">{{ $post->user->name }}
              </div>
              @if($post->user->id == Auth::user()->id)
              <div class="col-6">
                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  <p class="text-right mb-0 mt-1"><i class="fas fa-ellipsis-h fs-24"></i></p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ action('PostsController@edit', $post) }}"><i class="far fa-edit mr-2"></i>編集</a>
                    <a class="dropdown-item" href="{{ action('UsersController@edit', Auth::user()->id) }}"><i class="far fa-trash-alt mr-2 fs-18"></i>削除</a>
                </div>
              </div>
              @endif
            </div>
            <img src="{{ $post->path }}" width="100%">
            <p class="mt-2">{{ $post->detail }}</p>
            <hr>
            <p>{{ $post->created_at->format('Y.m.d H:i') }}</p>
            <hr>
            <p><i class="far fa-heart"></i> 0</p>
            <hr>
          </section>
            
          <!-- コメントフォーム -->
          <section>
            <p>コメント ({{ count($post->comments) }})</p>
            <form method="POST" action="{{ action('CommentsController@store', $post) }}">
              @csrf
              <textarea name="body" id="" rows="4" class="mb-0" placeholder="コメントする...">{{ old('body') }}</textarea>
              <div class="text-right">
                <!-- <label for="submit"><i class="far fa-paper-plane"></i></label>
                <button type="submit" class="mr-1 display-none" name="submit"><i class="far fa-paper-plane"></i></button> -->
                <input type="submit" value="&#xf1d8;" class="fas mr-3 fs-20 pr-2 pl-2">
              </div>
            </form>
            <hr>
          </section>

          <!-- コメント一覧 -->
          <section class="mt-4">
            @forelse($comments as $comment)
            <div class="row mb-2 mt-3">
              <div class="col-6">
                <img src="{{ $post->user->path }}" width="50px" height="50px" class="circle mr-2">{{ $post->user->name }}
              </div>
              <div class="col-6">
                <p class="text-right pt-2 pr-2"><i class="fas fa-ellipsis-h fs-24"></i></p>
              </div>
            </div>
            <p class="pl-3">{{ $comment->body }}</p>
            <hr>
            @empty
            <p>まだコメントはありません</p>
            @endforelse
          </section>
        </div>
    </div>
</div>
@endsection
