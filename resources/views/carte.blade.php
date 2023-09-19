@extends('layout.app')

@section('content')
<style>
    #geolocation-button {
    position: absolute;
    top: 10px;
    right: 10px;
    width: 50px;
    height: 30px;
    z-index: 1000; /* Assurez-vous que le bouton est au-dessus de la carte */

}
</style>
<style>
    .back{
        position: absolute;
    top: 60px;
    right: 10px;
    width: 70px;
    height: 30px;
    z-index: 1000; 
    }
</style>

<div id="maCarte" style="height: 615px;" >
<button id="geolocation-button" class="rounded-md bg-indigo-300 px-3 py-1.5 text-sm font-bold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Moi</button>
<button class="back rounded-md bg-green-300 px-3 py-1.5 text-sm font-bold leading-6 text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600" ><a href="/principale">Retour</a></button>
</div>





<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
crossorigin=""></script>

<script>
   var villes ={
       "ouagadougou" :{"lat":12.3686, "lon":-1.5275 },
       "bobo" :{"lat":11.1833, "lon":-4.2833 },
       "koudougou" :{"lat":12.2500, "lon":-2.3667 },
       "ouahigouya" :{"lat":13.5833, "lon":-2.4167 },
   };
   //
   var tableauMarkeur = []
   //initialisation de la carte 
   var carte = L.map('maCarte').setView([12.241851, - -1.55676], 12);
   //initialisation des tuiles
   L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
maxZoom: 19,
attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(carte);
//initialisation des markeur
for(ville in villes){
var marker = L.marker([villes[ville].lat, villes[ville].lon]).addTo(carte);
//creer une popeup
marker.bindPopup("<h1>"+ville+"</h1>"
);

tableauMarkeur.push(marker);
}
var groupe = new L.featureGroup(tableauMarkeur);

carte.fitBounds(groupe.getBounds().pad(0.5));

document.getElementById('geolocation-button').addEventListener('click', function() {
    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            // Créez un marqueur pour afficher la position
            marker = L.marker([latitude, longitude]).addTo(carte);

            // Centrez la carte sur la position
            carte.setView([latitude, longitude], 13);
        });
    } else {
        alert("La géolocalisation n'est pas prise en charge par votre navigateur.");
    }
});


</script>


@endsection