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
  zoom: 11,
  layers: [peta2]
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

// circle
L.marker([2.7692918448252337, 99.31810431584248]).addTo(map);
L.circle([2.7692918448252337, 99.31810431584248], {
    radius: 9000,
    color: 'red'
  })
  .bindPopup(`<b>PKS Bandar Pasir Mandoge</b><br>
  Alamat : Bandar Pasir Mandoge, Kec. Bandar Pasir Mandoge, Kabupaten Asahan, Sumatera Utara 21262<br>
  No HP : - <br>
  <img src="<?= base_url('img/pks-madoge.jpg') ?>" alt="" width="100%"/>`)
  .addTo(map);

L.marker([2.8921194621900828, 99.51255565301828]).addTo(map);
L.circle([2.8921194621900828, 99.51255565301828], {
    radius: 7000,
    color: 'yellow'
  })
  .bindPopup(`<b>UPTD SMA N 1 BUNTU PANE</b><br>
  Alamat : VGR7+G3V, Prapat Janji, Kec. Buntu Pane, Kabupaten Asahan, Sumatera Utara 21261<br>
  No HP : - <br>
  <img src="<?= base_url('img/sma-buntupane.png') ?>" alt="" width="100%"/>`)
  .addTo(map);

L.marker([2.979610256463508, 99.61143221798663]).addTo(map);
L.circle([2.979610256463508, 99.61143221798663], {
    radius: 4000,
    color: 'green',
    fillColor: 'blue',
    fillOpacity: 0.5
  })
  .bindPopup(`<b>PERUMDA Tirta Silaupiasa</b><br>
  Alamat : Jl. Jend. Ahmad Yani No. 33, Kisaran, Sei Renggas, Kisaran Barat, Sei Renggas, Kec. Kota Kisaran Barat, Kabupaten Asahan, Sumatera Utara 21213<br>
  No HP : 062341091 <br>
  <img src="<?= base_url('img/pdam-ts.png') ?>" alt="" width="100%"/>`)
  .addTo(map);

L.polyline([
    [2.7692918448252337, 99.31810431584248],
    [2.770142455250127, 99.31881413506267],
    [2.7696045536082683, 99.31965068776054],
    [2.773524977394755, 99.32202137367662],
    [2.7708825047129557, 99.33546674651677],
    [2.7703393810633097, 99.3386195044968],
    [2.771321181321922, 99.34543218083722],
    [2.7713211813293763, 99.34570406069192],
    [2.7724387614978308, 99.35360425553692],
    [2.772543208191321, 99.35548127073812],
    [2.7726424325427477, 99.3557531504858],
    [2.7725588751991412, 99.3585399167121],
    [2.771879971559299, 99.36328212495998],
    [2.771436072798721, 99.36666493521548],
    [2.769916371121946, 99.37052876307752],
    [2.769952927530627, 99.37846032875689],
    [2.769524695105385, 99.37950601973229],
    [2.7682191074829263, 99.3810275000211],
    [2.768130327472967, 99.38234507052023],
    [2.770370715126798, 99.38917343231782],
    [2.7706422769800545, 99.39742916219154],
    [2.7768986270237392, 99.41042187183164],
    [2.776345061503613, 99.41465692016605],
    [2.777201521275477, 99.41605291752978],
    [2.777864754947878, 99.41593789155569],
    [2.778360874364605, 99.41622022809122],
    [2.778841326687089, 99.4178410490332],
    [2.781863877911937, 99.4206147013868],
    [2.7816236524116205, 99.42169699151442],
    [2.780344189651429, 99.42361060590213],
    [2.7820518804677854, 99.42528893991074],
    [2.782072769636466, 99.42534645290873],
    [2.7839266819052955, 99.42933053524061],
    [2.7851591402887053, 99.43290679816852],
    [2.7856448121399886, 99.43325187627381],
    [2.791606537136114, 99.43561134990942],
    [2.792133984249901, 99.43632764815696],
    [2.7928442097009833, 99.43751973578915],
    [2.795878329775726, 99.43979411358202],
    [2.797011553365528, 99.43990913960067],
    [2.798191775812743, 99.44056269642294],
    [2.7984424423709857, 99.44152473202547],
    [2.8007506611108517, 99.44187503851431],
    [2.8013929926790406, 99.442952100199],
    [2.804771755304438, 99.44605780218691],
    [2.8106258170711844, 99.44956086680654],
    [2.8128661237433854, 99.45326784110279],
    [2.8156913062040094, 99.4548834336221],
    [2.8176861629238634, 99.45666633668051],
    [2.8188559202306416, 99.45762314386103],
    [2.8194303542054624, 99.45786365278197],
    [2.821618422770258, 99.45807801941808],
    [2.8218795285342746, 99.45860609331697],
    [2.822187633269746, 99.46034194024128],
    [2.8227098444689993, 99.46076544504456],
    [2.8253417853853615, 99.46194707579095],
    [2.8284698185357255, 99.46498480791051],
    [2.830203549476536, 99.46597298590336],
    [2.8306317597195467, 99.46748400921389],
    [2.8333211254049497, 99.46941853758021],
    [2.8365744661457626, 99.46962767578047],
    [2.8388251668656634, 99.47341830538068],
    [2.8408252058093235, 99.47427577202446],
    [2.8438069806161135, 99.47731873248948],
    [2.8463500995254423, 99.4827772392246],
    [2.8480159176703297, 99.48333145547892],
    [2.8522457272063075, 99.48563197547074],
    [2.8527347483498198, 99.48635174820005],
    [2.8544841087216977, 99.48704713265957],
    [2.854614657894963, 99.48723012856222],
    [2.854551994293637, 99.48749155128029],
    [2.8537530330772913, 99.4881032804406],
    [2.8537634770183518, 99.48902871686259],
    [2.8545415503597646, 99.48937902330483],
    [2.8548287585070207, 99.48984958419737],
    [2.8550219712202405, 99.49050836944694],
    [2.8553300671200548, 99.4906390808338],
    [2.8561969127144735, 99.49038811502444],
    [2.8577112800050752, 99.49096324507094],
    [2.8625756983576647, 99.49182821146647],
    [2.8645391425264912, 99.49144653428895],
    [2.8660796083589473, 99.4922203455584],
    [2.868361582727941, 99.49279024710385],
    [2.8718811406755846, 99.49782524886932],
    [2.8716148243615507, 99.5014851670495],
    [2.877402275518405, 99.51332293938093],
    [2.887766389429031, 99.51300636770708],
    [2.888095363732595, 99.51214367273742],
    [2.895906128450014, 99.51296018474295],
    [2.8970235883357427, 99.51368171149826],
    [2.8987049978656994, 99.51371308222862],
    [2.8995718104763544, 99.51334186196895],
    [2.900600496877922, 99.51424638457922],
    [2.900255958463207, 99.5336503887278],
    [2.9187030059845274, 99.54772689886777],
    [2.920274728210193, 99.55403764357142],
    [2.929047391028556, 99.56330207507608],
    [2.928821429913531, 99.57073908647509],
    [2.9362235089218105, 99.57488944786702],
    [2.9692626632602033, 99.59740177528928],
    [2.9714452210312046, 99.59950884251475],
    [2.971805499306787, 99.60041336517948],
    [2.97134601397608, 99.60185119012893],
    [2.971915149195923, 99.60356612329126],
    [2.971915149195923, 99.60356612329126],
    [2.974656392702546, 99.60839721534383],
    [2.9757998808474277, 99.60900894457187],
    [2.97649954881175, 99.61122058092043],
    [2.9769433677989148, 99.61186890926128],
    [2.9797211485093946, 99.61184276699153],
    [2.979610256463508, 99.61143221798663]
  ], {
    color: 'blue',
    weight: 3
  })
  .bindPopup(`<b>Jalan Lintas Asahan - Simalungun</b><br>
  <img src="<?= base_url('img/aspal.jpeg') ?>" alt="" width="100%"/>`)
  .addTo(map);
</script>