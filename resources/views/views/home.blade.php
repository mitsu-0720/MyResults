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
    </div>
</div>
@endsection
