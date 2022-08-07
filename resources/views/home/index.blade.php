@extends('layouts.common')
@section('content')
<!DOCTYPE html>

    <body>

     <div style="background-color:#fffcf2; width:930px; margin: 0 auto; border-radius:8px; border:solid 1.5px #e2914a">
        <h1>レバテックチーム開発</h1>
        <a href="/categories/1">こってり</a>
        <a href="/categories/2">あっさり</a>
        <a href="/categories/3">高い</a>
        <a href="/categories/4">安い</a>
        
        <div><a href="#" class="btn button-1">BUTTON-1</a></div>
　　　　<div><a href="#" class="btn button-2">BUTTON-2</a></div>
　　　　<div><a href="#" class="btn button-3">BUTTON-3</a></div>
　　　　<div><a href="#" class="btn button-4">BUTTON-4</a></div>
        
        <div>
            [<a href='/reviews/create'>新規作成</a>]
        </div>
    </div>
    </body>
    
</html>
@endsection