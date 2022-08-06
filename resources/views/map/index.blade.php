<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>test.API</title>
        <!-- Fonts -->
    
        <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key={{env('API_KEY')}}&callback=initMap" async defer></script>
    </head>
    
    <body>
        <h1>さぁ　何が食べたい？</h1>
        <h2></h2>
        <div id="map" style="height:500px"></div>
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