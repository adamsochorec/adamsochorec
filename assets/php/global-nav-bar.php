<header>
  <div class="blur">
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
          <!--  <li><a href="/prints">store</a></li>-->
          <li><a href="/#blog">blog</a></li>
          <li><a href="/#web-dev">web dev</a></li>
          <li><a href="/#about">about</a></li>
          <li><a href="/#contact">contact</a></li>
          <li>
            <a href="/store/checkout"
              ><i class="fa-solid fa-bag-shopping fa-xl"></i
            ></a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <?php
  $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
  include $IPATH . 'store-nav-bar.php';
  ?>
</header>
<!-- LOADER START -->
<aside class="blur loader-container">
  <div class="loader"></div>
</aside>

<!-- LOADER END -->
