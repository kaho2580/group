
@extends('layouts.common')
@section('content')
<!DOCTYPE html>
    <head>
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
    </head>

    <body style="background-color:white; font-family:Hannotate SC; color:#3f3f3f; text-align:center;>

     <div style="background-color:white; width:930px; margin: 0 auto; border-radius:8px; border:solid 1.5px #e2914a">
     <script
      src="https://maps.googleapis.com/maps/api/js?key={{config('app.key02')}}&callback=initAutocomplete&libraries=places&v=weekly"
      defer
    ></script>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
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
            <br>
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
    
    <input
          id="pac-input"
          class="controls"
          type="text"
          placeholder="Search Box"
        />

    <div id="map"></div>
    
    </body>
    
     <script>
        function initAutocomplete() {

  const map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 35.6600893, lng: 139.6952692 },
    zoom: 20,
    mapTypeId: "roadmap",
    });
  const input = document.getElementById("pac-input");
  const searchBox = new google.maps.places.SearchBox(input);
 

  map.controls[google.maps.ControlPosition.TOP_CENTER].push(input);

  map.addListener("bounds_changed", () => {
    searchBox.setBounds(map.getBounds());
  });

  let markers = [];
  searchBox.addListener("places_changed", () => {
  
    const places = searchBox.getPlaces();
   
    if (places.length == 0) {
      return;
    }
   
    markers.forEach((marker) => {
      marker.setMap(null);
    });
    markers = [];
    const bounds = new google.maps.LatLngBounds();
   
    places.forEach((place) => {
      if (!place.geometry) {
      
        console.log("Returned place contains no geometry");
        return;
      }
      const icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25),
      };
      
      markers.push(
        new google.maps.Marker({
          map,
          icon,
          title: place.name,
          position: place.geometry.location,
           animation: google.maps.Animation.DROP,
        })
      );

      if (place.geometry.viewport) {
       
        bounds.union(place.geometry.viewport);
       
      } else {
        bounds.extend(place.geometry.location);
       
      }
    });
    map.fitBounds(bounds);
    
  });
}
    </script>
    

</html>
@endsection
