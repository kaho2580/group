<!DOCTYPE HTML>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="{{ asset('/css/common.css') }}">
</head>

<body>
<header style="font-family:Hannotate SC;">
  <nav class="gnav">
    <ul class="menu">
      <li><a href="/" style="color:white;"ホーム</a></li>
      <li><a href="/search" style="color:white;">検索</a></li>
      <li><a href="/prefectures/1" style="color:white;">リンク</a></li> <!--後で直す-->
      <li><a href="/mypage/{{Auth::id()}}" style="color:white;">マイページ</a></li>
      <li><a href="/mypage/favorite/{{Auth::id()}}" style="color:white;">お気に入り</a></li>
    </ul>
  </nav>
</header>

  @yield('content')
</body>

</html>