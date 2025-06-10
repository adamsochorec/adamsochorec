export function reveal() {
  const reveals = document.querySelectorAll<HTMLElement>('.reveal')
  const windowHeight = window.innerHeight

  reveals.forEach((reveal) => {
    const revealtop = reveal.getBoundingClientRect().top
    const revealpoint = 0 // Trigger as soon as it enters the viewport

    if (revealtop < windowHeight - revealpoint) {
      reveal.classList.add('active')
    }
  })
}
