<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Recent front-end development projects" />
    <meta
    name="keywords"
    content="Portfolio, Works, Photography, Photos, 3D, 3D scans, Animations, Art, Web Design, Adam Sochorec, Rostislav Sochorec, Responsive design, Homepage, Landing page, Instagram, Sketchfab, Flickr, @adamsochorec, Denmark, Kolding, Czechia, Czech Republic, Prague, Česká Republika, Česko, Praha, Fine Art, Fotografie, Umění, Studio photography, Gabriela Sochorcová, Sofie Sochorcová, Petra Sochorcová, Magdalena Sochorcová"
  />    <title>Web-Dev | Adam Sochorec</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
  </head>

  <body >
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main id="web-dev">
      <article class="wrapper-standard">
        <div class="pathname-container">
          <i
            ><span class="pathname"><a href="/works"></a> / </span>
            <span class="pathname-current web"></span
          ></i>
        </div>
        <br />
        <h1></h1>
        <br />
        <section class="grid-container gallery">
            <a class="hh-stretch" href="/web-dev/cybersecurity">
                <div class="grid-item" id="cybersecurity">
                  <div class="blur">
                    <span></span>
                  </div>
                </div>
              </a>
          <a class="hh-stretch" target="_blank" rel="noopener noreferrer" href="/web-dev/zebra-design/zebra-design">
            <div class="grid-item" id="zebra-design">
              <div class="blur">
                <span>Zebra-design</span>
              </div>
            </div>
          </a>
                <a class="hh-stretch" target="_blank" rel="noopener noreferrer" href="/web-dev/memos/memos">
                  <div class="grid-item" id="memos">
                    <div class="blur">
                      <span>Memos</span>
                    </div>
                  </div>
                </a>
                <section>
        </section>
      </article>
    </main>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
