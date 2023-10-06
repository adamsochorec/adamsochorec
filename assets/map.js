// MAP START
function createMap() {
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
  return map; // return the map object
}

// BLAVAND START
if (document.body.id === "blavand") {
  const map = createMap(); // call createMap() to get the map object
  map.setView([55.55781, 8.25], 11); // set the view of a map

  // lighthouse
  const lighthouse = L.circle([55.55781, 8.08323], {
    color: "black",
    fillColor: "black",
    fillOpacity: 0.5,
    radius: 200,
  }).addTo(map);
  lighthouse.bindPopup("Blåvand Lighthouse");

  // tirpitz
  const tirpitz = L.circle([55.5504, 8.17224], {
    color: "black",
    fillColor: "black",
    fillOpacity: 0.5,
    radius: 200,
  }).addTo(map);
  tirpitz.bindPopup(
    '<a href="https://tirpitz.dk/" target="_blank" rel="no opener no-referrer">Tirpitz museum</a>'
  );
}
// BLAVAND END

// HOUSE HUNTING START
if (document.body.id === "house-hunting") {
  const map = createMap(); // call createMap() to get the map object
  map.setView([63.123166699294224, 21.615346790887852], 13); // set the view of a map

  // house
  const gerbyntie = L.circle([63.123166699294224, 21.615346790887852], {
    color: "black",
    fillColor: "black",
    fillOpacity: 0.5,
    radius: 200,
  }).addTo(map);
}
// HOUSE HUNTING END

// VASTERBOTTEN START
if (document.body.id === "vasterbotten") {
  const map = createMap(); // call createMap() to get the map object
  map.setView([63.6, 20.7], 6); // set the view of a map

  // Umeå
  const umea = L.circle([63.82886098513121, 20.266655834001106], {
    color: "black",
    fillColor: "black",
    fillOpacity: 0.5,
    radius: 1000,
  }).addTo(map);
  umea.bindPopup(
    '<a target="_blank" rel="noopener noreferrer" href="http://www.umeakampcenter.se">Umeå Kampcenter'
  );

  // bullmarkForest
  const bullmarkForest = L.circle([64.03357459146424, 20.483846795069944], {
    color: "black",
    fillColor: "black",
    fillOpacity: 0.5,
    radius: 1000,
  }).addTo(map);
  bullmarkForest.bindPopup("<b>Bullmark</b><br>1st, 2nd & 4th camp");

  // savarForest
  const savarForest = L.circle([64.214, 20.28], {
    color: "black",
    fillColor: "black",
    fillOpacity: 0.5,
    radius: 1000,
  }).addTo(map);
  savarForest.bindPopup("Good spot for fishing");

  // mire
  const mire = L.circle([63.939938956923136, 20.49818426898042], {
    color: "black",
    fillColor: "black",
    fillOpacity: 0.5,
    radius: 1000,
  }).addTo(map);
  mire.bindPopup("Mire");

  // ferry
  const ferryBack = L.polyline(
    [
      [63.088470474573136, 21.55620509499864],
      [63.08613431708929, 21.53642259556921],
      [63.08668948018596, 21.53110783337362],
      [63.09760768385968, 21.467528216958335],
      [63.1087045532845, 21.41895946810051],
      [63.11384466659548, 21.38306438265906],
      [63.11724625581501, 21.36883717347763],
      [63.13291799815172, 21.258453653246487],
      [63.135541448992306, 21.246270583315262],
      [63.14322568691025, 21.230571593514483],
      [63.148507420041014, 21.216834977753106],
      [63.1526065640006, 21.198028896651213],
      [63.15895724664989, 21.15420255067456],
      [63.37922499556759, 20.605914005018345],
      [63.58386456945381, 20.408818386072074],
      [63.630264573812056, 20.391176496608004],
      [63.68113513476671, 20.35057775500191],
      [63.68155204035438, 20.347333632140796],
      [63.68183885647961, 20.340841649728635],
      [63.681774456865206, 20.34036438356936],
    ],
    {
      color: "rgba(0, 126, 227, 0.7)",
      dashArray: "1, 5",
    }
  ).addTo(map);
  const ferryThere = L.polyline(
    [
      [63.088470474573136, 21.55620509499864],
      [63.08613431708929, 21.53642259556921],
      [63.08668948018596, 21.53110783337362],
      [63.09760768385968, 21.467528216958335],
      [63.1087045532845, 21.41895946810051],
      [63.11384466659548, 21.38306438265906],
      [63.11724625581501, 21.36883717347763],
      [63.13291799815172, 21.258453653246487],
      [63.135541448992306, 21.246270583315262],
      [63.14322568691025, 21.230571593514483],
      [63.148507420041014, 21.216834977753106],
      [63.1526065640006, 21.198028896651213],
      [63.15895724664989, 21.15420255067456],
      [63.37922499556759, 20.605914005018345],
      [63.58386456945381, 20.408818386072074],
      [63.630264573812056, 20.391176496608004],
      [63.68113513476671, 20.35057775500191],
      [63.68155204035438, 20.347333632140796],
      [63.68183885647961, 20.340841649728635],
      [63.681774456865206, 20.34036438356936],
    ],
    {
      color: "rgba(128, 0, 128, 0.5)",
      dashArray: "1, 5",
    }
  ).addTo(map);

  const ferry = L.polyline(
    [
      [63.088470474573136, 21.55620509499864],
      [63.08613431708929, 21.53642259556921],
      [63.08668948018596, 21.53110783337362],
      [63.09760768385968, 21.467528216958335],
      [63.1087045532845, 21.41895946810051],
      [63.11384466659548, 21.38306438265906],
      [63.11724625581501, 21.36883717347763],
      [63.13291799815172, 21.258453653246487],
      [63.135541448992306, 21.246270583315262],
      [63.14322568691025, 21.230571593514483],
      [63.148507420041014, 21.216834977753106],
      [63.1526065640006, 21.198028896651213],
      [63.15895724664989, 21.15420255067456],
      [63.37922499556759, 20.605914005018345],
      [63.58386456945381, 20.408818386072074],
      [63.630264573812056, 20.391176496608004],
      [63.68113513476671, 20.35057775500191],
      [63.68155204035438, 20.347333632140796],
      [63.68183885647961, 20.340841649728635],
      [63.681774456865206, 20.34036438356936],
    ],
    {
      color: "rgba(128, 0, 128, 0)",
    }
  ).addTo(map);
  ferry.bindPopup(
    "Day: <b>1</b> &<b> 6</b><br>4h ferry <b>Vaasa</b> 🇫🇮 ⇄ <b>Holmsund 🇸🇪</b>"
  );
}
// VASTERBOTTEN END

// MAP END
