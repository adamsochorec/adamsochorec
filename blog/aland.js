const map = L.map("map");
map.attributionControl.setPrefix("");
L.tileLayer(
  "https://{s}.tile.thunderforest.com/outdoors/{z}/{x}/{y}{r}.png?apikey=7c352c8ff1244dd8b732e349e0b0fe8d",
  {
    attribution:
      'Maps &copy; <a href="https://www.thunderforest.com">Thunderforest</a>, Data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    maxZoom: 22,
  }
).addTo(map);
map.setView([60.22776, 19.88992], 8.5);

// jomala church
const church = L.circle([60.15495, 19.9485], {
  color: "rgb(0, 126, 227)",
  fillColor: "rgb(0, 126, 227)",
  fillOpacity: 0.5,
  radius: 200,
}).addTo(map);
church.bindPopup(
  '<a target="_blank" rel="noopener noreferrer" href="https://en.wikipedia.org/wiki/St._Olaf%27s_Church,_Jomala">Church in Jomala</a>'
);

// Djupviksgrottan church
const djupviksgrottan = L.circle([60.40028675968187, 19.831030380385], {
  color: "rgb(0, 126, 227)",
  fillColor: "rgb(0, 126, 227)",
  fillOpacity: 0.5,
  radius: 200,
}).addTo(map);
djupviksgrottan.bindPopup("Djupviksgrottan cave");

// historical graveyards
const graveyeard = L.circle([60.20918, 20.26775], {
  color: "rgb(0, 126, 227)",
  fillColor: "rgb(0, 126, 227)",
  fillOpacity: 0.5,
  radius: 200,
}).addTo(map);
graveyeard.bindPopup(
  '<a target="_blank" rel="noopener noreferrer" href="https://en.wikipedia.org/wiki/Pr%C3%A4st%C3%B6,_%C3%85land#History">historical graveyards</a>'
);
// Fishing villiage church
const village = L.circle([60.33996874932223, 20.325043048644517], {
  color: "rgb(0, 126, 227)",
  fillColor: "rgb(0, 126, 227)",
  fillOpacity: 0.5,
  radius: 200,
}).addTo(map);
village.bindPopup("Fishing village");
