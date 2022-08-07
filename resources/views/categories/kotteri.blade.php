@extends('layouts.common')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <link rel="stylesheet" href="{{ asset('/css/kotteri.css') }}">
        
    </head>
    <body style="background-color:white; font-family:Hannotate SC; color:#3f3f3f; text-align:center;">
        <p class="sample">{{$category->name}}</p>
<p class="link"><a href="https://1-notes.com/css-text-design/" target="_blank" rel="noopener"></a></p>
        
        
        
    <div class='review_list'>
        @foreach ($reviews as $review)
                <h2 class='review_link'>
                    <a href="/categories/reviews/{{ $review->id }}" style="color:#7a54a8;">{{ $review->title }}</a>
                    <h3>{{ $review->body }}</h3>
                </h2>
                <hr style=" color:#e2914a; width:500px;">
      @endforeach

    </div>
    
    <a href="/">戻る</a>
    </body>
    </html>
    @endsection
