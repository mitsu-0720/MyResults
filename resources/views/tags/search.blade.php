@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 bg-white">
          <h1 class="text-center mt-4">タグ一覧</h1>
          <p class="text-center">好きなゲームのハッシュタグを調べてみよう！</p>

          <div class="form-group mt-4 text-center">
            <form class="" action="{{ url('/search/tags') }}">
                  <input type="text" name="keyword" value="{{ $keyword }}" class="form-control mr-2" placeholder="検索...">
                  <input type="submit" value="検索" class="register-btn-mini mt-3">
            </form>
          </div>

          @if(!empty($keyword))
          @foreach($data as $tag)
          <a href="{{ action('TagsController@show', $tag) }}"><span class="badge badge-pill badge-info fs-20 mt-3">{{ $tag->name }}</span></a>
          @endforeach

          @else

          @foreach($tags as $tag)
          <a href="{{ action('TagsController@show', $tag) }}"><span class="badge badge-pill badge-info fs-20 mt-3">{{ $tag->name }}</span></a>
          @endforeach
          @endif
        </div>
    </div>
</div>
@endsection
