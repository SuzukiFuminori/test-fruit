@extends('layouts.default')

@section('title', '商品一覧')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
  <div class="content">
    <div class="content__inner">
      <div class="content-heading">
        <div class="content-heading__title">
          @yield('title')
        </div>
        <div class="content-heading__button">
          <button class="content-heading__button-submit" type="submit"></button>
        </div>
      </div>
    </div>
  </div>
@endsection