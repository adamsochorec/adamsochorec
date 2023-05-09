<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'blog-desc.php';
    ?>
    <meta
      name="keywords"
      content="adamsochorec, adam sochorec, @adamsochorec, bike trip, Flensburg, Skagen, west coast,
    Jutland, Vestkystruten 1, Danish national cycle route 1, public
    shelters, North Sea, fjords, coastal views, beauty, YouTube, travel vlogs"
    />
    <title>Vestkystruten | Adam Sochorec</title>
    <!-- Leaflet script start -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
      integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
      crossorigin=""
    />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script
      src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
      integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
      crossorigin=""
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet-gpx/gpx.min.js"></script>

    <!-- Leaflet script end -->
  </head>

  <body id="vestkystruten" class="blog-item">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
      <article class="wrapper-standard">
        <div class="pathname-container">
          <i
            ><span class="pathname"><a href="/"></a> / </span>
            <span class="pathname"><a href="/#blog"></a> / </span>
            <span class="pathname-current"></span
          ></i>
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
              d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"
            />
          </svg>
          August 2022
        </p>
        <iframe
          class="vimeo"
          src="https://player.vimeo.com/video/"
          allow="autoplay; fullscreen; picture-in-picture"
          allowfullscreen
          ><p class="alt-alt">
            Link to a YoutTube blog from our journey made by Marcel.
          </p>
        </iframe>

        <p class="dropcap">
          Recently, me and my friend
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://www.instagram.com/marcelhajik/"
            >Marcel</a
          >
          had the opportunity to take a bike trip from German
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Flensburg"
            >Flensburg</a
          >
          to Danish
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Skagen"
            >Skagen</a
          >, along the west coast of the peninsula
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Jutland"
            >Jutland</a
          >. It was an epic journey that we'll never forget.
        </p>

        <p>
          Most of our time was spent biking along the Danish national cycle
          route 1, also called
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Danish_National_Cycle_Route_1"
          >
            Vestkystruten</a
          >. We biked <b>over 570 km in 10 days</b>, taking in the stunning
          views and experiencing all that Denmark had to offer. Along the way,
          we slept in the forest and in
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://udinaturen.dk/map-page"
            >public shelters</a
          >, observing the gradual change of the countryside as we continued
          north. We also took the opportunity to swim in the cold
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/North_Sea"
            >North Sea</a
          >
          and inland fjords. Our goal was to get to know Denmark as much as
          possible, and we had the time of our lives exploring the beautiful
          landscape and meeting friendly locals.
        </p>
        <div id="map" style="border-radius: 6px">
          <p class="alt-alt">??</p>
        </div>

        <p>
          From breathtaking coastal views to charming small towns, this trip had
          it all. And the destination, Skagen, was a unique place where the
          North Sea and
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Baltic_Sea"
            >Baltic Sea</a
          >
          meet together. We were constantly amazed by the beauty of the country
          and the kindness of the people we met along the way. Overall, it was a
          truly unforgettable experience and one that we highly recommend to
          anyone looking to explore Denmark. If you're interested in learning
          more about our journey, be sure to check out
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://www.youtube.com/watch?v=3go3v59pfEo"
            >our video on YouTube</a
          >. And don't forget to give it a like and subscribe
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://www.youtube.com/@marcelhajik"
            >Marcel's channel</a
          >
          for more travel vlogs!
        </p>
        <hr />
        <h2>Further reading</h2>
        <br />
        <div class="grid-container gallery">
          <a class="hh-stretch" href="/blog/västerbotten">
            <div class="grid-item" id="västerbotten">
              <span></span>
            </div>
          </a>
          <a href="/blog/blavand">
            <div class="grid-item" id="blavand">
              <span></span>
            </div>
          </a>
          <a href="/blog/house-hunting">
            <div class="grid-item" id="house-hunting">
              <span></span>
            </div>
          </a>
          <a href="/blog/aland">
            <div class="grid-item" id="aland">
              <span></span>
            </div>
          </a>
          <a class="hh-stretch" href="/blog/cybersecurity">
            <div class="grid-item reveal" id="cybersecurity">
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
    <script type="text/javascript">
      const map = L.map("map");
      map.attributionControl.setPrefix("");
      L.tileLayer(
        "https://{s}.tile.thunderforest.com/landscape/{z}/{x}/{y}{r}.png?apikey=7c352c8ff1244dd8b732e349e0b0fe8d",
        {
          attribution:
            'Maps &copy; <a href="https://www.thunderforest.com">Thunderforest</a>, Data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap contributors</a>',
          maxZoom: 22,
        }
      ).addTo(map);

      map.setView([55.95627, 10.07469], 6);

      // marker
      L.marker([63.825, 20.27965]).addTo(map);
      var polygon = L.polygon([
        [54.78138, 9.43334],
        [57.7226, 10.58348],
      ]).addTo(map);
    </script>

    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
