@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2 bg-white d-flex align-items-center justify-content-center">
            <img src="storage/dummy.png" width="100px" class="circle">
        </div>
        <div class="col-md-6 bg-info pl-4">
            <h1 class="h4">{{ Auth::user()->name }}</h1>
            <p>{{ Auth::user()->username }}</p>
            <p>{{ Auth::user()->detail }}</p>
        </div>
        <div class="col-md-8 mt-4 bg-white">
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
                    <div class="col-md-8 offset-md-2 text-center pt-4">
                        @foreach ($posts as $post)
                        <img src="{{ $post->path }}" width="100%">
                        <p>{{ $post->created_at->format('Y.m.d. H:i') }}</p>
                        <br>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>
        </div>
    </div>
</div>
@endsection
