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
    <title>Vestkystruten 🇩🇰 | Adam Sochorec</title>
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
            <span class="pathname"><a href="/#blog"></a> / vestkystruten</span>
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
          &nbsp; August 2022
        </p>
        <iframe
          class="vimeo"
          src="https://player.vimeo.com/video/825793407?h=9c6c7c993e"
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
        <div id="map" style="border-radius: 6px;">
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
          and the kindness of the people we met along the way. <br />Overall, it
          was a truly unforgettable experience and one that we highly recommend
          to anyone looking to explore Denmark. <br />
          <br />Consider also giving thumbs up to the video on
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://www.youtube.com/watch?v=3go3v59pfEo"
            >our video on YouTube</a
          >
          and
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
          <a class="hh-stretch gradient" href="/blog/cybersecurity">
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
    ?>
    <script type="text/javascript">
      const map = L.map("map");
      map.attributionControl.setPrefix("");
      L.tileLayer(
        "https://{s}.tile.thunderforest.com/outdoors/{z}/{x}/{y}{r}.png?apikey=7c352c8ff1244dd8b732e349e0b0fe8d",
        {
          attribution:
            'Maps &copy; <a href="https://www.thunderforest.com">Thunderforest</a>, Data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
          maxZoom: 22,
        }
      ).addTo(map);

      map.setView([55.5361, 10.1124], 6);

      // ride
      const route = L.polyline(
        [
          [54.7938, 9.4403], // Flensburg
          [54.9397, 8.8633], // Tønder
          [55.2167, 8.8167], // Skærbæk
          [55.3281, 8.7625], // Ribe
          [55.4858, 8.6992], // Bramming
          [55.4667, 8.4514], // Esbjerg
          [55.6215, 8.4805], // Varde
          [56.0078, 8.1246], // Hvide Sand
          [56.1193, 8.1167], // Søndervig
          [56.0886, 8.2584], // Ringkøbning
          [56.3023, 8.6358], // Høver
          [56.3608, 8.6161], // Holstebro
          [56.4842, 8.5775], // Struer
          [56.7355, 8.2632], // Hvidbjerg
          [56.7789, 8.2624], // Hurup
          [56.9597, 8.7023], // Thisted
          [57.1591, 9.0239], // Bulbjerg
          [57.1354, 9.3549], // Hjordal
          [57.2056, 9.6453], // Pandrup
          [57.3665, 9.6693], // Løkken
          [57.3729, 9.7186], // Lønstrup
          [57.4567, 9.9933], // Hjørring
          [57.5275, 9.8583], // Ålbæk
          [57.7253, 10.583], // Skagen
          [57.7442, 10.6444], // Grenen
        ],
        {
          color: "rgb(0, 126, 227)",
        }
      ).addTo(map);
      route.bindPopup(
        "Distance: <b> 575.30 km</b> <br>Avg speed: <b>21.6 km</b><br>Max speed: <b>48.4 km</b>"
      );
    </script>
  </body>
</html>
