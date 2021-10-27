<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Geolocalización</title>
  </head>
  <body>
    <div class="container py-4">
         <div class="row">
             <div class="containner">
                <button type="button" class="btn btn-sm btn-success" name="button" onclick="findMe()">Mostrar ubicación</button>
               <div id="map" class="py-3"></div>
             </div>
         </div>
       </div>
       <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
           <div class="toast-header">
               <img src="..." class="rounded me-2" alt="...">
                  <strong class="me-auto">Bootstrap</strong>
                  <small class="text-muted">11 mins ago</small>
                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
           </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
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
           filter: grayscale(100%);
           border-radius: 10px;
           padding: 10px;
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
                    const myLatLng = { lat:latitude, lng: longitude };
                    const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 15,
                    center: myLatLng,
                  });
                    new google.maps.Marker({
                    position: myLatLng,
                    map,
                    title: "Te encuentras aqui!",
                    });

                  }
                  function error(){
                  output.innerHTML = "<p>No se pudo obtener tu ubicación</p>";
                  }
                 navigator.geolocation.getCurrentPosition(localizacion,error);
               }

          </script>
          <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYMPGtM7VUn1aq61tkGbu99qD95c-w5zc&callback=initMap">
        </script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
