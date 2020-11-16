@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 bg-white">
          <!-- <p>
            <img src="{{ $post->user->path }}" width="50px" height="50px" class="circle mr-2">{{ $post->user->name }}
          </p> -->
          <div class="row justify-content-between mb-2 mt-3">
              <div class="col-4 pl-4">
                <img src="{{ $post->user->path }}" width="50px" height="50px" class="circle mr-2">{{ $post->user->name }}
              </div>
              <div class="col-4">
                <p class="text-right pt-2 pr-2"><i class="fas fa-ellipsis-h fs-24"></i></p>
              </div>
          </div>
          <img src="{{ $post->path }}" width="100%">
          <p class="mt-2">{{ $post->detail }}</p>
          <hr>
          <p>{{ $post->created_at->format('Y.m.d H:i') }}</p>
          <hr>
          <p><i class="far fa-heart"></i> 0</p>
        </div>
    </div>
</div>
@endsection
