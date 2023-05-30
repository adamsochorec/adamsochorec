<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'leaflet-head.php';
    ?>
    <meta
      name="description"
      content="Join us on an unforgettable bike trip
    from Flensburg, Germany, to Skagen, Denmark, journeying along the stunning
    west coast of the Jutland peninsula. Explore Denmark's beauty, meet friendly
    locals, and experience a blend of breathtaking coastal views and charming
    small towns."
    />
    <meta
      name="keywords"
      content="Bike Trip, Flensburg, Skagen, West Coast,
    Peninsula Jutland, Danish National Cycle Route 1, Vestkystruten, Biking,
    Denmark, Forest, Public Shelters, North Sea, Inland Fjords, Landscape,
    Locals, Interactive Map, Coastal Views, Small Towns, North Sea, Baltic Sea,
    Travel Vlogs, Marcel's Channel, YouTube Video."
    />
    <title>Samsø 🇩🇰 | Adam Sochorec</title>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>

  <body id="samso" class="blog-item">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
      <article class="wrapper-standard">
        <div class="pathname-container">
          <i
            ><span class="pathname"><a href="/"></a> / </span>
            <span class="pathname"><a href="/#blog"></a> / samsø</span>
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
          &nbsp; February 2023
        </p>
        <iframe
          class="vimeo"
          src="https://player.vimeo.com/video/818670329?h=1decec98cc"
          allow="autoplay; fullscreen; picture-in-picture"
          allowfullscreen
          ><p class="alt-alt">Link to a short film from our journey.</p>
        </iframe>

        <p class="dropcap">
          Recently, me and my friend
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://www.instagram.com/marcelhajik/"
            >Marcel</a
          >
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis,
          voluptas eaque aliquam autem hic repudiandae a voluptate id! Fugit
          numquam explicabo obcaecati alias incidunt, mollitia fugiat cum.
          Necessitatibus, exercitationem quod.
        </p>
        <div class="map-margin">
          <div id="map" style="border-radius: 6px">
            <p class="alt-alt">
              Interactive map of a danish island Samsø in Kattegat region of a
              Baltic sea with a line depicting our route.
            </p>
          </div>
          <p>
            <i class="note"
              >Zoom in and click on the route to see more details.</i
            >
          </p>
        </div>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur
          fugiat aliquid, odio commodi deleniti repellat saepe esse labore
          maxime laboriosam dignissimos pariatur suscipit ullam facere
          voluptatum eveniet provident quis est!
        </p>
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

          <a href="/blog/vestkystruten">
            <div class="grid-item" id="vestkystruten">
              <div class="blur">
                <span></span>
              </div>
            </div>
          </a>
          <a href="/blog/västerbotten">
            <div class="grid-item" id="västerbotten">
              <div class="blur">
                <span></span>
              </div>
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
    ?>
    <script type="text/javascript" src="/assets/samso.js"></script>
  </body>
</html>
