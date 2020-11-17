@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-8 bg-white pb-4">
          <h1 class="text-center pt-4 pb-4">編集</h1>

          <form action="/posts" method="POST" enctype="multipart/form-data">
          @csrf  

          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right fs-16">画像</label>
            <edit-post-preview-component
            :post-path = "{{ json_encode($post->path) }}"
            ></edit-postpreview-component>
          </div>

          <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right fs-16">コメント</label>
            <textarea name="detail" class="col-md-6 offset-md-3" cols="20" rows="5">{{ old('detail', $post->detail) }}</textarea>
          </div>

          <div class="text-center pt-4">
            <button type="submit" class="register-btn-mini"><i class="far fa-edit"></i> 編集</button>
          </div>

          </form>
       </div>
    </div>
</div>
@endsection
