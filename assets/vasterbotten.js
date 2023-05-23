// set the view of a map
map.setView([63.825, 20.27965], 7);

// Umeå
const umea = L.circle([63.82626312337281, 20.262169118602223], {
  color: "rgb(0, 126, 227)",
  fillColor: "rgb(0, 126, 227)",
  fillOpacity: 0.5,
  radius: 400,
}).addTo(map);
umea.bindPopup("Umeå");

// bullmarkForest
const bullmarkForest = L.circle([64.03357459146424, 20.483846795069944], {
  color: "rgb(0, 126, 227)",
  fillColor: "rgb(0, 126, 227)",
  fillOpacity: 0.5,
  radius: 400,
}).addTo(map);
bullmarkForest.bindPopup("Forest in Bullmark");

// savarForest
const savarForest = L.circle([64.214, 20.28], {
  color: "rgb(0, 126, 227)",
  fillColor: "rgb(0, 126, 227)",
  fillOpacity: 0.5,
  radius: 400,
}).addTo(map);
savarForest.bindPopup("Good spot for fishing");

// mire
const mire = L.circle([63.939938956923136, 20.49818426898042], {
  color: "rgb(0, 126, 227)",
  fillColor: "rgb(0, 126, 227)",
  fillOpacity: 0.5,
  radius: 400,
}).addTo(map);
mire.bindPopup("Mire");

// ferry
const ferryVaasa = L.polyline(
  [
    [63.0951, 21.6165],
    [63.0857, 21.5896],
    [63.6303, 20.4026],
    [63.8258, 20.263],
  ],
  {
    color: "rgb(0, 126, 227)",
    dashArray: "10, 10",
  }
).addTo(map);
ferryVaasa.bindPopup("Ferry between Vaasa and Umeå");
