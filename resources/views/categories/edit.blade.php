@extends('layouts.common')
@section('content')
<body style="background-color:white; font-family:Hannotate SC; color:#3f3f3f; text-align:center;">
    <h1 class="title" style="color:#e2914a;">レビューの編集</h1>
    <div class="content">
        <form action="/categories/reviews/{{$review->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='review[title]' value="{{ $review->title }}" style="font-family:Hannotate SC;">
            </div>
            <div class='content__body'>
                <h2>レビュー内容</h2>
                <input type='text' name='review[body]' value="{{ $review->body }}" style="font-family:Hannotate SC;">
            </div>
            
            <div class='content__body'>
                <h2>訪問日</h2>
                <input type='text' name='review[visited_at]' value="{{ $review->visited_at }}" style="font-family:Hannotate SC;">
            </div>
            
            <br>
            <input type="submit" value="保存">
            
        </form>
      </div>
    </body>
</html>
@endsection