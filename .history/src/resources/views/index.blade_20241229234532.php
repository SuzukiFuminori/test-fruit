@extends('layouts.default')

@section('title', '商品一覧')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
  <div class="content">
    <div class="content__inner">
      <div class="content-heading">
        <div class="content-head__title">
          @yield('title')
        </div>
      </div>
    </div>
  </div>
@endsection