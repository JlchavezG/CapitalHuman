<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYMPGtM7VUn1aq61tkGbu99qD95c-w5zc"></script>
    <title>Geolocalización</title>
  </head>
  <body>
    <div class="container py-4">
       <button type="button" class="btn btn-sm btn-success" name="button" onclick="findMe()">Mostrar ubicación</button>
       <div id="map"></div>

       </div>
       <style>
       #map{
           margin: auto;
           margin-right:0px;
           padding: 40px;
           height: 450px;
           width: 100%;
           filter: grayscale(100%);
           border-radius: 10px;
             }
       </style>
       <script>
            function findMe(){
               var output = document.getElementById('map');
               // Verificar si soporta geolocalizacion
               if (navigator.geolocation) {
                   output.innerHTML = "<p>Tu navegador soporta Geolocalizacion</p>";
               }else{
                  output.innerHTML = "<p>Tu navegador no soporta Geolocalizacion</p>";
               }
                 //Obtenemos latitud y longitud
                  function localizacion(posicion){
                    var latitude = posicion.coords.latitude;
                    var longitude = posicion.coords.longitude;

                    output.innerHTML ="<p>Latitud: "+latitude+"<br> Longitud: "+longitude+"</p>";
                  }
                  function error(){
                  output.innerHTML = "<p>No se pudo obtener tu ubicación</p>";
                  }
                 navigator.geolocation.getCurrentPosition(localizacion,error);
               }
          </script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
