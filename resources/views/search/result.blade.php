<!DOCTYPE html>
<head></head>
<body style="font-family:TsukuARdGothic-Regular; color:#3f3f3f; text-align:center;"> <!--ページ全体のフォントを指定-->
  <h1>検索結果</h1>
      <div class='list'>
        @foreach ($results as $result)
            <a href="/reviews/{{ $review->id }}">{{ $review->title }}</a>
        </div>

        @endforeach
    </div>
   

</body>
</html>
@endsection