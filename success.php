<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'head.php';
    ?>
    <title>Success | Adam Sochorec</title>
  </head>
  <body id="success" class="noindex">
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
    <!-- HEADER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'nav-bar.php';
    ?>
    <!-- HEADER END -->
    <main>
      <article class="wrapper-narrow flex-center">
        <div class="pathname-container"></div>
        <div class="pathname-container"></div>

        <div class="lottie">
          <dotlottie-player
            class="reveal"
            src="/assets/lottie/success.lottie"
            background="transparent"
            speed="1"
            autoplay
          ></dotlottie-player>
        </div>
        <br />

        <h1 class="reveal">Form submitted<br />successfully!</h1>
        <h2 class="reveal">
          <a href="/">Return to the homepage &#8250;</a>
        </h2>
      </article>
    </main>
    <!-- LOTTIE PLAYER SCRIPT START -->
    <script
      defer
      type="text/javascript"
      src="https://unpkg.com/@dotlottie/player-component@1.0.0/dist/dotlottie-player.js"
    ></script>
    <!-- LOTTIE PLAYER SCRIPT END -->
    <!-- FOOTER START -->
    <?php
   $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
   include $IPATH . 'footer.php';
   ?>
    <!-- FOOTER END -->
  </body>
</html>
