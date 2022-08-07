@extends('layouts.common')
@section('content')

<head>
  <link rel="stylesheet" href="{{ asset('/css/result.css') }}">
</head>
<body style="font-family:Hannotate SC; color:#3f3f3f; text-align:center;"> <!--ページ全体のフォントを指定-->
  <h1>検索結果</h1>
  <br>
  <button id="goBack" type="button">戻る</button>
  <br>
  <div style="font-size:20px;">
      <div class="list">
        @foreach ($results as $result)
            <a href="/reviews/{{ $result->id }}">{{ $result->title }}</a>
            <p>{{$result->body}}</p>
            <hr style=" color:#e2914a; width:500px;">
             @endforeach
        </div>
    </div>
    </div>
   
   <script>
    document.getElementById("goBack").addEventListener("click", function () {
    location.replace("/search");
    }, false);
    </script>

</body>
</html>
@endsection