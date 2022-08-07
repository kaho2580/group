<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ホーム</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key={{env('API_KEY')}}&callback=initMap" async defer></script>
    </head>
    <body>

        <h1>校舎周辺情報</h1>
        <a href="/categories/kotteri">こってり</a>
        <a href="/categories/2">あっさり</a>
        <a href="/categories/3">高い</a>
        <a href="/categories/4">安い</a>
        <div id="map" style="height:500px"></div>
        <div>
            [<a href='/reviews/create'>新規作成</a>]
        </div>
    </body>
    
    <script>
        // Initialize and add the map
        function initMap() {
        // The location of Uluru
        const uluru = { lat: 35.6600848, lng: 139.695324 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 16,
            center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
            position: uluru,
            map: map,
         });
        }
    window.initMap = initMap;
    </script>
    
</html>