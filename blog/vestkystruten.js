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
map.setView([55.5361, 10.1124], 6);

// ride
const route = L.polyline(
  [
    [54.7938, 9.4403], // Flensburg
    [54.9397, 8.8633], // Tønder
    [55.2167, 8.8167], // Skærbæk
    [55.3281, 8.7625], // Ribe
    [55.4858, 8.6992], // Bramming
    [55.4667, 8.4514], // Esbjerg
    [55.6215, 8.4805], // Varde
    [56.0078, 8.1246], // Hvide Sand
    [56.1193, 8.1167], // Søndervig
    [56.0886, 8.2584], // Ringkøbning
    [56.3023, 8.6358], // Høver
    [56.3608, 8.6161], // Holstebro
    [56.4842, 8.5775], // Struer
    [56.7355, 8.2632], // Hvidbjerg
    [56.7789, 8.2624], // Hurup
    [56.9597, 8.7023], // Thisted
    [57.1591, 9.0239], // Bulbjerg
    [57.1354, 9.3549], // Hjordal
    [57.2056, 9.6453], // Pandrup
    [57.3665, 9.6693], // Løkken
    [57.3729, 9.7186], // Lønstrup
    [57.4567, 9.9933], // Hjørring
    [57.5275, 9.8583], // Ålbæk
    [57.7253, 10.583], // Skagen
    [57.7442, 10.6444], // Grenen
  ],
  {
    color: "rgb(0, 126, 227)",
  }
).addTo(map);
route.bindPopup(
  "Distance: <b> 575.30 km</b> <br>Avg speed: <b>21.6 km</b><br>Max speed: <b>48.4 km</b>"
);
