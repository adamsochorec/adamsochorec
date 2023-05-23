// set the view of a map
map.setView([63.123166699294224, 21.615346790887852], 13);

// house
const gerbyntie = L.circle([63.123166699294224, 21.615346790887852], {
  color: "rgb(0, 126, 227)",
  fillColor: "rgb(0, 126, 227)",
  fillOpacity: 0.5,
  radius: 200,
}).addTo(map);
