<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo">
        mogitate
      </a>
    </div>
  </header>
  <main class="content">
    <div class="content__inner">
      <div class="content__title">
        @yield('title')
      </div>
    <div>
      @yield('content')
    </div>
  </main>
</body>

</html>