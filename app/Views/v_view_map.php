<div id="map" style="width: 100%; height: 100vh;"></div>

<script>
const map = L.map('map').setView([2.9795429717534736, 99.63073618886088], 15);

const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 19,
  attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
</script>