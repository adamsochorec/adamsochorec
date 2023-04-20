<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <title>Nicolai Institute | Adam Sochorec</title>

    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>
  <body id="nicolai" class="blog-ite">
    <!-- HEADER START -->
    <?php
     $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
     include $IPATH . 'global-nav-bar.php';
     ?>
    <!-- HEADER END -->
    <main>
      <article class="wrapper-wide">
        <div class="pathname-container">
          <i
            ><span class="pathname"><a href="/"></a> / </span>
            <span class="pathname maps"><a href="/#maps"></a> / </span>
            <span class="pathname-current">Nicolai Institute</span></i
          >
        </div>
        <br />
        <h2>Nicolai Institute</h2>
        <br /><iframe
          class="maps"
          src="https://api.mapbox.com/styles/v1/neseranavalto/clgidibag005y01qu2tyx8ewo.html?title=false&access_token=pk.eyJ1IjoibmVzZXJhbmF2YWx0byIsImEiOiJjbGdoejE1ejUwcHp0M2JsYmVoMmRhYmZjIn0.2nDIjVepNrxLI10DrjI7LQ&zoomwheel=false#18.14/55.491024/9.470665"
          title="Satellite Streets"
          style="border: none"
        ></iframe>
      </article>
    </main>
    <script
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
