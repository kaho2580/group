<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>レビュー詳細</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>{{$review->title}}</h1>
         <h2>{{$review->body}}</h2>
         <h3>{{$review->updated_at}}</h3>
          <a href="/categories/reviews/{{ $review->id }}" style="color:#7a54a8;">編集</a>
          
          <a href="/categories/{{$review->category->id}}">戻る</a>
          
        
       

    
    </body>
    </html>