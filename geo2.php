<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Geolocalización | Dinamica</title>
  </head>
  <body onload="initMap()";>
    <div class="container py-4">
         <div class="row">
             <div class="containner">
               <div id="map" class="py-3"></div>
             </div>
         </div>
       </div>
       <style>
       #map{
           margin: auto;
           margin-top: 10px;
           margin-right:0px;
           padding: 40px;
           height: 450px;
           width: 100%;
           /*filter: grayscale(100%);*/
           border-radius: 10px;
           padding: 10px;
             }
       </style>
       <script>
      // inicia la Configuración
      function initMap() {
        const directionsRenderer = new google.maps.DirectionsRenderer();
        const directionsService = new google.maps.DirectionsService();
        myLatLng = { lat: 19.442212824312087, lng: -99.26381405128173 };
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 14,
          center:myLatLng,
          mapTypeControl: true,
          scrollwheel: true,
        });
        marcador = new google.maps.Marker({
        position: myLatLng,
        draggable: true,
        map,
        title: "Te encuentras aqui!",
        });
        directionsRenderer.setMap(map);
        calculateAndDisplayRoute(directionsService, directionsRenderer);
      }

      function calculateAndDisplayRoute(directionsService, directionsRenderer) {

        directionsService.route(
          {
            origin: { lat: 19.44164696835793, lng: -99.2692694 },
            destination: { lat: 19.437154219019835, lng: -99.28827579749755 },
            // tambien se puede usar de otro modo WALKING - BICYCLING - TRANSIT
            travelMode: google.maps.TravelMode["DRIVING"],
          },
          (response, status) => {
            if (status == "OK") {
              directionsRenderer.setDirections(response);
            } else {
              window.alert("Directions request failed due to " + status);
            }
          }
        );
      }
    </script>
          <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYMPGtM7VUn1aq61tkGbu99qD95c-w5zc&callback=initMap">
        </script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
