@extends('layouts.common')
@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    </head>
    <body style="background-color:white; font-family:Hannotate SC; color:#3f3f3f; text-align:center;">
        <h1 style="color:#e2914a; font-size:50px;">{{$review->title}}</h1>
         <h2>{{$review->body}}</h2>
         <h2>{{$review->visited_at}}</h2>
         <h3>{{$review->updated_at}}</h3>
          <a href="/categories/reviews/{{ $review->id }}" style="color:#7a54a8;">編集</a>
          
          <a href="/categories/{{$review->category->id}}">戻る</a>

    </body>
    </html>
    @endsection