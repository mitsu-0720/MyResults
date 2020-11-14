@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center bg-white mb-4 pb-4">
            <h1 class="title">My Results</h1>
            <p class="pt-4 pb-2 h5"><i class="fas fa-camera text-muted"></i> ゲーム画像を投稿して共有、管理</p>
            <p class="pt-2 pb-2 h5"><i class="fas fa-hashtag text-muted"></i> ゲーム毎にタグ付けして画像をまとめやすい</p>
            <p class="pt-2 pb-4 h5"><i class="fas fa-user-friends text-muted"></i> 同じジャンルの仲間を探してゲーム仲間を作れる</p>

            <button class="register-btn mb-4"><a href="{{ route('register') }}"><i class="fas fa-angle-double-right"></i> 登録</a></button>

            <h2>機能一覧</h2>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/storage/dummy.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="/storage/dummy.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="/storage/dummy.png" class="d-block w-100" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-8 text-center bg-white">
        <h2>最近の投稿</h2>
      </div>
    </div>
</div>
@endsection