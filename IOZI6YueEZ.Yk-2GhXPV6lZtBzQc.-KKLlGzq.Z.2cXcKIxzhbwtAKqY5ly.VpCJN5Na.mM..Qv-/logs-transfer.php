<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>    <title>File Transfer</title>

    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>
  <body id="transfer">
    <!-- HEADER START -->
    <?php
     $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
     include $IPATH . 'global-nav-bar.php';
     ?>
    <!-- HEADER END -->
    <main>
      <article class="wrapper-narrow flex-center">
        <div class="pathname-container">
          <i
            ><span class="pathname"><a href="/"></a> / </span>
            <span class="pathname transfer"><a href="/IOZI6YueEZ.Yk-2GhXPV6lZtBzQc.-KKLlGzq.Z.2cXcKIxzhbwtAKqY5ly.VpCJN5Na.mM..Qv-/transfer"></a> / </span>
            <span class="pathname-current"> Logs</span
          ></i>
        </div>
        <br />
        <h1> Logs</h1>

        <dotlottie-player
          src="/img/lottie/track.lottie"
          background="transparent"
          speed="1"
          autoplay
          loop
        ></dotlottie-player>
          <ol>
            <?php
            $logFile = 'logs-transfer.txt';
            $logs = file($logFile);
            foreach ($logs as $log) {
              echo "<li>$log</li>";
            }
            ?>
          </ol>
        <hr />
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
