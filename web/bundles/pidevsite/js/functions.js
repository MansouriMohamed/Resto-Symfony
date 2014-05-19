var map;
var panel;
var initialize;
var calculate;
var direction;

initialize = function(){
  var latLng = new google.maps.LatLng(50.6371834, 3.063017400000035); // Correspond au coordonnées de Lille
  var myOptions = {
    zoom      : 17, // Zoom par défaut
    center    : latLng, // Coordonnées de départ de la carte de type latLng 
    mapTypeId : google.maps.MapTypeId.TERRAIN, // Type de carte, différentes valeurs possible HYBRID, ROADMAP, SATELLITE, TERRAIN
    maxZoom   : 20
    
  };
  
  map      = new google.maps.Map(document.getElementById('map_canvas'), myOptions);
  panel    = document.getElementById('panel');
  
 var address = "France";
var geocoder = new google.maps.Geocoder();
geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        map.fitBounds(results[0].geometry.bounds);
    } else {
        alert("Geocode was not successful for the following reason: " + status);
    }
  
  });


  
 
  

  
  
  direction = new google.maps.DirectionsRenderer({
    map   : map,
    panel : panel // Dom element pour afficher les instructions d'itinéraire
  });

};

calculate = function(){
    origin      = "esprit ariana"; // Le point départ
    destination = document.getElementById('destination').value; // Le point d'arrivé
    
    if(origin && destination){
        var request = {
            origin      : origin,
            destination : destination,
            travelMode  : google.maps.DirectionsTravelMode.DRIVING // Mode de conduite
        }
        var directionsService = new google.maps.DirectionsService(); // Service de calcul d'itinéraire
        directionsService.route(request, function(response, status){ // Envoie de la requête pour calculer le parcours
            if(status == google.maps.DirectionsStatus.OK){
                direction.setDirections(response); // Trace l'itinéraire sur la carte et les différentes étapes du parcours
                 var route = response.routes[0];
                for (var i = 0; i < route.legs.length; i++) {
        var routeSegment = i + 1;
       /*
        document.getElementById('distance').value = route.legs[i].distance.value/1000;
        document.getElementById('time').value = route.legs[i].duration.value/3600;
        document.getElementById('Address_origin').value = route.legs[i].start_address;
        document.getElementById('Address_destination').value = route.legs[i].end_address;
        document.getElementById('from_c').innerHTML = route.legs[i].start_address;
        document.getElementById('To_c').innerHTML = route.legs[i].end_address;
        */
            }
                
            }
        });
    }
};

initialize();
$(document).ready(function(){
    calculate();
    
});

