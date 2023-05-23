(function() { 
  // SKILL BARS START
  function setProgress(e, progress) {
    e.style.opacity = 1;
    e.style.width = `${progress}%`;
  }

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
    const isValid = Array.from(event.target.elements).every((element) => element.reportValidity());
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
