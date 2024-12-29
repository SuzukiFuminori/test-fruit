@extends('layouts.default')

@section('css')
@endsection

@section('title', '商品一覧')

@section('content')
<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>price</th>
    <th>image</th>
  </tr>
  @foreach ($products as $product)
  <tr>
    <td>{{$product->id}}</td>
    <td>{{$product->name}}</td>
    <td>{{$product->price}}</td>
    <td>{{$product->image}}</td>
  </tr>
  @endforeach
</table>
@endsection