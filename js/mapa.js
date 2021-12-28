// mapa api google
var map;
var cord = {lat: 19.4211239, lng: -99.1705557 } ;
 function initMap() {
   map = new google.maps.Map(document.getElementById('map'), {
     center: {lat: 19.4211239, lng: -99.1705557 },
     zoom: 14
   });
   var marker = new google.maps.Marker({
   position: cord,
   map: map,
   title: 'CapitalHunanWorld'
});
}
