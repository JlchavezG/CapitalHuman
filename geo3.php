<?php
 $OrigenLat = "19.44164696835793";
 $OrigenLng = "-99.2692694";
 $destinoLat = "19.437154219019835";
 $destinoLng = "-99.28827579749755";


       //calculamos la diferencia de entre la longitud de los dos puntos
       $diferenciaX = $OrigenLng - $destinoLng;

       //ahora calculamos la diferencia entre la latitud de los dos puntos
       $diferenciaY = $OrigenLat - $destinoLat;

       // ahora ponemos en practica el teorema de pitagora para calcular la distancia
       $distancia = sqrt(pow($diferenciaX,2) + pow($diferenciaY,2));
       $distancia = ($distancia * 1)/1000;

 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Geolocalización | Dinamica</title>
  </head>
  <body onload="initMap()";>
         <div class="row">
             <div class="containner">
               <div id="map" class="py-3"></div>
               <div class="row py-2">
                   <p>La distancia entre las dos direcciones es: <?php echo $distancia; ?></p>
               </div>
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
        myLatLng = { lat: <?php echo $OrigenLat; ?>, lng: <?php echo $OrigenLng; ?> };
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
            origin: { lat: <?php echo $OrigenLat; ?>, lng: <?php echo $OrigenLng; ?> },
            destination: { lat: <?php echo $destinoLat;?>, lng: <?php echo $destinoLng; ?> },
            // tambien se puede usar de otro modo WALKING - BICYCLING - TRANSIT
            provideRouteAlternatives: true,
            travelMode: google.maps.TravelMode["DRIVING"],
            
          },
          (response, status) => {
            if (status == "OK") {
              directionsRenderer.setDirections(response);
            } else {
              window.alert("La solicitud de indicaciones falló debido a:" + status);
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
