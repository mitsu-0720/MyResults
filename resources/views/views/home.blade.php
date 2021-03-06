@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <!-- プロフィール部分 -->
            <div class="col-md-2 bg-white d-flex align-items-center justify-content-center">
                <img src="{{ Auth::user()->path }}" width="100px" height="100px" class="circle">
            </div>
            <div class="col-md-6 bg-white pl-4">
                <h1 class="h4 pt-3">{{ Auth::user()->name }} ({{ Auth::user()->username }})</h1>
                <p>
                    <span class="mr-2 bold"><a href="{{ action('UsersController@following', Auth::user()) }}">フォロー {{ count(Auth::user()->follows) }}</a></span>
                    <span class="mr-2 bold"><a href="{{ action('UsersController@followers', Auth::user()) }}">フォロワー {{ count(Auth::user()->followUsers) }}</a></span>
                    <!-- <span class="mr-2 bold">フォロワー0</span> -->
                    <span class="bold">{{ count(Auth::user()->posts) }}件の投稿</span>
                </p>
                <p>{{ Auth::user()->detail }}</p>
            </div>

        <!-- 投稿部分 -->
        <!-- <div class="col-md-8 mt-4 bg-white">
            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">投稿</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">タグ一覧</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">いいね</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    @foreach ($posts as $post)
                    <div class="col-md-8 offset-md-2 pt-4">
                        <a href="{{ action('PostsController@show', $post) }}"><img src="{{ $post->path }}" width="100%"></a>
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
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>  
        </div>
    </div>
</div>
        <div class="postbtn bg-primary circle d-flex align-items-center justify-content-center">
            <a href="{{ action('PostsController@create') }}" class="p-absolute">
                <i class="fas fa-plus text-white fs-32"></i>
            </a>
        </div> -->

@endsection
