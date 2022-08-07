@extends('layouts.common')
@section('content')<!DOCTYPE html>

<body>
 

  <h1>検索</h1>
    <h2 class='title'>検索機能をこのページに表示</h2>

 
  <form action="/search/word" method="POST">
    @csrf

    <h3 style="color:#884898;">キーワードで検索</h3>
    <div class="search_box">
      <div class="search_word">
        <input type="text" name="word" placeholder="キーワード検索"
          style="box-sizing: border-box; position: relative; border: 1px solid #999; padding: 3px 10px; border-radius: 20px; height: 2.3em; width: 230px; background-color:#f6f6f6; overflow: hidden;" />
        <button type="submit">検索</button>
      </div>
    </div>
  </form>
  <br>

 
  <br>
  <div class="footer">
    <a href="/home">戻る</a>
  </div>

</body>

</html>
@endsection