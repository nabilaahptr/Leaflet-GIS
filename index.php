<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <style>
         #mapid { 
             height: 100%; 
            } 
    </style>
    <title>Leaflet</title>
</head>
<body>
<div id="mapid"></div>   
</body>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script>
    var mymap = L.map('mapid').setView([-6.30705,106.9293455], 15);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
    }).addTo(mymap);

    var marker = L.marker([-6.30705,106.9293455]).addTo(mymap);

    var circle = L.circle([-6.30705,106.9293455], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 200
}).addTo(mymap);

var polygon = L.polygon([
    [-6.307535, 106.94036],
    [-6.309327, 106.948085],
    [-6.294483, 106.950102],
    [-6.289961, 106.947742],
   
]).addTo(mymap);

var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(mymap);
}

mymap.on('click', onMapClick);

marker.bindPopup("Home").openPopup();
circle.bindPopup("Perumahan Pondok Melati Indah");
polygon.bindPopup("Field");

</script>
</html>