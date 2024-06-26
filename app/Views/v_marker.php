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
  center: [2.825421765976012, 99.55296779516861],
  zoom: 10,
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

// ICON MARKER
let gedung = L.icon({
  iconUrl: '<?= base_url('penanda/gedung.png') ?>',
  iconSize: [25, 35],
});

let gapura = L.icon({
  iconUrl: '<?= base_url('penanda/gapura.png') ?>',
  iconSize: [25, 35],
});

let taman = L.icon({
  iconUrl: '<?= base_url('penanda/taman.png') ?>',
  iconSize: [25, 35],
});

// MARKER
L.marker([2.7692918448252337, 99.31810431584248], {
    icon: gedung
  })
  .bindPopup(`<b>PKS Bandar Pasir Mandoge</b><br>
  Alamat : Bandar Pasir Mandoge, Kec. Bandar Pasir Mandoge, Kabupaten Asahan, Sumatera Utara 21262<br>
  No HP : - <br>
  <img src="<?= base_url('img/pks-madoge.jpg') ?>" alt="" width="100%"/>`)
  .addTo(map);

L.marker([2.8921194621900828, 99.51255565301828], {
    icon: taman
  })
  .bindPopup(`<b>UPTD SMA N 1 BUNTU PANE</b><br>
  Alamat : VGR7+G3V, Prapat Janji, Kec. Buntu Pane, Kabupaten Asahan, Sumatera Utara 21261<br>
  No HP : - <br>
  <img src="<?= base_url('img/sma-buntupane.png') ?>" alt="" width="100%"/>`)
  .addTo(map);
L.marker([2.84490314696146, 99.55712509604729], {
    icon: gapura
  })
  .bindPopup(`<b>Kantor Camat Tinggi Raja</b><br>
  Alamat : RHV4+VVR, Jl. Besar, Padang Sari, Kec. Tinggi Raja, Kabupaten Asahan, Sumatera Utara 21261<br>
  No HP : - <br>
  <img src="<?= base_url('img/camat-tinggi-raja.png') ?>" alt="" width="100%"/>`)
  .addTo(map);
L.marker([2.979610256463508, 99.61143221798663])
  .bindPopup(`<b>PERUMDA Tirta Silaupiasa</b><br>
  Alamat : Jl. Jend. Ahmad Yani No. 33, Kisaran, Sei Renggas, Kisaran Barat, Sei Renggas, Kec. Kota Kisaran Barat, Kabupaten Asahan, Sumatera Utara 21213<br>
  No HP : 062341091 <br>
  <img src="<?= base_url('img/pdam-ts.png') ?>" alt="" width="100%"/>`)
  .addTo(map);
L.marker([2.9792329693918433, 99.63067772488196], {
    icon: gedung
  })
  .bindPopup(`<b>Kampus 1 STMIK Royal Kisaran</b><br>
  Alamat : Jl. Imam Bonjol No.179, Teladan, Kisaran, Kabupaten Asahan, Sumatera Utara 21211<br>
  No HP : 082383610029 <br>
  <img src="<?= base_url('img/amik-royal.jpg') ?>" alt="" width="100%"/>`)
  .addTo(map);
</script>