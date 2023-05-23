(function header() {
  let lastScrollTop = 0;

  // TOGGLE HAMBURGER & COLLAPSE NAV START
  const hamburger = document.querySelector(".hamburger");
  const menuLeft = document.querySelector(".menu-left");
  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("open");
    menuLeft.classList.toggle("collapse");
  });

  // REMOVE X & COLLAPSE NAV ON ON CLICK
  const menuLeftLinks = document.querySelectorAll(".menu-left a");
  menuLeftLinks.forEach((link) => {
    link.addEventListener("click", () => {
      hamburger.classList.remove("open");
      menuLeft.classList.remove("collapse");
    });
  });

  let ticking = false;
  window.addEventListener("scroll", () => {
    if (!ticking) {
      window.requestAnimationFrame(() => {
        hasScrolled();
        ticking = false;
      });
      ticking = true;
    }
  });

  function hasScrolled() {
    const st = window.pageYOffset || document.documentElement.scrollTop;
    const header = document.querySelector("header");
    const navbarHeight = header.offsetHeight;
    const windowHeight = window.innerHeight;
    const delta = 5;

    if (Math.abs(lastScrollTop - st) <= delta) return;

    if (st > lastScrollTop && st > navbarHeight) {
      header.classList.remove("show-nav");
      header.classList.add("hide-nav");
      hamburger.classList.remove("open");
      menuLeft.classList.remove("collapse");
    } else if (st + windowHeight < document.documentElement.scrollHeight) {
      header.classList.remove("hide-nav");
      header.classList.add("show-nav");
    }

    lastScrollTop = st;
  }
})();

// HOMEPAGE START
if (document.body.id === "homepage") {
  (function contactForm() {
    const contactForm = document.querySelector("form"),
      skillBars = document.querySelectorAll(".skill-bar");

    function setProgress(e, progress) {
      e.style.opacity = 1;
      e.style.width = `${progress}%`;
    }
    // SKILL BARS START
    function showProgress() {
      skillBars.forEach((bar) => {
        const progress = bar.dataset.progress;
        setProgress(bar, progress);
      });
    }
    showProgress();
    // SKILL BARS END

    /// LOADER AT SUBMITING A FORM START
    function onFormSubmission(event) {
      const isValid = Array.from(event.target.elements).every((element) =>
        element.reportValidity()
      );
      const submitButton = document.querySelector(".submit-btn");

      if (isValid) {
        submitButton.innerHTML = "<div class='loader'></div>";
      } else {
        event.preventDefault();
      }
    }
    contactForm.addEventListener("submit", onFormSubmission);
    // LOADER AT SUBMITING A FORM END
  })();
}

// CYBERSECURITY SUPERBTN START
if (document.body.id === "cybersecurity") {
  (function cybersecurity() {
    function getPassword() {
      const chars =
        "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ......-----";
      const passwordLength = 19;
      let password = "";

      for (let i = 0; i < passwordLength; i++) {
        let randomNumber = Math.floor(Math.random() * chars.length);
        password += chars.charAt(randomNumber);
      }
      return password;
    }

    function textChange(btn, pwdField) {
      btn.classList.toggle("clicked");
      pwdField.select();
      document.execCommand("Copy");
    }

    const superBtn = document.getElementById("btn");
    const passwordField = document.getElementById("password");

    superBtn.addEventListener("click", function () {
      passwordField.value = getPassword();
      textChange(superBtn, passwordField);
    });
  })();
}
// CYBERSECURITY SUPERBTN END

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

// ALAND START
if (document.body.id === "aland") {
  const map = createMap(); // call createMap() to get the map object
  map.setView([60.22776, 19.88992], 8.5); // set the view of a map

  // Turku camp
  const turku = L.circle([60.43518036116087, 22.227638902633263], {
    color: "rgb(128, 0, 128)",
    fillColor: "rgb(128, 0, 128)",
    fillOpacity: 0.5,
    radius: 400,
  }).addTo(map);
  turku.bindPopup("<b>Turku</b><br>1st camp");

  // Godby camp
  const godby = L.circle([60.22985490115892, 19.964375647748913], {
    color: "rgb(128, 0, 128)",
    fillColor: "rgb(128, 0, 128)",
    fillOpacity: 0.5,
    radius: 400,
  }).addTo(map);
  godby.bindPopup("<b>Godby</b><br>2nd and 5th camp");

  // Praästö camp
  const prasto = L.circle([60.20581741081814, 20.26394042343963], {
    color: "rgb(128, 0, 128)",
    fillColor: "rgb(128, 0, 128)",
    fillOpacity: 0.5,
    radius: 400,
  }).addTo(map);
  prasto.bindPopup("<b>Prästö</b><br>4th camp");

  // Turku - Mariehamn
  const ferryTurku = L.polyline(
    [
      [60.43347859465514, 22.221916349658606], // Turku
      [60.43269329942604, 22.206638223196226],
      [60.43075615674277, 22.199211356165907],
      [60.42593897724281, 22.18658568221436],
      [60.42211614213502, 22.172580732957183],
      [60.42134200816794, 22.154027553971286],
      [60.42134200816794, 22.154027553971286],
      [60.41579549140333, 22.131957825414148],
      [60.28696667376318, 22.025703743434466],
      [60.26750600862519, 21.93920090341851],
      [60.25379882479327, 21.833934686700356],
      [60.251024052931804, 21.819131618564025],
      [60.23110408802799, 21.77241973371457],
      [60.22048604491883, 21.714194351995236],
      [60.20904738263495, 21.57340077921829],
      [60.19695074329876, 21.509912084226272],
      [60.18092400498544, 21.467805596474655],
      [60.1765071001442, 21.439844256952092],
      [60.086895874924245, 21.220758923011214],
      [60.04516506076755, 21.1429362389217],
      [59.9830187064899, 21.05082829696503],
      [59.970015683383444, 21.00411640534723],
      [59.970015683383444, 21.003129534540548],
      [59.96230263591848, 20.78271852453898],
      [59.95703290847721, 20.745875341523735],
      [59.83267791242854, 20.314741690656078],
      [59.805225189447036, 20.179869339147515],
      [59.815587961577535, 19.841109361826515],
      [59.84109354175815, 19.797242407681974],
      [59.85405499203828, 19.788641044124223],
      [59.90628162599837, 19.7963822713262],
      [59.985973736969186, 19.829927584998874],
      [60.013068423616275, 19.850570857537484],
      [60.014572124350494, 19.85276382527686],
      [60.03960209660658, 19.89033955727183],
      [60.06075235651573, 19.910232594437293],
      [60.06902485676186, 19.92275783843562],
      [60.068657234127635, 19.922021059376892],
      [60.08115410555886, 19.92828368137605],
      [60.08537991691636, 19.928652070905418],
      [60.09193479944121, 19.927654572474303],
      [60.0921307244843, 19.929685803822334], // Mariehamn
    ],
    {
      color: "rgb(0, 126, 227)",
      dashArray: "10, 10",
    }
  ).addTo(map);
  ferryTurku.bindPopup("Ferry between Turku and Mariehamn");

  // Turku - Mariehamn
  const ferryStockholm = L.polyline(
    [
      [59.350436550066085, 18.1137807938025], // Stockholm
      [59.34740185790511, 18.13105788336995],
      [59.335112282841116, 18.16655577090252],
      [59.33500121219229, 18.17846099228513],
      [59.33563060769749, 18.201618101720737],
      [59.33829615365879, 18.212797394970263],
      [59.338444233412794, 18.213232951850113],
      [59.338444233412794, 18.213232951850113],
      [59.36076852391451, 18.267029208036668],
      [59.368724287621546, 18.314024783179857],
      [59.363595957499356, 18.37386825130304],
      [59.35599793144625, 18.429061273211914],
      [59.35761467519176, 18.442383726776125],
      [59.395585990177345, 18.44523853825417],
      [59.4291591908328, 18.388776711708893],
      [59.43738600142699, 18.392265925737615],
      [59.44111295610109, 18.40216331498049],
      [59.44418935703148, 18.41674810451071],
      [59.45089336449203, 18.427298804507476],
      [59.47556843049729, 18.441418122806358],
      [59.504765924626405, 18.47661788919388],
      [59.53531694999134, 18.559076022196834],
      [59.53883096687304, 18.570548457495356],
      [59.55421562183091, 18.61117999917762],
      [59.57612964453645, 18.671649301322812],
      [59.58750477973981, 18.740722922182655],
      [59.58798874272765, 18.742156976594973],
      [59.599359869423395, 18.76701392948625],
      [59.64553063327362, 18.89201567242639],
      [59.67571275167394, 18.96228434330096],
      [59.68693356822745, 18.99598462199037],
      [59.70815837958866, 19.068643385693054],
      [59.718283660623015, 19.11883529012409],
      [59.726598564328654, 19.170461253430943],
      [59.775283554315, 19.38282457305061],
      [60.035969976535675, 19.884433403368043],
      [60.06049585329122, 19.908995104735613],
      [60.06954695655482, 19.921842762249284],
      [60.07054219641394, 19.92213603966038],
      [60.083781895981375, 19.92850714918841],
      [60.09193479944121, 19.927654572474303],

      [60.0921307244843, 19.929685803822334], // Mariehamn
    ],
    {
      color: "rgb(0, 126, 227)",
      dashArray: "10, 10",
    }
  ).addTo(map);
  ferryStockholm.bindPopup("Ferry between Stockoholm and Mariehamn");

  // jomala church
  const church = L.circle([60.15495, 19.9485], {
    color: "rgb(0, 126, 227)",
    fillColor: "rgb(0, 126, 227)",
    fillOpacity: 0.5,
    radius: 400,
  }).addTo(map);
  church.bindPopup("<b>Jomala</b><br>St. Olaf's Church");

  // Djupviksgrottan
  const djupviksgrottan = L.circle([60.40028675968187, 19.831030380385], {
    color: "rgb(128, 0, 128)",
    fillColor: "rgb(128, 0, 128)",
    fillOpacity: 0.5,
    radius: 400,
  }).addTo(map);
  djupviksgrottan.bindPopup("<b>Djupviksgrottan cave</b><br>3rd camp");

  // historical graveyards
  const graveyeard = L.circle([60.20918, 20.26775], {
    color: "rgb(0, 126, 227)",
    fillColor: "rgb(0, 126, 227)",
    fillOpacity: 0.5,
    radius: 400,
  }).addTo(map);
  graveyeard.bindPopup(
    '<b>Prästö</b><br><a target="_blank" rel="noopener noreferrer" href="https://en.wikipedia.org/wiki/Pr%C3%A4st%C3%B6,_%C3%85land#History">Historical graveyards</a>'
  );
  // Fishing villiage church
  const village = L.circle([60.33996874932223, 20.325043048644517], {
    color: "rgb(0, 126, 227)",
    fillColor: "rgb(0, 126, 227)",
    fillOpacity: 0.5,
    radius: 400,
  }).addTo(map);
  village.bindPopup("<b>Norrgård</b><br>Fishing villiage");
}
// ALAND END

// BLAVAND START
if (document.body.id === "blavand") {
  const map = createMap(); // call createMap() to get the map object
  map.setView([55.55781, 8.15], 12); // set the view of a map

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
}
// BLAVAND END

// HOUSE HUNTING START
if (document.body.id === "house-hunting") {
  const map = createMap(); // call createMap() to get the map object
  map.setView([63.123166699294224, 21.615346790887852], 13); // set the view of a map

  // house
  const gerbyntie = L.circle([63.123166699294224, 21.615346790887852], {
    color: "rgb(0, 126, 227)",
    fillColor: "rgb(0, 126, 227)",
    fillOpacity: 0.5,
    radius: 200,
  }).addTo(map);
}
// HOUSE HUNTING END

// VASTERBOTTEN START
if (document.body.id === "västerbotten") {
  const map = createMap(); // call createMap() to get the map object
  map.setView([63.825, 20.27965], 7); // set the view of a map

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
}
// VASTERBOTTEN END

// MAP END

// CONTENT REVEAL START
function reveal() {
  const reveals = document.querySelectorAll(".reveal"),
    windowHeight = window.innerHeight;

  reveals.forEach((reveal) => {
    const revealtop = reveal.getBoundingClientRect().top;
    const revealpoint = 0;
    if (revealtop < windowHeight - revealpoint) {
      reveal.classList.add("active");
    }
  });
}
window.addEventListener("scroll", reveal);
reveal();
// CONTENT REVEAL END
