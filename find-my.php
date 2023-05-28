<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <title>Find My | Adam Sochorec</title>

    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>
  <body id="find-my" class="noindex">
    <!-- HEADER START -->
    <?php
     $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
     include $IPATH . 'global-nav-bar.php';
     ?>
    <!-- HEADER END -->
    <main>
      <article class="wrapper-narrow flex-center">
        <br />
        <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
        include $IPATH . 'find-my-body.php'; ?>
        <dotlottie-player
          src="/assets/lottie/track.lottie"
          background="transparent"
          speed="1"
          autoplay
          loop
        ></dotlottie-player>
        <h1></h1>
        <hr />
        <h2>
          It looks like you have found my
          <a> <?php echo $id; ?></a>, please <a href="/#contact">write me</a> or
          give me a call at <a href="tel:+4550104776">+4550104776</a>!
          <br /><br />
          Thanks!
        </h2>

        <hr />
      </article>
    </main>
    <script type="text/javascript">
      const x = document.getElementById("demo");
      function getLocation() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition);
        } else {
          x.innerHTML = "Geolocation is not supported by this browser.";
        }
      }
      function showPosition(position) {
        x.innerHTML =
          "Latitude: " +
          position.coords.latitude +
          "<br />Longitude: " +
          position.coords.longitude;
      }
    </script>
    <script
      type="text/javascript"
      src="https://unpkg.com/@dotlottie/player-component@1.0.0/dist/dotlottie-player.js"
      defer
    ></script>
    <!-- FOOTER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>

    <!-- FOOTER END -->
  </body>
</html>
