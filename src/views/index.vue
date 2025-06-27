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
        A creative director, photographer, and drone operator with a sense of design and
        composition. Coming from visual arts, co-founded
        <a href="https://slavic.media" target="_blank">Slavic Media</a> with a colleague.
        <br /><br />Adam specialises in video production, editing, and colour grading. When not
        crafting stories, he is a full stack developer and enjoys the outdoors.
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
