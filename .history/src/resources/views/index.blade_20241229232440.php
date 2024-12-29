@extends('layouts.default')

@section('title', '商品一覧')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
  <div class="content__inner">
    <div class="content__heading">
      <div class=""
        @yield('title')
    </div>
  </div>
@endsection