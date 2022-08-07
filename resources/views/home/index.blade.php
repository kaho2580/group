@extends('layouts.common')
@section('content')
<!DOCTYPE html>
    <head>
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
    </head>

    <body style="background-color:white; font-family:Hannotate SC; color:#3f3f3f; text-align:center;>

     <div style="background-color:white; width:930px; margin: 0 auto; border-radius:8px; border:solid 1.5px #e2914a">
     
     <img src="/images/food_beefsteak.png">
        <h2>カテゴリ</h2>
        <!--<a href="/categories/1">こってり</a>-->
        <!--<a href="/categories/2">あっさり</a>-->
        <!--<a href="/categories/3">高い</a>-->
        <!--<a href="/categories/4">安い</a>-->
        
        <button id="category1" type="button">こってり</button>
        <button id="category2" type="button">あっさり</button>
        <button id="category3" type="button">高い</button>
        <button id="category4" type="button">安い</button>
    
        <div>
            <a href='/reviews/create'>新規作成</a>
        </div>
    </div>
    <script>
    document.getElementById("category1").addEventListener("click", function () {
    location.replace("/categories/1");
    }, false);
    
    document.getElementById("category2").addEventListener("click", function () {
    location.replace("/categories/2");
    }, false);
    
    document.getElementById("category3").addEventListener("click", function () {
    location.replace("/categories/3");
    }, false);
    
    document.getElementById("category4").addEventListener("click", function () {
    location.replace("/categories/4");
    }, false);
    </script>
    </body>
    
</html>
@endsection