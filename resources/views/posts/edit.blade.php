@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-8 bg-white pb-4">
          <h1 class="text-center pt-4 pb-4">編集</h1>

          <form action="{{ url('/posts', $post->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PATCH')

          @if($errors->has('path'))
          <p class="text-center text-danger mb-1">{{ $errors->first('path') }}</p>
          @endif
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right fs-16">画像</label>
            <edit-post-preview-component
            :post-path = "{{ json_encode($post->path) }}"
            ></edit-post-preview-component>
          </div>

          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right fs-16">タグ</label>
            <div class="col-md-6">
              <input type="text" name="tags" id="tags" value="{{ old('tags') }}" class="tags-form mt-2" placeholder="例 : #beatmania #AAA(#は半角)">
            </div>
          </div>

          @if($errors->has('detail'))
          <p class="text-center text-danger mb-1">{{ $errors->first('detail') }}</p>
          @endif
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right fs-16">コメント</label>
            <textarea name="detail" class="col-md-6" cols="20" rows="5">{{ old('detail', $post->detail) }}</textarea>
          </div>

          <div class="text-center pt-4">
            <button type="submit" class="register-btn-mini"><i class="far fa-edit"></i> 編集</button>
          </div>

          </form>
       </div>
    </div>
</div>
@endsection
