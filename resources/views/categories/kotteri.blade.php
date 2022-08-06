<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>{$category->name}</h1>
        
    <div class='review_list'>
        @foreach ($reviews as $review)
                <h2 class='review_link'>
                    <a href="/reviews/{{ $review->id }}" style="color:#7a54a8;">{{ $review->title }}</a>
                </h2>
      @endforeach

    </div>
    </body>
    </html>
