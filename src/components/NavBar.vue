<script setup lang="ts">
import { onMounted, onBeforeUnmount } from "vue";

onMounted(() => {
  let lastScrollTop = 0;
  let ticking = false;

  const hamburger = document.querySelector(".hamburger") as HTMLElement;
  const menuLeft = document.querySelector(".menu-left") as HTMLElement;
  const header = document.querySelector("header") as HTMLElement;
  const menuLeftLinks = document.querySelectorAll(".menu-left a");

  if (!hamburger || !menuLeft || !header) return;

  const handleHamburgerClick = () => {
    hamburger.classList.toggle("open");
    menuLeft.classList.toggle("collapse");
  };

  const handleMenuLinkClick = () => {
    hamburger.classList.remove("open");
    menuLeft.classList.remove("collapse");
  };

  const hasScrolled = () => {
    const st = window.pageYOffset || document.documentElement.scrollTop;
    const navbarHeight = header.offsetHeight;
    const windowHeight = window.innerHeight;
    const delta = 5;

    if (Math.abs(lastScrollTop - st) <= delta) return;

    if (st > lastScrollTop && st > navbarHeight) {
      header.classList.remove("show-nav");
      header.classList.add("hide-nav");
      hamburger.classList.remove("open");
      menuLeft.classList.remove("collapse");
    } else if (st + windowHeight < document.documentElement.scrollHeight) {
      header.classList.remove("hide-nav");
      header.classList.add("show-nav");
    }

    lastScrollTop = st;
  };

  const handleScroll = () => {
    if (!ticking) {
      window.requestAnimationFrame(() => {
        hasScrolled();
        ticking = false;
      });
      ticking = true;
    }
  };

  hamburger.addEventListener("click", handleHamburgerClick);
  menuLeftLinks.forEach((link) => {
    link.addEventListener("click", handleMenuLinkClick);
  });
  window.addEventListener("scroll", handleScroll);

  onBeforeUnmount(() => {
    hamburger.removeEventListener("click", handleHamburgerClick);
    menuLeftLinks.forEach((link) => {
      link.removeEventListener("click", handleMenuLinkClick);
    });
    window.removeEventListener("scroll", handleScroll);
  });
});
</script>

<template>
  <header>
    <div class="container">
      <nav id="navigation">
        <a href="/" class="logo"
          ><span>adam</span><br /><span>sochorec</span></a
        >
        <a aria-label="mobile menu" class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </a>
        <ul class="menu-left">
          <li>
            <a href="/#blog"><span class="pi pi-align-left"></span> blog</a>
          </li>
          <li>
            <a href="/#about"><span class="pi pi-users"></span>about</a>
          </li>
          <li>
            <a href="/#contact"><span class="pi pi-envelope"></span>contact</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
</template>
<style lang="postcss" scoped>
.container {
  padding: 0 var(--homepage-padding) 0 var(--homepage-padding);
}
header a {
  text-decoration: none;
  color: rgba(var(--primary-color), 1);
  text-shadow: var(--logo-shadow);
}
header nav .logo {
  float: left;
}
header nav .logo {
  font-size: 0px;
}
header nav .logo span:nth-child(1) {
  font-size: var(--logo-adam);
}
header nav .logo span:nth-child(3) {
  font-size: var(--logo-sochorec);
}
header nav .logo:after {
  content: "";
  display: table;
  clear: both;
}
.menu-left a {
  display: inline-block;
  position: relative;
  padding-bottom: 0;
  -webkit-transition: color 0.35s ease;
  -o-transition: color 0.35s ease;
  transition: color 0.35s ease;
}
.menu-left a:before {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  bottom: 0;
  height: 2px;
  width: 0;
  -webkit-transition: width 0s ease, background 0.35s ease;
  -o-transition: width 0s ease, background 0.35s ease;
  transition: width 0s ease, background 0.35s ease;
}
.menu-left a:after {
  content: "";
  display: block;
  position: absolute;
  right: 0;
  bottom: 0;
  height: 2px;
  width: 0;
  background: rgb(var(--secondary-color));
  -webkit-transition: width 0.35s ease;
  -o-transition: width 0.35s ease;
  transition: width 0.35s ease;
}
.menu-left a:hover:before {
  width: 100%;
  background: rgb(var(--secondary-color));
  -webkit-transition: width 0.35s ease;
  -o-transition: width 0.35s ease;
  transition: width 0.35s ease;
}
.menu-left a:hover:after {
  width: 100%;
  background: 0 0;
  -webkit-transition: all 0s ease;
  -o-transition: all 0s ease;
  transition: all 0s ease;
}
header nav ul li a {
  display: block;
}
header {
  font-family: var(--logo-font);
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 9999;
  will-change: transform;
  transition: background 0.3s,
    -webkit-transform 0.5s cubic-bezier(0.694, 0.048, 0.335, 1);
  -webkit-transition: background 0.3s,
    -webkit-transform 0.5s cubic-bezier(0.694, 0.048, 0.335, 1);
  -o-transition: transform 0.5s cubic-bezier(0.694, 0.048, 0.335, 1),
    background 0.3s;
  transition: transform 0.5s cubic-bezier(0.694, 0.048, 0.335, 1),
    background 0.3s;
  transition: transform 0.5s cubic-bezier(0.694, 0.048, 0.335, 1),
    background 0.3s, -webkit-transform 0.5s cubic-bezier(0.694, 0.048, 0.335, 1);
  transition: transform 0.5s cubic-bezier(0.694, 0.048, 0.335, 1),
    background 0.3s, -webkit-transform 0.5s cubic-bezier(0.694, 0.048, 0.335, 1);
  -ms-transform: translateY(0);
  transform: translateY(0);
  -webkit-transform: translateY(0);
}

header nav ul {
  list-style: none;
  padding-left: 0;
  margin: 0;
}
header nav ul li {
  float: none;
  margin-left: 0;
}
.hide-nav {
  -ms-transform: translateY(-120%);
  transform: translateY(-120%);
  -webkit-transform: translateY(-120%);
}
nav a span:nth-child(1) {
  font-size: var(--logo-adam);
}
nav a span:nth-child(3) {
  font-size: var(--logo-sochorec);
}
ul.menu-left {
  display: block;
  max-height: 0;
  overflow: hidden;
  -webkit-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
  z-index: 10;
  font-size: 11px;
}
.pi {
  margin-right: var(--grid-gap-1);
  font-size: 13px !important;
}
ul.menu-left:before {
  content: "";
  display: table;
  clear: both;
}
ul.menu-left.collapse {
  max-height: 25em !important;
}
.hamburger {
  display: block;
  border-radius: 5px;
  background-color: transparent;
  float: right;
  height: 38px;
  width: 38px;
  cursor: pointer;
  padding: 8px 8px;
}
.hamburger.open span:first-child {
  -webkit-transform: rotate(45deg) translate(4.4px, 4.4px);
  -ms-transform: rotate(45deg) translate(4.4px, 4.4px);
  transform: rotate(45deg) translate(4.4px, 4.4px);
}
.hamburger span:nth-child(2) {
  opacity: 0;
}
.hamburger.open span:last-child {
  -webkit-transform: rotate(-45deg) translate(4.4px, -4.4px);
  -ms-transform: rotate(-45deg) translate(4.4px, -4.4px);
  transform: rotate(-45deg) translate(4.4px, -4.4px);
}
.hamburger span {
  position: relative;
  display: block;
  height: 2px;
  width: 100%;
  background-color: rgba(var(--primary-color), 1);
  -webkit-transition: all 0.25s;
  -o-transition: all 0.25s;
  transition: all 0.25s;
  margin-top: 4px;
  -webkit-box-shadow: var(--logo-shadow);
  box-shadow: var(--logo-shadow);
}
@media only screen and (min-width: 538px) {
  header nav ul li a {
    display: block;
  }
}
@media only screen and (max-width: 667px) {
  header .container {
    max-width: 100%;
    margin-left: auto;
    margin-right: auto;
  }
  header .container:after {
    content: " ";
    display: block;
    clear: both;
  }
}
@media only screen and (max-width: 768px) {
  header ul {
    clear: both;
  }
  header ul li:first-child {
    padding: 3em 0 1em 0;
  }
  header ul li {
    padding: 1em 0;
  }
  header nav .logo {
    padding-top: 6px;
  }
}
@media only screen and (min-width: 768px) {
  header ul.menu-left {
    display: block !important;
    float: right;
    max-height: none;
    padding-top: 9px;
  }
  header nav ul li {
    float: left;
    margin-left: 3rem;
  }
  header .hamburger {
    display: none;
  }
}
@media only screen and (min-width: 947px) {
  header .container {
    max-width: 100%;
  }
  header .container:after {
    content: " ";
    display: block;
    clear: both;
  }
}
</style>
