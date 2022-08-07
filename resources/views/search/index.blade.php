@extends('layouts.common')
@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('/css/search.css') }}">
</head>

<bod style="font-family:Hannotate SC; color:#3f3f3f; text-align:center;"y>
 
<div style=background-color:white; width:930px; margin: 0 auto; border-radius:8px; border:solid 1.5px #e2914a;">
  <h1>検索</h1>
    <h2 class='title'>検索機能をこのページに表示</h2>

 
  <form action="/search/word" method="POST">
    @csrf

    <h3 style="color:#e2914a;;">キーワードで検索</h3>
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
  　<button id="goBack" type="button">ホームへ戻る</button>
    
  </div>
  
     <script>
    document.getElementById("goBack").addEventListener("click", function () {
    location.replace("/");
    }, false);
    </script>

</body>

</html>
@endsection