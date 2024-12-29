@extends('layouts.default')

@section('title', '商品登録')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('content')
  @csrf
@endsection