<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>ØkoNord</title>
  </head>
  <body id="homepage">
    <!-- HEADER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <!-- HEADER END -->
    <main>
      <article id="visuals">
        <div class="intro-section-wrapper">
          <div class="intro-section flex-center">
            <div class="intro-subsection">
              <div></div>
            </div>
          </div>
        </div>

      <!-- PRODUCT START -->
      <div id="products" class="flex-container">
        <a href="">
          <div id="ecopipe" class="flex-item"><span>Eco Pipe</span></div>
        </a>
        <a href="">
          <div class="flex-item"><span>Eco Pipe</span></div>
        </a>
      </div>
      <?php
      $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
      include $IPATH . 'global-totop.php';
      ?>
      <!-- PRODUCT END -->
    </main>
    <!-- FOOTER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
    <!-- FOOTER END -->
  </body>
</html>
