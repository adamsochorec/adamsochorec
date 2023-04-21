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
