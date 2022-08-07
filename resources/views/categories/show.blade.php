@extends('layouts.common')
@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <title>レビュー詳細</title>
    </head>
    <body style="background-color:white; font-family:Hannotate SC; color:#3f3f3f; text-align:center;">
        <h1 style="color:#e2914a; font-size:50px;">{{$review->title}}</h1>
         <h2>{{$review->body}}</h2>
         <h3>訪問日 : {{$review->visited_at}}</h3>
    </div>
    <a href="/categories/reviews/edit/{{$review->id}}">編集</a>
    <a href="/">戻る</a>
    </body>
    </html>
    @endsection