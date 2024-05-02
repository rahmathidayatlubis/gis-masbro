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
  center: [-0.9537452590785862, 118.1781769735919],
  zoom: 5,
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

// geojson

// ACEH
$.getJSON("<?= base_url('provinsi/11.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'red',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Aceh</p>
    <b>Ibu Kota : Banda Aceh</b><br>
    <b>Jumlah Penduduk : 4.906.835 Jiwa</b><br>
    <b>Luas Wilayah : 57.365 KM<sup>2</sup></b>

  <img src="<?= base_url('img/aceh.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// SUMUT
$.getJSON("<?= base_url('provinsi/12.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'blue',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Sumatera Utara</p>
    <b>Ibu Kota : Medan</b><br>
    <b>Jumlah Penduduk : 14.043.372 Jiwa</b><br>
    <b>Luas Wilayah : 72.427 KM<sup>2</sup></b>

  <img src="<?= base_url('img/sumut.webp') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// SUMBAR
$.getJSON("<?= base_url('provinsi/13.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'green',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Sumatera Barat</p><br>
    <b>Ibu Kota : Padang</b><br>
    <b>Jumlah Penduduk : 5.131.900 Jiwa</b><br>
    <b>Luas Wilayah : 42.297 KM<sup>2</sup></b>

  <img src="<?= base_url('img/sumbar.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// RIAU
$.getJSON("<?= base_url('provinsi/14.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'yellow',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Riau</p>
    <b>Ibu Kota : Pekanbaru</b><br>
    <b>Jumlah Penduduk : 6.188.442 Jiwa</b><br>
    <b>Luas Wilayah : 94.560 KM<sup>2</sup></b>

  <img src="<?= base_url('img/riau.jpeg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// JAMBI
$.getJSON("<?= base_url('provinsi/15.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'orange',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Jambi</p><br>
    <b>Ibu Kota : Jambi</b><br>
    <b>Jumlah Penduduk : 3.344.400 Jiwa</b><br>
    <b>Luas Wilayah : 53.509 KM<sup>2</sup></b>

  <img src="<?= base_url('img/jambi.webp') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// SUMSEL
$.getJSON("<?= base_url('provinsi/16.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: '#1cc88a',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Sumatera Selatan</p>
    <b>Ibu Kota : Palembang</b><br>
    <b>Jumlah Penduduk : 8.279.500 Jiwa</b><br>
    <b>Luas Wilayah : 91.592 KM<sup>2</sup></b>

  <img src="<?= base_url('img/sumsel.png') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// BENGKULU
$.getJSON("<?= base_url('provinsi/17.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: '#6222cc',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Bengkulu</p>
    <b>Ibu Kota : Bengkulu</b><br>
    <b>Jumlah Penduduk : 1.844.800 Jiwa</b><br>
    <b>Luas Wilayah : 19.789 KM<sup>2</sup></b>

  <img src="<?= base_url('img/bengkulu.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// LAMPUNG
$.getJSON("<?= base_url('provinsi/18.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'red',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Lampung</p>
    <b>Ibu Kota : Bandar Lampung</b><br>
    <b>Jumlah Penduduk : 8.026.191 Jiwa</b><br>
    <b>Luas Wilayah : 35.376 KM<sup>2</sup></b>

  <img src="<?= base_url('img/lampung.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// BANGKA BELITUNG
$.getJSON("<?= base_url('provinsi/19.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'green',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Kepulauan Bangka Belitung</p>
    <b>Ibu Kota : Pangkalpinang</b><br>
    <b>Jumlah Penduduk : 1.343.900 Jiwa</b><br>
    <b>Luas Wilayah : 16.424 KM<sup>2</sup></b>

  <img src="<?= base_url('img/bangka.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// KEPULAUAN RIAU
$.getJSON("<?= base_url('provinsi/21.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'blue',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Kepulauan Riau</p>
    <b>Ibu Kota : Tanjung Pinang</b><br>
    <b>Jumlah Penduduk : 1.917.415 Jiwa</b><br>
    <b>Luas Wilayah : 8.084 KM<sup>2</sup></b>

  <img src="<?= base_url('img/kepri.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// DKI JAKARTA
$.getJSON("<?= base_url('provinsi/31.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'yellow',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Jakarta</p>
    <b>Ibu Kota : Jakarta</b><br>
    <b>Jumlah Penduduk : 10.012.271 Jiwa</b><br>
    <b>Luas Wilayah : 740 KM<sup>2</sup></b>

  <img src="<?= base_url('img/dki.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// JAWA BARAT
$.getJSON("<?= base_url('provinsi/32.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'purple',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Jawa Barat</p>
    <b>Ibu Kota : Bandung</b><br>
    <b>Jumlah Penduduk : 46.029.668 Jiwa</b><br>
    <b>Luas Wilayah : 35.245 KM<sup>2</sup></b>

  <img src="<?= base_url('img/jabar.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// JAWA TENGAH
$.getJSON("<?= base_url('provinsi/33.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'red',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Jawa Tengah</p>
    <b>Ibu Kota : Semarang</b><br>
    <b>Jumlah Penduduk : 33.522.663 Jiwa</b><br>
    <b>Luas Wilayah : 33.987 KM<sup>2</sup></b>

  <img src="<?= base_url('img/jateng.webp') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// YOGYAKARTA
$.getJSON("<?= base_url('provinsi/34.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: '#6222cc',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Yogyakarta</p>
    <b>Ibu Kota : Yogyakarta</b><br>
    <b>Jumlah Penduduk : 3.753.760 Jiwa</b><br>
    <b>Luas Wilayah : 3.133 KM<sup>2</sup></b>

  <img src="<?= base_url('img/jogja.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// JAWA TIMUR
$.getJSON("<?= base_url('provinsi/35.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'blue',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Jawa Timur</p>
    <b>Ibu Kota : Surabaya</b><br>
    <b>Jumlah Penduduk : 38.610.202 Jiwa</b><br>
    <b>Luas Wilayah : 47.921 KM<sup>2</sup></b>

  <img src="<?= base_url('img/jatim.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// BANTEN
$.getJSON("<?= base_url('provinsi/36.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'yellow',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Banten</p>
    <b>Ibu Kota : Serang</b><br>
    <b>Jumlah Penduduk : 11.704.877 Jiwa</b><br>
    <b>Luas Wilayah : 9.019 KM<sup>2</sup></b>

  <img src="<?= base_url('img/banten.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// BALI
$.getJSON("<?= base_url('provinsi/51.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'black',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Bali</p>
    <b>Ibu Kota : Denpasar</b><br>
    <b>Jumlah Penduduk : 4.104.900 Jiwa</b><br>
    <b>Luas Wilayah : 5.561 KM<sup>2</sup></b>

  <img src="<?= base_url('img/bali.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// NTB
$.getJSON("<?= base_url('provinsi/52.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'red',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Nusa Tenggara Barat</p>
    <b>Ibu Kota : Mataram</b><br>
    <b>Jumlah Penduduk : 4.773.795 Jiwa</b><br>
    <b>Luas Wilayah : 19.950 KM<sup>2</sup></b>

  <img src="<?= base_url('img/ntb.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// NTT
$.getJSON("<?= base_url('provinsi/53.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'green',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Nusa Tenggara Timur</p>
    <b>Ibu Kota : Kupang</b><br>
    <b>Jumlah Penduduk : 5.036.897 Jiwa</b><br>
    <b>Luas Wilayah : 47.676 KM<sup>2</sup></b>

  <img src="<?= base_url('img/ntt.jpeg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// KALBAR
$.getJSON("<?= base_url('provinsi/61.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'yellow',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Kalimantan Barat</p>
    <b>Ibu Kota : Pontianak</b><br>
    <b>Jumlah Penduduk : 4.716.093 Jiwa</b><br>
    <b>Luas Wilayah : 115.114 KM<sup>2</sup></b>

  <img src="<?= base_url('img/kalbar.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// KALTENG
$.getJSON("<?= base_url('provinsi/62.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: '#1dc88a',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Kalimantan Tengah</p>
    <b>Ibu Kota : Palangkaraya</b><br>
    <b>Jumlah Penduduk : 2.439.858 Jiwa</b><br>
    <b>Luas Wilayah : 153.564 KM<sup>2</sup></b>

  <img src="<?= base_url('img/kalteng.webp') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// KALSEL
$.getJSON("<?= base_url('provinsi/63.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'red',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Kalimantan Selatan</p>
    <b>Ibu Kota : Banjarmasin</b><br>
    <b>Jumlah Penduduk : 3.922.790 Jiwa</b><br>
    <b>Luas Wilayah : 36.805 KM<sup>2</sup></b>

  <img src="<?= base_url('img/kalsel.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// KALTIM
$.getJSON("<?= base_url('provinsi/64.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'blue',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Kalimantan Timur</p>
    <b>Ibu Kota : Samarinda</b><br>
    <b>Jumlah Penduduk : 3.351.432 Jiwa</b><br>
    <b>Luas Wilayah : 194.849 KM<sup>2</sup></b>

  <img src="<?= base_url('img/kaltim.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// KALTARA
$.getJSON("<?= base_url('provinsi/65.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'white',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Kalimantan Utara</p>
    <b>Ibu Kota : Tanjungselor</b><br>
    <b>Jumlah Penduduk : 618.384 Jiwa</b><br>
    <b>Luas Wilayah : 71.177 KM<sup>2</sup></b>

  <img src="<?= base_url('img/kaltara.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// SULUT
$.getJSON("<?= base_url('provinsi/71.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'green',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Sulawesi Utara</p>
    <b>Ibu Kota : Manado</b><br>
    <b>Jumlah Penduduk : 2.386.604 Jiwa</b><br>
    <b>Luas Wilayah : 13.931 KM<sup>2</sup></b>

  <img src="<?= base_url('img/sulut.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// SULTENG
$.getJSON("<?= base_url('provinsi/72.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'black',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Sulawesi Tengah</p>
    <b>Ibu Kota : Palu</b><br>
    <b>Jumlah Penduduk : 2.831.283 Jiwa</b><br>
    <b>Luas Wilayah : 68.090 KM<sup>2</sup></b>

  <img src="<?= base_url('img/sulteng.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// SULSEL
$.getJSON("<?= base_url('provinsi/73.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'yellow',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Sulawesi Selatan</p>
    <b>Ibu Kota : Makassar</b><br>
    <b>Jumlah Penduduk : 8.432.163 Jiwa</b><br>
    <b>Luas Wilayah : 46.116 KM<sup>2</sup></b>

  <img src="<?= base_url('img/sulsel.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// SULTENGGA
$.getJSON("<?= base_url('provinsi/74.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'blue',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Sulawesi Tenggara</p>
    <b>Ibu Kota : Kendari</b><br>
    <b>Jumlah Penduduk : 2.448.081 Jiwa</b><br>
    <b>Luas Wilayah : 36.757 KM<sup>2</sup></b>

  <img src="<?= base_url('img/sultengga.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// GORONTALO
$.getJSON("<?= base_url('provinsi/75.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'red',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Gorontalo</p>
    <b>Ibu Kota : Gorontalo</b><br>
    <b>Jumlah Penduduk : 1.115.633 Jiwa</b><br>
    <b>Luas Wilayah : 11.968 KM<sup>2</sup></b>

  <img src="<?= base_url('img/gorontalo.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// SULBAR
$.getJSON("<?= base_url('provinsi/76.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'orange',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Sulawesi Barat</p>
    <b>Ibu Kota : Mamuju</b><br>
    <b>Jumlah Penduduk : 1.258.090 Jiwa</b><br>
    <b>Luas Wilayah : 16.787 KM<sup>2</sup></b>

  <img src="<?= base_url('img/sulbar.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// MALUKU
$.getJSON("<?= base_url('provinsi/81.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'blue',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Maluku</p>
    <b>Ibu Kota : Ambon</b><br>
    <b>Jumlah Penduduk : 1.657.409 Jiwa</b><br>
    <b>Luas Wilayah : 49.350 KM<sup>2</sup></b>

  <img src="<?= base_url('img/maluku.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// MALUKU UTARA
$.getJSON("<?= base_url('provinsi/82.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'red',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Maluku Utara</p>
    <b>Ibu Kota : Sofifi</b><br>
    <b>Jumlah Penduduk : 1.138.667 Jiwa</b><br>
    <b>Luas Wilayah : 42.960 KM<sup>2</sup></b>

  <img src="<?= base_url('img/maluku-utara.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// PAPUA
$.getJSON("<?= base_url('provinsi/91.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'yellow',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Papua</p>
    <b>Ibu Kota : Jayapura</b><br>
    <b>Jumlah Penduduk : 3.091.047 Jiwa</b><br>
    <b>Luas Wilayah : 309.934 KM<sup>2</sup></b>

  <img src="<?= base_url('img/papua.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});

// PAPUA BARAT
$.getJSON("<?= base_url('provinsi/94.geojson')?>", function(data) {
  L.geoJson(data, {
      style: function(feature) {
        return {
          color: 'purple',
          fillOpacity: 1
        }
      }
    }).bindPopup(`<p class="fw-bold text-center">Provinsi Papua Barat</p>
    <b>Ibu Kota : Manokwari</b><br>
    <b>Jumlah Penduduk : 849.809 Jiwa</b><br>
    <b>Luas Wilayah : 114.566 KM<sup>2</sup></b>

  <img src="<?= base_url('img/papua-barat.jpg') ?>" alt="" width="100%"/>`)
    .addTo(map);
});
</script>