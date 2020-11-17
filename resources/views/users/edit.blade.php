@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 bg-white pb-4">
            <h1 class="text-center pt-4 pb-4">プロフィール編集</h1>

            <form action="/users/update" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="form-group row">
              <label class="col-md-3 col-form-label text-md-right fs-16">名前</label>

              <div class="col-md-6">
                <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-3 col-form-label text-md-right fs-16">アイコン</label>
              <edit-preview-component
              :post-path = "{{ json_encode($user->path) }}"
              ></edit-preview-component>
            </div>

            <div class="form-group row">
              <label class="col-md-3 col-form-label text-md-right fs-16">自己紹介</label>
              <textarea name="detail" class="col-md-6" cols="20" rows="5">{{ old('detail', $user->detail) }}</textarea>
            </div>

            <div class="text-center pt-4">
              <button type="submit" class="register-btn-mini">変更</button>
            </div>

            </form>
        </div>
    </div>
</div>
@endsection
