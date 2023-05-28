<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <title>File Transfer | Adam Sochorec</title>

    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>
  <body id="transfer" class="noindex">
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
        $allowed_ids = array("fileees.zip", "anothershit.zip", "Project-management-survey.zip", "presentations.zip", "previews.zip", "Intenrship Report.zip");
        $id = $_GET["id"];
        
        if (!in_array($id, $allowed_ids)) {
            http_response_code(404);
            include('404.php');
            exit;
        }
        ?>
        <dotlottie-player
          src="/assets/lottie/track.lottie"
          background="transparent"
          speed="1"
          autoplay
          loop
        ></dotlottie-player>
        <?php
        $file_path = $id; // replace $id with the actual value of your variable

        if (file_exists($file_path)) {
            $file_size = filesize($file_path);
        
            // convert to KB, MB, GB, or TB as appropriate
            if ($file_size >= 1099511627776) { $file_size = sprintf('%.2f TB',
        $file_size / 1099511627776); } elseif ($file_size >= 1073741824) {
        $file_size = sprintf('%.1f GB', $file_size / 1073741824); } elseif
        ($file_size >= 1048576) { $file_size = sprintf('%.0f MB', $file_size /
        1048576); } elseif ($file_size >= 1024) { $file_size = sprintf('%.0f
        KB', $file_size / 1024); } else { $file_size = sprintf('%d bytes',
        $file_size); } } else { echo 'File not found'; } ?>
        <h1>File Transfer</h1>
        <hr />
        <h5>
          " <a><?php echo $id; ?></a> "
        </h5>
        <br />
        <h5><?php echo $file_size ?></h5>

        <br />
        <div class="btn-area flex-center">
          <a
            id="btn"
            class="submit-btn"
            href="<?php echo $id; ?>"
            target="_blank"
            rel="noopener noreferrer"
          >
            Download
          </a>
          <div class="btn-shadow"></div>
        </div>
        <?php
        $logFile = 'transfer.txt';
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
        
        // Append the log to the downloads.txt file
        $log = "File '$id' was downloaded at $time from I.P. $location.\n";
        file_put_contents($logFile, $log, FILE_APPEND);
        ?>

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
