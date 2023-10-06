<?php include "assets/php/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'leaflet-head.php';
    ?>
    <meta name="description" content="<?php echo $blog['meta_desc'] ?>" />
    <meta name="keywords" content="<?php echo $blog['meta_keywords'] ?>" />
    <title><?php echo $blog['title'] ?> | Adam Sochorec</title>
  </head>

  <body id="<?php echo $blog['title'] ?>" class="blog-item">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
      <?php echo $blog['intro-section'] ?>
      <article class="wrapper-wide">
        <h1><?php echo $blog['title'] ?></h1>
        <div class="grid-container seventy-thirty">
          <div class="grid-item">
            <div class="pathname-container">
              <p>
                <span class="pathname"><a href="/"></a> &#8250; </span>
                <span class="pathname"
                  ><a href="/#blog"></a> &#8250;
                  <?php echo $blog['title']?></span
                >
              </p>
            </div>
          </div>
          <div class="grid-item">
            <p>
              <span class="pathname">
                <svg
                  id="date"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                >
                  <path
                    d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"
                  />
                </svg>
                &nbsp;
                <?php echo $blog['date'] ?></span
              >
            </p>
          </div>
        </div>
        <?php echo $blog['content'] ?>
        <hr class="reveal" />
        <h2 class="reveal">Further Reading</h2>
        <br />
        <div class="grid-container gallery reveal">
          <a href="/blog/vasterbotten">
            <div class="grid-item" id="vasterbotten">
              <div class="blur">
                <span><br />🇸🇪</span>
              </div>
            </div>
          </a>
          <a href="/blog/vestkystruten">
            <div class="grid-item" id="vestkystruten">
              <div class="blur">
                <span><br />🇩🇰</span>
              </div>
            </div>
          </a>
          <a href="/blog/blavand">
            <div class="grid-item" id="blavand">
              <div class="blur">
                <span><br />🇩🇰</span>
              </div>
            </div>
          </a>
        </div>
      </article>
    </main>
    <?php echo $blog['extra-footer'] ?>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
    <script type="text/javascript" src="/assets/map.js"></script>
  </body>
</html>
