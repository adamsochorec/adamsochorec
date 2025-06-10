<script setup>
const currentYear = new Date().getFullYear();
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
        class="pi pi-sun"
        href="https://sketchfab.com/slavicmedia"
        target="_blank"
        rel="noopener noreferrer"
      >
      </a
      ><a
        class="pi pi-github"
        href="https://github.com/adamsochorec/adamsochorec"
        target="_blank"
        rel="noopener noreferrer"
      >
      </a>
      <a
        class="pi pi-sun"
        href="https://www.flickr.com/photos/141401020@N03/"
        target="_blank"
        rel="noopener noreferrer"
      >
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
  font-family: "SF Pro", sans-serif;
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
</style>
