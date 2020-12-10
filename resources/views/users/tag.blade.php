@extends('layouts.app')

@section('content')
<!-- プロフィール部分 -->
<div class="container">
  <div class="row justify-content-center">
    
    <div class="col-md-2 bg-white d-flex align-items-center justify-content-center">
      <img src="{{ $user->path }}" width="100px" height="100px" class="circle">
    </div>
    <div class="col-md-6 bg-white pl-4 pb-4">
      <h1 class="h4 pt-3">
        {{ $user->name }} ({{ $user->username }})
        
        <!-- 自分はフォローできないようにする -->
        @if(!($user->id == Auth::user()->id))
        <follow-component
        :user-id = "{{ json_encode($user->id) }}"
        :default-Followed = "{{ json_encode($defaultFollowed) }}"
        :default-Count = "{{ json_encode($defaultCount) }}"
        ></follow-component>
        @endif
      </h1>
      <p>
        <span class="mr-2 bold"><a href="{{ action('UsersController@following', $user) }}">フォロー {{ count($user->follows) }}</a></span>
        <span class="mr-2 bold"><a href="{{ action('UsersController@followers', $user) }}">フォロワー {{ count($user->followUsers) }}</a></span>
        <span class="bold">{{ count($user->posts) }}件の投稿</span>
      </p>
      <p class="pt-2">{{ $user->detail }}</p>
    </div>
  </div>
</div>

<div class="container mt-3">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="row">
        <div class="col-4 bg-white text-center border-right border-bottom">
          <p class="fs-20">
            <a href="{{ action('UsersController@show', $user) }}"><i class="fas fa-pen fs-20 mr-2"></i>投稿</a>
        </p>
        </div>
        <div class="col-4 bg-white text-center border-right active-select">
          <p class="fs-20">
            <a href="{{ action('UsersController@tag', $user) }}"><i class="fas fa-hashtag fs-20 mr-2"></i>タグ</a>
          </p>
        </div>
        <div class="col-4 bg-white text-center border-bottom">
          <p class="fs-20">
            <a href="{{ action('UsersController@like', $user) }}"><i class="far fa-heart fs-20 mr-2"></i>いいね</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 bg-white">
      <p class="fs-20 mt-3">{{ $user->name }}さんのタグ一覧</p>
    </div>
  </div>
</div>

@if($user->id == Auth::user()->id)
<div class="postbtn bg-primary circle d-flex align-items-center justify-content-center">
    <a href="{{ action('PostsController@create') }}" class="p-absolute">
        <i class="fas fa-plus text-white fs-32"></i>
    </a>
</div>
@endif
@endsection