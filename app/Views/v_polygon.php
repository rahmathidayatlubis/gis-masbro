<div id="map" style="width: 100%; height: 100vh;"></div>

<script>
var peta1 = L.tileLayer(
  'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFyZGFsaXVzIiwiYSI6ImNsZnVtbDdtZzAyYjMzdXRhdDN6djY5cWoifQ.Xqtyqa7hvGhQla2oAwpG_Q', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
      '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
      'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11'
  });

var peta2 = L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
  attribution: '© Google Maps',
  maxZoom: 20,
});

var peta3 = L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
  maxZoom: 20,
  subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
});

var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
  maxZoom: 18,
  id: 'mapbox/outdoors-v11',
  tileSize: 512,
  zoomOffset: -1,
  accessToken: 'pk.eyJ1IjoibWFyZGFsaXVzIiwiYSI6ImNsZnVtbDdtZzAyYjMzdXRhdDN6djY5cWoifQ.Xqtyqa7hvGhQla2oAwpG_Q'
});

var peta5 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
});

var peta6 = L.tileLayer(
  'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFyZGFsaXVzIiwiYSI6ImNsZnVtbDdtZzAyYjMzdXRhdDN6djY5cWoifQ.Xqtyqa7hvGhQla2oAwpG_Q', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
      '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
      'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/dark-v10'
  });

var peta7 = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
  maxZoom: 19,
  attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
    '<a href="https://carto.com/attributions">CARTO</a>'
});

var peta8 = L.tileLayer(
  'https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
    attribution: 'Map data &copy; <a href="https://www.arcgis.com/">ArcGIS</a>'
  });

var peta9 = L.tileLayer('https://{s}.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
  maxZoom: 20,
  subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
  attribution: 'Map data &copy; <a href="https://www.google.com/maps">Google Maps</a>'
});

var peta10 = L.tileLayer('https://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
  maxZoom: 20,
  subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
  attribution: 'Map data &copy; <a href="https://www.google.com/maps">Google Maps</a>'
});

// DEKLARASI PETA
const map = L.map('map', {
  center: [2.9838400870644386, 99.6259641226298],
  zoom: 16,
  layers: [peta10]
});

// JENIS PETA
const baseLayers = {
  'MapBox': peta1,
  'Google': peta2,
  'Sattelite': peta3,
  'Outdoor': peta4,
  'OSM': peta5,
  'Dark': peta6,
  'Carto': peta7,
  'Esri': peta8,
  'Hybrid': peta9,
  'Teranin': peta10,
};

// SELECT BUTTON
var layerControl = L.control.layers(baseLayers, null, {
  collapsed: false
}).addTo(map);

// polygone
L.polygon([
    [2.9812408159004513, 99.62364201979692],
    [2.98315204529545, 99.62379512547818],
    [2.982986405546007, 99.62601515785688],
    [2.9810114681498847, 99.62584929336883]
  ], {
    color: 'red'
  })
  .bindPopup("Area Cabang").addTo(map);

L.polygon([
    [2.983043046690405, 99.62690578098918],
    [2.9830062639988584, 99.62796340284483],
    [2.983710389594749, 99.62798971184621],
    [2.9837471722627344, 99.62697418439276]
  ], {
    color: 'yellow'
  })
  .bindPopup("Area Ranting").addTo(map);
</script>