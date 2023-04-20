const hamburger = document.querySelector(".hamburger"),
  navMenu = document.querySelector(".nav-menu"),
  blurAll = document.querySelector(".blur"),
  scrollStop = document.querySelector("body");
function mobileMenu() {
  hamburger.classList.toggle("active"),
    navMenu.classList.toggle("active"),
    blurAll.classList.toggle("active"),
    scrollStop.classList.toggle("active");
}
hamburger.addEventListener("click", mobileMenu);
const navLink = document.querySelectorAll(".nav-link");
function closeMenu() {
  hamburger.classList.remove("active"),
    navMenu.classList.remove("active"),
    blurAll.classList.remove("active"),
    scrollStop.classList.remove("active");
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
navLink.forEach((e) => e.addEventListener("click", closeMenu)),
  document.querySelectorAll(".carousel").forEach((e) => {
    const t = e.querySelectorAll(".carousel__item"),
      s = Array.from(t, () => '<span class="carousel__button"></span>');
    e.insertAdjacentHTML(
      "beforeend",
      `<div class="carousel__nav">${s.join("")}</div>`
    );
    const o = e.querySelectorAll(".carousel__button");
    o.forEach((e, s) => {
      e.addEventListener("click", () => {
        t.forEach((e) => e.classList.remove("carousel__item--selected")),
          o.forEach((e) => e.classList.remove("carousel__button--selected")),
          t[s].classList.add("carousel__item--selected"),
          e.classList.add("carousel__button--selected");
      });
    }),
      t[0].classList.add("carousel__item--selected"),
      o[0].classList.add("carousel__button--selected");
  }),
  window.addEventListener("scroll", reveal);
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
