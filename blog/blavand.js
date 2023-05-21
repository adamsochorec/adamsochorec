const map = L.map("map");
map.attributionControl.setPrefix("");
map.attributionControl.setPrefix("");
L.tileLayer(
  "https://{s}.tile.thunderforest.com/outdoors/{z}/{x}/{y}{r}.png?apikey=7c352c8ff1244dd8b732e349e0b0fe8d",
  {
    attribution:
      'Maps &copy; <a href="https://www.thunderforest.com">Thunderforest</a>, Data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    maxZoom: 22,
  }
).addTo(map);

// set the view of a map
map.setView([55.55781, 8.15], 12);

// lighthouse
const lighthouse = L.circle([55.55781, 8.08323], {
  color: "rgb(0, 126, 227)",
  fillColor: "rgb(0, 126, 227)",
  fillOpacity: 0.5,
  radius: 200,
}).addTo(map);
lighthouse.bindPopup("Blåvand Lighthouse");

// tirpitz
const tirpitz = L.circle([55.5504, 8.17224], {
  color: "rgb(0, 126, 227)",
  fillColor: "rgb(0, 126, 227)",
  fillOpacity: 0.5,
  radius: 200,
}).addTo(map);
tirpitz.bindPopup(
  '<a href="https://tirpitz.dk/" target="_blank" rel="no opener no-referrer">Tirpitz museum</a>'
);
