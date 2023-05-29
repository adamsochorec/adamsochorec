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
// CYBERSECURITY START
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
  // CYBERSECURITY SUPER BTN END

  // PASWORD STRENGHT START
  $(document).ready(function ($) {
    $("#myPassword").strength({
      strengthClass: "strength",
      strengthMeterClass: "strength_meter",
      strengthButtonClass: "button_strength",
      strengthButtonText: "Show Password",
      strengthButtonTextToggle: "Hide Password",
    });
  });
  (function ($, window, document, undefined) {
    var pluginName = "strength",
      defaults = {
        strengthClass: "strength",
        strengthMeterClass: "strength_meter",
        strengthButtonClass: "button_strength",
        strengthButtonText: "Show Password",
        strengthButtonTextToggle: "Hide Password",
      };
    function Plugin(element, options) {
      this.element = element;
      this.$elem = $(this.element);
      this.options = $.extend({}, defaults, options);
      this._defaults = defaults;
      this._name = pluginName;
      this.init();
    }
    Plugin.prototype = {
      init: function () {
        var characters = 0;
        var capitalletters = 0;
        var loweletters = 0;
        var number = 0;
        var special = 0;
        var upperCase = new RegExp("[A-Z]");
        var lowerCase = new RegExp("[a-z]");
        var numbers = new RegExp("[0-9]");
        var specialchars = new RegExp("([!,%,&,@,#,$,^,*,?,_,~])");
        function GetPercentage(a, b) {
          return (b / a) * 100;
        }
        function check_strength(thisval, thisid) {
          if (thisval.length > 8) {
            characters = 1;
          } else {
            characters = 0;
          }
          if (thisval.match(upperCase)) {
            capitalletters = 1;
          } else {
            capitalletters = 0;
          }
          if (thisval.match(lowerCase)) {
            loweletters = 1;
          } else {
            loweletters = 0;
          }
          if (thisval.match(numbers)) {
            number = 1;
          } else {
            number = 0;
          }

          var total =
            characters + capitalletters + loweletters + number + special;
          var totalpercent = GetPercentage(7, total).toFixed(0);

          get_total(total, thisid);
        }
        function get_total(total, thisid) {
          var thismeter = $('div[data-meter="' + thisid + '"]');
          if (total == 0) {
            thismeter.removeClass().html("");
          } else if (total <= 1) {
            thismeter.removeClass();
            thismeter.addClass("veryweak").html("<p>Strength: <i>very weak</i></p>");
          } else if (total == 2) {
            thismeter.removeClass();
            thismeter.addClass("weak").html("<p>Strength: <i>weak</i></p>");
          } else if (total == 3) {
            thismeter.removeClass();
            thismeter.addClass("medium").html("<p>Strength: <i>medium</i></p>");
          } else {
            thismeter.removeClass();
            thismeter.addClass("strong").html("<p>Strength: <i>strong</i></p>");
          }
          console.log(total);
        }

        var isShown = false;
        var strengthButtonText = this.options.strengthButtonText;
        var strengthButtonTextToggle = this.options.strengthButtonTextToggle;

        thisid = this.$elem.attr("id");

        this.$elem
          .addClass(this.options.strengthClass)
          .attr("data-password", thisid)
          .after(
            '<input style="display:none" class="' +
              this.options.strengthClass +
              '" data-password="' +
              thisid +
              '" type="text" name="" value=""><a data-password-button="' +
              thisid +
              '" href="" class="' +
              this.options.strengthButtonClass +
              '">' +
              this.options.strengthButtonText +
              '</a><div class="' +
              this.options.strengthMeterClass +
              '"><div data-meter="' +
              thisid +
              '"><p></p></div></div>'
          );

        this.$elem.bind("keyup keydown", function (event) {
          thisval = $("#" + thisid).val();
          $('input[type="text"][data-password="' + thisid + '"]').val(thisval);
          check_strength(thisval, thisid);
        });

        $('input[type="text"][data-password="' + thisid + '"]').bind(
          "keyup keydown",
          function (event) {
            thisval = $(
              'input[type="text"][data-password="' + thisid + '"]'
            ).val();
            console.log(thisval);
            $('input[type="password"][data-password="' + thisid + '"]').val(
              thisval
            );
            check_strength(thisval, thisid);
          }
        );
        $(document.body).on(
          "click",
          "." + this.options.strengthButtonClass,
          function (e) {
            e.preventDefault();

            thisclass = "hide_" + $(this).attr("class");

            if (isShown) {
              $('input[type="text"][data-password="' + thisid + '"]').hide();
              $('input[type="password"][data-password="' + thisid + '"]')
                .show()
                .focus();
              $('a[data-password-button="' + thisid + '"]')
                .removeClass(thisclass)
                .html(strengthButtonText);
              isShown = false;
            } else {
              $('input[type="text"][data-password="' + thisid + '"]')
                .show()
                .focus();
              $(
                'input[type="password"][data-password="' + thisid + '"]'
              ).hide();
              $('a[data-password-button="' + thisid + '"]')
                .addClass(thisclass)
                .html(strengthButtonTextToggle);
              isShown = true;
            }
          }
        );
      },
      yourOtherFunction: function (el, options) {
        // some logic
      },
    };
    // A really lightweight plugin wrapper around the constructor,
    // preventing against multiple instantiations
    $.fn[pluginName] = function (options) {
      return this.each(function () {
        if (!$.data(this, "plugin_" + pluginName)) {
          $.data(this, "plugin_" + pluginName, new Plugin(this, options));
        }
      });
    };
  })(jQuery, window, document);
}
// PASWORD STRENGHT END

// CYBERSECURITY END

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
if (document.body.id === "vasterbotten") {
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
