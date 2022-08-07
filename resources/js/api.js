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