<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel
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
  <main>
    <h1>@yield('title')</h1>
    <div class="content">
      @yield('content')
    </div>
  </main>
</body>

</html>