<script setup lang="ts">
// Meta SEO
const description =
  "Creative & Production studio based in Denmark (Kolding, Copenhagen) and Czechia (Prague). We tell stories through deep eye contact, magnificent shots, and clean design — helping your project stand out from the noise.";
const title = "Adam Sochorec";

// SEO META
useSeoMeta(
  {
    title: title,
    description: description,
    ogTitle: title,
    ogDescription: description,
    ogImage: "https://cdn.slavic.media/img/2022-04-24-176-2/sd",
    ogUrl: "https://adamsochorec.github.io/adamsochorec",
    twitterTitle: title,
    twitterDescription: description,
    twitterImage: "https://cdn.slavic.media/img/2022-04-24-176-2/sd",
    twitterCard: "summary",
  },
  { priority: 1 }
);
</script>
<template>
  <main>
    <HeroVideo
      youtube="UQCIQ8smKDM"
      vimeo="1013776851"
      title="Behind the Scenes"
    />
    <hr class="semi" role="separator" />
    <Gallery />
    <Blog />
    <!-- ABOUT START -->
    <article id="about">
      <section class="wrapper-standard">
        <hr class="reveal" role="separator" />

        <h2 class="arttext reveal">About</h2>
        <img
          class="reveal"
          src="https://cdn.slavic.media/img/2022-04-24-176-2/public"
          alt="Black and white portrait of Adam Sochorec captured in a Tribe Media studios in Kolding"
        />
        <hr class="reveal" role="separator" />
        <p class="reveal">
          Greetings from Denmark! As a Czech-born multimedia design student 🇨🇿,
          I'm bringing the Slavic spirit to my new venture,
          <a
            href="https://slavic.media"
            target="_blank"
            rel="noopener noreferrer"
            >Slavic Media</a
          >
          – small but mighty! <br /><br />I'm a Canon-wielding photography
          enthusiast with a side of iPhone, and a website wizard, thanks to my
          multimedia studies on
          <a
            href="https://www.iba.dk/fuldtidsuddannelser"
            target="_blank"
            rel="noopener noreferrer"
            >Erhversakademi Kolding</a
          >.<br />
          <br />
          Former
          <a
            href="https://www.flickr.com/photos/141401020@N03/"
            target="_blank"
            rel="noopener noreferrer"
            >LEGO architect</a
          >, current purveyor of digital aesthetics and sarcasm.<br /><br />Remember,
          no cookies — just creativity!
        </p>
        <hr class="reveal" role="separator" />
        <Clients />
        <hr class="reveal" role="separator" />
        <References />
      </section>
    </article>
    <Contact />
    <!-- ABOUT END -->
  </main>
</template>
<style lang="postcss" scoped>
.arttext {
  position: relative;
  left: var(--grid-gap-2);
  z-index: 3;
  top: var(--grid-gap-3);
  margin: 0 !important;

  @media only screen and (max-width: 667px) {
    z-index: 3;
    top: 14px;
  }
}
</style>
