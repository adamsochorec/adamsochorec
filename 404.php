<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <title>Page Not Found | Adam Sochorec</title>

    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>

  <body id="error" class="noindex">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
      <article class="wrapper-narrow flex-center">
        <div class="pathname-container"></div>
        <div class="lottie">
          <dotlottie-player
            src="/assets/lottie/error3.1.lottie"
            background="transparent"
            speed="0.7"
            loop
            autoplay
          ></dotlottie-player>
        </div>
        <h1>The page you’re looking<br />for can’t be found.</h1>
        <h2>
          <a href="http://adamsochorec.com">Return to the homepage &#8250; </a>
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
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
