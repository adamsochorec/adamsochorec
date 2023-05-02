// NAVIGATION LOGO SCROLL TOP
$(".logo").on("click", function (e) {
  e.preventDefault();
  $(".hamburger").removeClass("open");
  $(".menu-left").removeClass("collapse");
  $("html, body").animate(
    {
      scrollTop: 0,
    },
    750,
    "easeInOutQuad"
  );
});
// LINKS TO ANCHORS
$('a[href^="#"]').on("click", function (event) {
  var $target = $(this.getAttribute("href"));

  if ($target.length) {
    event.preventDefault();
    $("html, body").stop().animate(
      {
        scrollTop: $target.offset().top,
      },
      750,
      "easeInOutQuad"
    );
  }
});

// TOGGLE HAMBURGER & COLLAPSE NAV
$(".hamburger").on("click", function () {
  $(this).toggleClass("open");
  $(".menu-left").toggleClass("collapse");
});
// REMOVE X & COLLAPSE NAV ON ON CLICK
$(".menu-left a").on("click", function () {
  $(".hamburger").removeClass("open");
  $(".menu-left").removeClass("collapse");
});

// SHOW/HIDE NAV

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $("header").outerHeight();

$(window).scroll(function (event) {
  didScroll = true;
});

setInterval(function () {
  if (didScroll) {
    hasScrolled();
    didScroll = false;
  }
}, 250);

function hasScrolled() {
  var st = $(this).scrollTop();

  // Make sure they scroll more than delta
  if (Math.abs(lastScrollTop - st) <= delta) return;

  // If they scrolled down and are past the navbar, add class .nav-up.
  // This is necessary so you never see what is "behind" the navbar.
  if (st > lastScrollTop && st > navbarHeight) {
    // Scroll Down
    $("header").removeClass("show-nav").addClass("hide-nav");
    $(".hamburger").removeClass("open");
    $(".menu-left").removeClass("collapse");
  } else {
    // Scroll Up
    if (st + $(window).height() < $(document).height()) {
      $("header").removeClass("hide-nav").addClass("show-nav");
    }
  }

  lastScrollTop = st;
}
function reveal() {
  const e = document.querySelectorAll(".reveal");
  for (var t = 0; t < e.length; t++) {
    const s = window.innerHeight;
    e[t].getBoundingClientRect().top < s - 0
      ? e[t].classList.add("active")
      : e[t].classList.remove("active");
  }
}
const skillBars = document.querySelectorAll(".skill-bar");
function showProgress() {
  skillBars.forEach((e) => {
    const t = e.dataset.progress;
    (e.style.opacity = 1), (e.style.width = `${t}%`);
  });
}
showProgress();
const contactForm = document.querySelector("form");
function onFormSubmission(e) {
  const t = Array.from(e.target.elements).every((e) => e.reportValidity()),
    s = document.querySelector(".submit-btn");
  t ? (s.innerHTML = "<div class='loader'></div>") : e.preventDefault();
}
contactForm.addEventListener("submit", onFormSubmission);
