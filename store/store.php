<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Store | Adam Sochorec</title>
  </head>
  <meta name="robots" content="noindex" />
  <meta name="googlebot" content="noindex" />
  <body id="store-index" class="store">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
      <article class="wrapper-wide">
        <div class="pathname-container"></div>
        <div class="grid-container fifty-fifty">
          <div class="grid-item">
            <h1 class="reveal">Recently published</h1>
            <p class="reveal">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui
              voluptatem blanditiis expedita omnis corrupti id rem perspiciatis
              possimus, cumque cum optio ut illo incidunt laborum ad magnam est,
              architecto dignissimos.
            </p>
            <a href="./product" class="cta flex-center hideCTA-max reveal"
              >Learn more
            </a>
          </div>
          <div class="grid-item v-stretch reveal">
            <img src="/img/2021-04-13-00596.jpg" />
            <a href="./product" class="cta flex-center hideCTA-min reveal"
              >Learn more
            </a>
          </div>
        </div>
        <hr class="reveal" />
        <!-- PRODUCTS START -->
        <section class="product-grid">
          <!-- PRODUCT 1 START -->
          <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'product-component.php';
    ?>
          <!-- PRODUCT 1 END -->
          <!-- PRODUCT 2 START -->
          <?php
          $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
          include $IPATH . 'product-component.php';
          ?>
          <!-- PRODUCT 2 END -->
          <!-- PRODUCT 3 START -->
          <?php
          $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
          include $IPATH . 'product-component.php';
          ?>
          <!-- PRODUCT 3 END -->
          <!-- PRODUCT 4 START -->
          <?php
          $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
          include $IPATH . 'product-component.php';
          ?>
          <!-- PRODUCT 4 END -->
          <!-- PRODUCT 5 START -->
          <?php
          $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
          include $IPATH . 'product-component.php';
          ?>
          <!-- PRODUCT 5 END -->
          <!-- PRODUCT 6 START -->
          <?php
          $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
          include $IPATH . 'product-component.php';
          ?>
          <!-- PRODUCT 6 END -->
          <!-- PRODUCT 7 START -->
        </section>
      </article>
      <!-- PRODUCTS END -->
      <!-- ABOUT START -->
      <hr class="semi" />
      <article class="wrapper-standard">
        <hr class="reveal" />
        <h1 class="reveal">ABOUT</h1>

        <p class="reveal">
          Greetings from Denmark! As a Czech-born multimedia design student 🇨🇿,
          I'm bringing the Slavic spirit to my new venture,
          <a
            href="https://www.slavicmedia.dk"
            target="_blank"
            rel="noopener noreferrer"
            >Slavic Media</a
          >
          – small but mighty!
        </p>
        <p class="reveal">
          I'm a Canon-wielding photography enthusiast with a side of iPhone, and
          a website wizard, thanks to my multimedia studies on
          <a
            href="https://www.iba.dk/fuldtidsuddannelser"
            target="_blank"
            rel="noopener noreferrer"
            >Erhversakademi Kolding</a
          >.
        </p>
        <p class="reveal">
          Former
          <a
            href="https://www.flickr.com/photos/141401020@N03/"
            target="_blank"
            rel="noopener noreferrer"
            >LEGO architect</a
          >, current purveyor of digital aesthetics and sarcasm.
        </p>
        <p class="reveal">PS: No cookies — just creativity!</p>
        <hr class="reveal" />
      </article>
      <!-- CONTACT FORM END -->
    </main>
    <?php echo $blog['extra-footer'] ?>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
