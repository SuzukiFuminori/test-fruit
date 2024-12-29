<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <style>
    header {
      background-color:white;
      border-bottom:solid 1px #f4f4f4;
      padding:10px 20px;
    }
    .header-logo {
      font-family:jsMath-cmti10;
      font-size:30px;
      color:#F5C800;
      font-weight:500;
      font-style:italic;
      margin: 5px;
    }
    h1 {
      font-family:"Hiragino Kaku Gothic Pro";
      font-size:32px;
      color:#333333;
      font-weight:600;
    }
    .content {
      margin:10px;
    }
  </style>
</head>
<body>
  <h1>@yield('title')</h1>
  <div class="content">
    @yield('content')
  </div>
</body>
</html>