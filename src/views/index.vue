<script setup lang="ts">
import { onMounted, ref } from 'vue'
import { reveal } from '@/composables/useReveal'

import Blog from '@/components/Blog.vue'
import Clients from '@/components/Clients.vue'
import Contact from '@/components/Contact.vue'
import Gallery from '@/components/Gallery.vue'
import HeroVideo from '@/components/HeroVideo.vue'
import NavBar from '@/components/NavBar.vue'
import References from '@/components/References.vue'

onMounted(() => {
  // Observer for reveal animations
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active')
        }
      })
    },
    {
      threshold: 0.1, // Adjust as needed
    },
  )
  // Apply observer to initial reveals
  const applyObservers = () => {
    const reveals = document.querySelectorAll<HTMLElement>('.reveal:not(.observed)')
    reveals.forEach((reveal) => {
      observer.observe(reveal)
      reveal.classList.add('observed') // Mark as observed to avoid duplicate observing
    })
  }
  applyObservers() // Initial check
  // Fallback for browsers without IntersectionObserver
  window.addEventListener('scroll', reveal)
  reveal()
  // Mutation Observer to watch for new elements
  const mutationObserver = new MutationObserver(() => {
    applyObservers()
  })
  mutationObserver.observe(document.body, {
    childList: true,
    subtree: true,
  })
})
</script>
<template>
  <main>
    <HeroVideo youtube="UQCIQ8smKDM" vimeo="1013776851" title="Behind the Scenes" />
    <hr class="semi" role="separator" />
    <Gallery />
    <article id="blog" class="wrapper-standard">
      <Blog />
      <div id="about"></div>
      <!-- ABOUT START -->
      <hr class="reveal" role="separator" />
      <h2 class="arttext reveal">About</h2>
      <img
        class="profilepic reveal"
        src="https://cdn.slavic.media/img/2022-04-24-176-2/fullHD"
        alt="Black and white portrait of Adam Sochorec captured in a Tribe Media studios in Kolding"
      />
      <hr class="reveal" role="separator" />
      <p class="reveal">
        Adam, a web developer and co-founder of
        <a href="https://slavic.media" target="_blank">Slavic Media</a>, has a unique background in
        <a
          href="https://www.flickr.com/photos/141401020@N03/"
          target="_blank"
          rel="noopener noreferrer"
          >building LEGO</a
        >, and photography. Currently based in Prague, he works full-time as a frontend developer.
        <br /><br />
        Adam’s expertise extends to various photography disciplines, including studio, stills, and
        fine art photography. He also excels in video editing and colour grading.
        <br /><br />
        In his free time, Adam enjoys bushcrafting and hiking, allowing him to unplug and connect
        with nature.
      </p>
      <hr class="reveal" role="separator" />
      <Clients />
      <hr class="reveal" role="separator" />
      <References />
      <Contact />
    </article>
    <!-- ABOUT END -->
  </main>
</template>
<style lang="postcss" scoped>
.arttext {
  position: relative;
  left: var(--grid-gap-2);
  z-index: 3;
  top: 22px;
  margin: 0 !important;

  @media only screen and (max-width: 667px) {
    z-index: 3;
    top: 14px;
  }
}
img.profilepic {
  border-radius: var(--border-radius-1);
}
</style>
