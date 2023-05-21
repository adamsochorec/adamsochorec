// SKILL BARS START
function showProgress() {
  skillBars.forEach((e) => {
    const t = e.dataset.progress;
    e.style.opacity = 1;
    e.style.width = `${t}%`;
  });
}
showProgress();
// SKILL BARS END

/// LOADER AT SUBMITING A FORM START
showProgress();
function onFormSubmission(e) {
  const t = Array.from(e.target.elements).every((e) => e.reportValidity()),
    o = document.querySelector(".submit-btn");
  t ? (o.innerHTML = "<div class='loader'></div>") : e.preventDefault();
}
contactForm.addEventListener("submit", onFormSubmission);
// LOADER AT SUBMITING A FORM END
