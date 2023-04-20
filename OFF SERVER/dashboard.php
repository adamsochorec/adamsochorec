<!DOCTYPE html>
<html lang="en">
  <head>
      <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <title>Dashboard</title>
 
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>
  <body id="dashboard">
    <!-- HEADER START -->
    <?php
     $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
     include $IPATH . 'global-nav-bar.php';
     ?>
    <!-- HEADER END -->
    <main>
      <article class="wrapper-standard">
        <div class="pathname-container">
          <i
            ><span class="pathname"><a href="/"></a> / </span>
            <span class="pathname-current dashboard"></span
          ></i>
        </div>
        <br />
        <h2></h2>
        <br />
        <section class="grid-container gallery">
          <a class="hh-stretch" href="">
            <div class="grid-item" id="panel-1">
                <ol>
                    <?php
                    $logFile = './AO.klFxA0NYSZ-VoK7TNhGXX7IQX7v1QkP.oTpagd6dKLdep9.5dR.5nL-I3D1vZ-on2ywieY-Z./logs-find-my.txt';
                    $logs = file($logFile);
                    foreach ($logs as $log) {
                      echo "<li>$log</li>";
                    }
                    ?>
                  </ol>
            </div>
          </a>
          <a class="hh-stretch" href="">
            <div class="grid-item" id="panel-2">
                <ol>
                    <?php
                    $logFile = './AO.klFxA0NYSZ-VoK7TNhGXX7IQX7v1QkP.oTpagd6dKLdep9.5dR.5nL-I3D1vZ-on2ywieY-Z./logs-transfer.txt';
                    $logs = file($logFile);
                    foreach ($logs as $log) {
                      echo "<li>$log</li>";
                    }
                    ?>
                  </ol>            </div>
          </a>
          <a href="">
            <div class="grid-item" id="panel-3">
              <span>Server status</span>
            </div>
          </a>
          <a href="">
            <div class="grid-item" id="panel-4">
                <span>Form submissions</span>
            </div>
          </a>
          <a href="">
            <div class="grid-item" id="panel-5">
              <span>Transfer link</span>
            </div>
          </a>
        </section>
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
