<template>
  <article id="blog">
    <section class="wrapper-standard reveal">
      <hr class="reveal" role="separator" />
      <h2 class="reveal">Blog</h2>
      <div class="grid-container gallery reveal">
        <a
          class="hh-stretch gradient"
          rel="noopener noreferrer"
          href="https://adamsochorec.github.io/cybersecurity"
        >
          <div class="grid-item" id="cybersecurity">
            <span>Cybersecurity</span>
          </div>
        </a>
        <a
          href="https://slavic.media/blog/how-we-cycled-denmark-from-south-to-north"
        >
          <div
            class="grid-item"
            style="
              background-image: url(https://cdn.slavic.media/img/IMG_1849/thumbnail);
            "
          >
            <span>Vestkystruten 🇩🇰</span>
          </div>
        </a>
        <a
          href="https://slavic.media/blog/todd-hidos-house-hunting-in-scandinavian-style"
        >
          <div
            class="grid-item"
            style="
              background-image: url(https://cdn.slavic.media/img/2022-10-09-00946/thumbnail);
            "
          >
            <span>House Hunting 🇫🇮</span>
          </div> </a
        ><a
          href="https://slavic.media/blog/bushcrafting-in-swedish-vasterbotten"
        >
          <div
            class="grid-item"
            style="
              background-image: url(https://cdn.slavic.media/img/2022-09-04-00937/thumbnail);
            "
          >
            <span>Västerbotten 🇸🇪</span>
          </div>
        </a>
        <a
          class="hh-stretch"
          href="https://slavic.media/blog/expedition-to-the-aaland-islands"
        >
          <div
            class="grid-item"
            style="
              background-image: url(https://cdn.slavic.media/img/2022-10-16-00978/thumbnail);
            "
          >
            <span>Åland 🇦🇽</span>
          </div>
        </a>

        <a
          class="hh-stretch"
          href="https://slavic.media/blog/3d-scanning-a-wwii-bunker-on-iphone"
        >
          <div
            class="grid-item"
            style="
              background-image: url(https://cdn.slavic.media/img/2022-04-15-00340/thumbnail);
            "
          >
            <span>Blåvand 🇩🇰</span>
          </div>
        </a>
      </div>
    </section>
  </article>
</template>
<style lang="postcss" scoped>
.grid-container {
  display: grid;
  grid-gap: 1rem;
  grid-template-columns: repeat(3, 1fr);
}
.grid-item {
  width: 100%;
  height: 100px;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  overflow: hidden;
  position: relative;
  -webkit-box-shadow: var(--box-shadow-1);
  box-shadow: var(--box-shadow-1);
}
a:hover {
  text-decoration: none;
}
span {
  color: white;
  font-size: var(--font-size-6);
  position: relative;
  z-index: 1;
}
.grid-item,
.grid-item:active,
.grid-item::before,
.grid-item:hover::after,
.grid-item:focus::after,
.grid-item::after,
.grid-item:hover,
a,
a::after,
a:hover {
  border-radius: var(--border-radius-1);
  -webkit-transition: var(--transition-1);
  -o-transition: var(--transition-2);
  transition: var(--transition-2);
}
.grid-item::after {
  background: inherit;
  background-size: cover;
  bottom: 0;
  content: "";
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  -webkit-transform-origin: center;
  -ms-transform-origin: center;
  transform-origin: center;
}
.grid-item:focus::after,
.grid-item:hover::after {
  -webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
}
.hh-stretch .grid-item span {
  font-size: var(--font-size-3);
}
</style>
