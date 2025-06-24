<script setup lang="ts">
import { useVideoControls } from '@/composables/useVideoControlsYouTube'

interface HeroVideo {
  vimeo: string
  youtube: string
  title: string
  start?: string
}
const props = defineProps<HeroVideo>()
const { iframeRef, state, muteVideo, unmuteVideo, playVideo, pauseVideo } = useVideoControls()
</script>

<template>
  <section class="showcase" aria-labelledby="video-description">
    <div class="video-container">
      <iframe
        ref="iframeRef"
        id="youtube-player"
        :src="`https://www.youtube-nocookie.com/embed/${youtube}?enablejsapi=1&autoplay=1&controls=0&disablekb=1&start=${
          start ?? 0
        }&loop=1&playlist=${youtube}`"
        :title="title"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen
      ></iframe>
    </div>
    <p id="video-description" class="visually-hidden">
      {{ title }}
    </p>
    <a
      class="link"
      target="_blank"
      rel="noopener noreferrer nofollow"
      :href="`https://vimeo.com/${vimeo}`"
      v-tooltip.left="{ value: 'Watch on Vimeo', autoHide: true }"
      aria-label="Watch on Vimeo"
    >
      <i class="pi pi-vimeo"></i>
    </a>
    <section class="controls">
      <button v-if="state.isMuted" class="pi pi-volume-off volume" @click="unmuteVideo"></button>
      <button v-else class="pi pi-volume-up volume" @click="muteVideo"></button>
    </section>
  </section>
</template>

<style lang="postcss" scoped>
.link {
  position: absolute;
  right: var(--grid-gap-2);
}
.showcase {
  height: var(--dimension-1);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  text-align: center;
}
.video-container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: var(--dimension-1);
  overflow: hidden;
  background-position: center;
  background-size: cover;
  z-index: -1;

  iframe {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    width: 177.77777778vh;
    width: 177.77777778svh;
    height: 56.25vw;
    min-width: 100%;
    min-height: 100%;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
  }
}
/* VIDEO CONTROLS START */
.controls {
  left: var(--grid-gap-2);
  gap: var(--grid-gap-1);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  position: absolute;
}
.controls .volume {
  border-radius: var(--border-radius-2);
  cursor: pointer;
}
button,
button:hover {
  background-color: transparent;
  outline: none;
  border: none;
  cursor: pointer;
}
/* VIDEO CONTROLS END */
@media only screen and (max-width: 415px) {
  .video-container,
  .showcase {
    height: 100vh;
    height: 100svh;
  }
  .controls,
  .link {
    top: calc(100svh - 4 * var(--grid-gap-1));
  }
}
@media only screen and (min-width: 415px) {
  .controls,
  .link {
    top: calc(var(--dimension-1) - 3 * var(--grid-gap-1));
  }
}
</style>
