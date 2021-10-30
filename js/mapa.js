// mapa api google
var map;
var cord = {lat: 19.43402683918839, lng: -99.29028216100464} ;
 function initMap() {
   map = new google.maps.Map(document.getElementById('map'), {
     center: {lat: 19.43402683918839, lng: -99.29028216100464},
     zoom: 14
   });
   var marker = new google.maps.Marker({
   position: cord,
   map: map,
   title: 'CapitalHunanWorld'
});
}
