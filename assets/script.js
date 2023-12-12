// LOADER ANIMATION START
(function introLoader() {
  window.addEventListener("load", () => {
    // When the window is fully loaded, hide the loader
    const loader = document.querySelector(".loader-container");
    loader.style.display = "none";
  });
})();

// LOADER ANIMATION END
(function header() {
  let lastScrollTop = 0;

  // TOGGLE HAMBURGER & COLLAPSE NAV START
  const hamburger = document.querySelector(".hamburger"),
    menuLeft = document.querySelector(".menu-left");
  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("open");
    menuLeft.classList.toggle("collapse");
  });

  // REMOVE X & COLLAPSE NAV ON CLICK
  const menuLeftLinks = document.querySelectorAll(".menu-left a");
  menuLeftLinks.forEach((link) => {
    link.addEventListener("click", () => {
      hamburger.classList.remove("open");
      menuLeft.classList.remove("collapse");
    });
  });

  // REMOVE X & COLLAPSE SHOPPING CART ON HOVER
  const cartNavigation = document.querySelector(".cart-navigation"),
    shoppingCart = document.querySelector(".shopping-cart");

  shoppingCart.addEventListener("click", () => {
    cartNavigation.classList.toggle("open");
  });

  // END
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
    const header = document.querySelector("header"),
      cartNavigation = document.querySelector(".cart-navigation");
    const navbarHeight = header.offsetHeight;
    const windowHeight = window.innerHeight;
    const delta = 5;

    if (Math.abs(lastScrollTop - st) <= delta) return;

    if (st > lastScrollTop && st > navbarHeight) {
      header.classList.remove("show-nav");
      header.classList.add("hide-nav");
      hamburger.classList.remove("open");
      cartNavigation.classList.remove("open");
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
  // VIDEO PLAYER START
  document.addEventListener("DOMContentLoaded", function () {
    const playButton = document.getElementById("play");
    const player = document.getElementById("player");
    const videoCover = document.getElementById("video-cover");

    // Add a click event listener to the play button
    playButton.addEventListener("click", function (e) {
      e.preventDefault();

      // Hide the video cover and play button
      videoCover.style.display = "none";
      playButton.style.display = "none";

      // Show the video player
      player.style.display = "block";

      // Add a delay of one second (1000 milliseconds) and play the video
      setTimeout(function () {
        player.src += "?autoplay=1";
      }, 200);
    });
  });

  // VIDEO PLAYER END

  // SKILL BARS START
  function setProgress(e, progress) {
    e.style.opacity = 1;
    e.style.width = `${progress}%`;
  }
  function showProgress() {
    const skillBars = document.querySelectorAll(".skill-bar");
    skillBars.forEach((bar) => {
      const progress = bar.dataset.progress;
      setProgress(bar, progress);
    });
  }
  showProgress();
  // SKILL BARS END

  (function contactForm() {
    const contactForm = document.querySelector("form");

    /// LOADER AT SUBMITING A FORM START
    function onFormSubmission(event) {
      const isValid = Array.from(event.target.elements).every((element) =>
          element.reportValidity()
        ),
        submitButton = document.querySelector(".submit-btn");

      if (isValid) {
        submitButton.innerHTML = "<div class='loader'></div>";
      } else {
        event.preventDefault();
      }
    }
    contactForm.addEventListener("submit", onFormSubmission);
    // LOADER AT SUBMITING A FORM END

    // SUBMIT AT ENTER START
    document.addEventListener("keyup", function (event) {
      if (event.keyCode === 13) {
        onFormSubmission(event);
      }
    });
    // SUBMIT AT ENTER END
  })();
}
// CYBERSECURITY START
// CYBERSECURITY SUPERBTN START
if (document.body.id === "cybersecurity") {
  (function cybersecurity() {
    const superBtn = document.getElementById("btn"),
      passwordField = document.getElementById("password"),
      introSectionWrapper = document.getElementById("passwordGeneratorArea");
    let keyupListener;
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

      if (!navigator.clipboard) {
        try {
          document.execCommand("copy");
        } catch (err) {
          console.error("Fallback: Oops, unable to copy", err);
        }
        return;
      }
      navigator.clipboard.writeText(pwdField.value).then(
        function () {
          console.log("Async: Copying to clipboard was successful!");
        },
        function (err) {
          console.error("Async: Could not copy text: ", err);
        }
      );
    }
    superBtn.addEventListener("click", function () {
      passwordField.value = getPassword();
      textChange(superBtn, passwordField);
    });

    function generateAndCopyPassword() {
      passwordField.value = getPassword();
      textChange(superBtn, passwordField);
    }

    superBtn.addEventListener("click", generateAndCopyPassword);
    // Listen for the Enter key while mouse is hovering over the intro-section-wrapper div

    introSectionWrapper.addEventListener("mouseenter", function () {
      keyupListener = function (event) {
        if (event.keyCode === 13) {
          generateAndCopyPassword();
        }
      };
      document.addEventListener("keyup", keyupListener);
    });

    introSectionWrapper.addEventListener("mouseleave", function () {
      document.removeEventListener("keyup", keyupListener);
    });
    // LOTTIE INTERACTIVITY START
    LottieInteractivity.create({
      player: "#FALottie",
      mode: "scroll",
      actions: [
        {
          visibility: [0.5, 1.0],
          type: "play",
        },
      ],
    });
    // LOTTIE INTERACTIVITY END
  })();

  // CYBERSECURITY SUPER BTN END

  // PASWORD STRENGHT START
  $(document).ready(function ($) {
    $("#myPassword").strength({
      strengthClass: "strength",
      strengthMeterClass: "strength_meter flex-center",
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
            thismeter
              .addClass("veryweak")
              .html("<p>Strength: <i>very weak</i></p>");
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
              '" type="text" name="" value=""><p><a data-password-button="' +
              thisid +
              '" href="" class="' +
              this.options.strengthButtonClass +
              '">' +
              this.options.strengthButtonText +
              '</a> &#8250;</p><div class="' +
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
// SWIPER START
const swiper = new Swiper(".product-swiper", {
  // Optional parameters
  direction: "horizontal",
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  }, // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },
});
const reviewsSwiper = new Swiper(".recommendation-swiper", {
  // Optional parameters
  direction: "horizontal",
  loop: true,
  speed: 600,
  spaceBetween: 10,
  autoplay: {
    delay: 3000,
  },
  breakpoints: {
    375: {
      slidesPerView: 2,
    },
    620: {
      slidesPerView: 3,
    },
  },
});
// SWIPER END
if (document.body.id === "store-checkout") {
  const showCheckbox = document.getElementById("adresstype");
  const hiddenElement = document.getElementById("hiddenElement");

  showCheckbox.addEventListener("change", function () {
    if (showCheckbox.checked) {
      hiddenElement.style.display = "grid";
    } else {
      hiddenElement.style.display = "none";
    }
  });
}
