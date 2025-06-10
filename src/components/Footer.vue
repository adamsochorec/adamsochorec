<script setup>
const currentYear = new Date().getFullYear()
</script>
<template>
  <!-- FOOTER START -->
  <footer>
    <div class="social-icons">
      <a
        class="pi pi-instagram"
        href="https://www.instagram.com/accounts/login/?next=/adamsochorec/"
        target="_blank"
        rel="noopener noreferrer"
      >
      </a>
      <a
        class="icon"
        href="https://sketchfab.com/slavicmedia"
        target="_blank"
        rel="noopener noreferrer"
      >
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2000 2000">
          <path
            style="fill: transparent"
            d="M1000,69C484.48,69,66.72,486.84,66.72,1002.24s417.76,933.29,933.28,933.29,933.36-417.89,933.36-933.29S1515.52,69,1000,69h0Z"
            id="sketchfab-2"
          />
          <path
            class="icon"
            d="M1000,0C447.68,0,0,447.72,0,1000s447.68,1000,1000,1000,1000-447.72,1000-1000S1552.4,0,1000,0Zm-86.88,1595.07l-431.12-248.86v-502l431.12,232.79v518.07Zm76.8-636.19l-510.08-270.38,510.08-294.5,510.16,294.5-510.16,270.38Zm510.48,388.29l-429.52,248v-516.17l429.52-232v500.17Z"
            id="sketchfab-1"
          />
        </svg> </a
      ><a
        class="pi pi-github"
        href="https://github.com/adamsochorec/adamsochorec"
        target="_blank"
        rel="noopener noreferrer"
      >
      </a>
      <a
        class="icon"
        href="https://www.flickr.com/photos/141401020@N03/"
        target="_blank"
        rel="noopener noreferrer"
      >
        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
          <path d="M151 58a42 42 0 1 0 .1 0z" />
          <path d="M49 58a42 42 0 1 0 .1 0z" />
        </svg>
      </a>
      <a
        class="pi pi-linkedin"
        href="https://www.linkedin.com/in/adamsochorec/"
        target="_blank"
        rel="noopener noreferrer"
      >
      </a>
    </div>
    <div class="footer-ps">
      <p>No cookies, only ❤ from Denmark</p>
    </div>
    <div class="footer-ps">
      <b
        ><span>© {{ currentYear }}</span></b
      >
      <span class="ml-2">Adam Sochorec</span>
    </div>
  </footer>
</template>

<style lang="postcss" scoped>
footer {
  padding: var(--grid-gap-3) 0;
  text-align: center;
  background-color: rgba(var(--grey-color));
}
.footer-ps {
  color: white;
  font-family: 'SF Pro', sans-serif;
  font-optical-sizing: auto;
  font-weight: 100;
  font-style: normal;
  list-style: none;
  line-height: 1.4;
  opacity: 30%;
}
.footer-ps p {
  font-size: var(--font-size-7);
  font-weight: var(--paragraph-weight);
  text-shadow: none;
}
.footer-ps span:nth-child(1) {
  font-size: 11.2px;
  padding: 0 2px 0 0;
  -webkit-transform: translateY(-3px);
  -ms-transform: translateY(-3px);
  transform: translateY(-3px);
}
.footer-ps span:nth-child(2) {
  font-family: var(--logo-font);
  font-size: 8.6px;
}
.social-icons {
  margin-bottom: var(--grid-gap-1);
}
.pi:hover {
  color: rgb(var(--primary-color));
  -o-transition: var(--transition-1);
  transition: var(--transition-1);
  -webkit-transition: var(--transition-1);
}
a {
  margin-right: var(--grid-gap-1);
  text-decoration: none;
  -webkit-box-shadow: var(--box-shadow-1);
  box-shadow: var(--box-shadow-1);
}
a:nth-child(5) {
  margin-right: 0;
}
a svg {
  height: 17px;
}
</style>
