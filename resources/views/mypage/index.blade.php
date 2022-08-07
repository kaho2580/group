@extends('layouts.common')
@section('content')

<body style="font-family:TsukuARdGothic-Regular; color:#3f3f3f; text-align:center;">
  <!--ページ全体のフォントを指定-->
  <div class=gray
    style="background-color:#eaeaea; width:930px; margin: 0 auto; border-radius:8px; border:solid 1.5px #c7c7c7;">
    <h1>マイページ</h1>
    <div class='mypage'>
    </div>
    
    
    <a href='/mypage/profile/{{ $auth->id() }}'>{{ $auth->name() }}のプロフィール</a>
    <br>
  </div>
    <br>
    <div class=gray
    style="background-color:#eaeaea; width:930px; margin: 0 auto; border-radius:8px; border:solid 1.5px #c7c7c7;">
    <h2>あなたの投稿</h2>
    <div class='review_list'>
      @foreach ($my_reviews as $my_review)
      <h3 class='title'>
        <a href="reviews/{{ $my_review->id }}" style="color:#7a54a8;">{{$my_review->title}}</a>
      </h3>
      <p class='body'>{{ $my_review->body }}</p>
      @endforeach
    </div>
    </div>

    <br>
    <div class=gray
    style="background-color:#eaeaea; width:930px; margin: 0 auto; border-radius:8px; border:solid 1.5px #c7c7c7;">
    <h2>お気に入り</h2>

  </div>

  <a href='/search'>検索ページ</a>
  <br>
  <div class="footer">
    <a href="/home">戻る</a>
  </div>
</body>

</html>
@endsection
@endsection
