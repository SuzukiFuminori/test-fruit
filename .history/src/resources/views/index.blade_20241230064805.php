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
          <button class="content-heading__button-submit" type="submit">+商品を追加</button>
        </div>
      </div>
      <div class="content-container">
        <div class="search-wrapper">
          <div class="search__input">
            <input class="search__input--text" type="search" name="name" placeholder="商品名で検索">
          </div>
          <div class="search__button">
            <button class="search__button-submit" >検索</button>
          </div>
          <div class="sort">
            <div class="sort__content">価格順で表示</div>
            <div class="sort__select">
              <select name="select" placeholder="価格で並べ替え">
                <option value="">高い順に表示</option>
                <option value="">低い順に表示</option>
              </select>
            </div>
          </div>
        </div>
        <div class="product">
          <div class="product__catalog">
            <div class="product__primary">
              <div class="image">
                <
              </div>
            </div>
          </div>
          <div class="product__catalog"></div>
        </div>
      </div>
    </div>
  </div>
@endsection