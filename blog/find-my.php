
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Find My | Adam Sochorec</title>
  </head>

  <body id="find-my" class="blog-item">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
      <article class="wrapper-standard">
        <div class="pathname-container">
          <i
            ><span class="pathname"><a href="/"></a> / </span>
            <span class="pathname"><a href="/#blog"></a> / house hunting</span>
          </i>
        </div>
        <br />
        <h1></h1>
        <br />
        <p class="pathname">
          <svg
            id="date"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512"
          >
            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path
              d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"
            />
          </svg>
          &nbsp; May 2023
        </p>
        <div class="img">
          <img src="/img/22100983718847.jpg" alt="" />
          <p><i class="note">Description</i></p>
        </div>
        <p class="dropcap">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni alias
          dolores blanditiis delectus cum, dolore perferendis enim ipsum rerum.
          Commodi harum quidem ipsum, ea delectus soluta ratione molestias animi
          eos.
        </p>
        <hr>
        <?php
$allowed_ids = array("bike", "drone", "SSD", "leatherman", "MacBook", "mouse", "AirPods", "keys", "wallet", "bottle", "helmet", "iPhone");
$id = $_GET["id"];
?>

        <h3> <?php echo $id; ?></h3>
        
        <hr>
       <div class="scrollable-wrapper">
         <div class="scrollable">
            <ol>
                <?php
                $logFile = '../find-my.txt'; 
                try {
                  $logs = file($logFile);
                  foreach ($logs as $log) {
                    echo "<li>$log</li>";
                  }
                } catch (Exception $e) {
                  echo "Error: " . $e->getMessage();
                }
              ?>
              </ol>
        </div>
       </div>
       <br><p id="geolocation"></p>
       <br>
       <div class="btn-area flex-center">
        <button id="btn" class="submit-btn" onclick="getLocation()">
          Submit location
        </button>
        <div class="btn-shadow"></div>
      </div>
        <hr />
        <h2>Further reading</h2>
        <br />
        <div class="grid-container gallery">
          <a href="/blog/blavand">
            <div class="grid-item" id="blavand">
              <div class="blur">
                <span></span>
              </div>
            </div>
          </a>
          <a href="/blog/västerbotten">
            <div class="grid-item" id="västerbotten">
              <div class="blur">
                <span></span>
              </div>
            </div>
          </a>

          <a class="gradient" href="/blog/cybersecurity">
            <div class="grid-item" id="cybersecurity">
              <span></span>
            </div>
          </a>
        </div>
        <?php
          $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
          include $IPATH . 'global-totop.php';
          ?>
      </article>
    </main>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
   
$logFile = '../find-my.txt';
$id = $_GET['id'];
date_default_timezone_set('Europe/Prague');

$time = date('Y-m-d H:i:s');

// Get the user's geolocation
$location = "";
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $location = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $location = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $location = $_SERVER['REMOTE_ADDR'];
}


    if (!in_array($id, $allowed_ids)) {
        http_response_code(404);
        include('404.php');
        exit;
    }
 
// Append the log to the logs.php file
$log = "QR code '$id' was scanned at $time from I.P. $location.\n";
file_put_contents($logFile, $log . file_get_contents($logFile)); ?>
  </body>
</html>
