@extends('layouts.common')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>カテゴリ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body style="background-color:white; font-family:Hannotate SC; color:#3f3f3f; text-align:center;">
        <h1>{{$category->name}}</h1>
        
    <div class='review_list'>
        @foreach ($reviews as $review)
                <h2 class='review_link'>
                    <a href="/categories/reviews/{{ $review->id }}" style="color:#7a54a8;">{{ $review->title }}</a>
                    <h3>{{ $review->body }}</h3>
                </h2>
      @endforeach

    </div>
    
    <a href="/">戻る</a>
    </body>
    </html>
    @endsection
