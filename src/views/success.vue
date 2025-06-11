<script setup lang="ts">
import { DotLottieVue } from '@lottiefiles/dotlottie-vue'
</script>

<template>
  <main>
    <section
      class="wrapper-wide flex-center"
      role="article"
      aria-labelledby="error-heading"
      style="margin: 250px 0"
    >
      <DotLottieVue
        id="lottie"
        background="transparent"
        autoplay
        aria-label="Page not found animation."
        src="https://lottie.host/66d21d0e-39bc-4fd7-a1e7-113e677bdbf6/QstZTUqBtp.lottie"
      />
      <h1
        class="logo-font"
        style="
          font-family: var(--content-font);
          font-optical-sizing: auto;
          font-weight: 100;
          font-style: normal;
        "
        id="error-heading"
        aria-describedby="error-description"
      >
        Form submitted<br />successfully!
      </h1>
      <Btn
        tag="NuxtLink"
        icon="home"
        label="Return to the homepage"
        variant="primary"
        :to="'/'"
        aria-label="Return to the homepage"
      />
    </section>
  </main>
</template>

<style scoped lang="postcss">
#lottie {
  height: 100px;
  aspect-ratio: 1/1;
  margin-bottom: var(--grid-gap-1);

  @media only screen and (max-width: 500px) {
    height: 250px;
    width: 100%;
  }
}
h1 {
  font-size: var(--font-size-4);
  font-weight: var(--paragraph-weight);
  text-transform: unset;
  text-align: center;
}
</style>
