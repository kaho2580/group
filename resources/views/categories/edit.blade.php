<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>レビュー詳細</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
<body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/categories/reviews/{{$review->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='review[title]' value="{{ $review->title }}">
            </div>
            <div class='content__body'>
                <h2>本文</h2>
                <input type='text' name='review[body]' value="{{ $review->body }}">
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
</body>
</html>