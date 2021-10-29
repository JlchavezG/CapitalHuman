<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Geolocalización | Dinamica</title>
  </head>
  <body onload="findMe()";>
    <div class="container py-4">
         <div class="row">
             <div class="container">
                 <form class="" action="" method="post" onclick="captura();">
                      <div class="col-sm-12 col-md-6 col-lg-6 py-2">
                          <input type="text" class="form-control" name="latitud" value=""placeholder="latitud" id="latitud">
                      </div>
                      <div class="col-sm-12 col-md-6 col-lg-6 py-2">
                          <input type="text" class="form-control" name="longitud" value=""placeholder="longitud" id="longitud">
                      </div>
                 </form>
             </div>
         </div>
         <div class="row">
             <div class="containner">
               <div id="map" class="py-3"></div>
             </div>
         </div>
       </div>
       <?php $nombre = "Jose Luis"; ?>
       <style>
       #map{
           margin: auto;
           margin-top: 10px;
           margin-right:0px;
           padding: 40px;
           height: 450px;
           width: 100%;
           border-radius: 10px;
           padding: 10px;
             }
       </style>
       <script>
            function findMe(){
               var output = document.getElementById('map');
               nombre = '<?=$nombre ?>';
               // Verificar si soporta geolocalizacion
               if (navigator.geolocation) {
                   output.innerHTML = "<p>Tu navegador soporta Geolocalizacion</p>";
                   output.innerHTML = nombre;
               }else{
                  output.innerHTML = "<p>Tu navegador no soporta Geolocalizacion</p>";
               }
                 //Obtenemos latitud y longitud
                  function localizacion(posicion){
                    var latitude = posicion.coords.latitude;
                    var longitude = posicion.coords.longitude;
                    var ventana ='<h2>Nombre</h2>'+'<p>Descripción</p>'+'<a href="www.google.com">link</a>';

                    output.innerHTML ="<p>Latitud: "+latitude+"<br> Longitud: "+longitude+"</p>";
                    const myLatLng = { lat:latitude, lng: longitude };
                    const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 15,
                    center: myLatLng,
                    // cambiar a terreno  mapTypeId: 'satellite',
                  });
                    marcador = new google.maps.Marker({
                    position: myLatLng,
                    draggable: true,
                    map,
                    title: "Te encuentras aqui!",
                    });
                    var info = new google.maps.InfoWindow({
                      content: ventana
                    });
                    marcador.addListener('click',function(){
                      info.open(map, marcador);
                    });
                    marcador.addListener('dragend',function(event){
                      document.getElementById("latitud").value = this.getPosition().lat();
                      document.getElementById("longitud").value = this.getPosition().lng();
                    })



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
