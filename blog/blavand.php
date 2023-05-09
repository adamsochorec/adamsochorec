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
      content="adamsochorec, adam sochorec, @adamsochorec, Blåvand, Blåvandshuk, Denmark, World War Two, bunker, graffiti, sandy beach, North Sea, lighthouse, Danish, German, summer houses, vacation homes, dunes, west coast, Germany, Baltic Sea, Skagen, Blåvandstrand, waves, WWII bunkers, Atlantic Wall, 3D modeling app, Polycam, 3D scanning, dune landscape, Bjarke Ingels's Tirpitz museum, Danish military, natural beauty, west coast, Star Wars, Scarif, amber, souvenir shop, elderly woman, cashier's desk, lucky, beach, walk, hike, explore, history, culture, outdoor, adventure, travel, tourism, vacation, holiday, getaway, escapade, journey, trip, excursion, outdoor living, outdoor lifestyle, outdoor recreation, outdoor exploration, outdoor adventure, outdoor adventure travel, outdoor excursion, outdoor journey, outdoor trip, outdoor vacation, outdoor getaway, outdoor holiday, outdoor escapade, outdoor adventure trip, outdoor adventure vacation, outdoor adventure holiday, outdoor adventure getaway, outdoor adventure escapade, outdoor adventure journey, outdoor adventure trip"
    />
    <title>Blåvand | Adam Sochorec</title>
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
  <body id="blavand" class="blog-item">
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
          April 2022
        </p>
        <div class="img">
          <img
            src="/img/22041518018133.jpg"
            alt="Photo of a giant World War Two bunker, covered by graffiti and being lifted from its base on the sandy beach. The North Sea and another bunker can be seen in the background.s"
          />
        </div>
        <p class="dropcap">
          On the 12th of April, I woke up early and packed a backpack with lunch
          before heading to the Kolding train station. I took a train to Oksbøl,
          which is located near Blåvand, the westernmost city in Denmark. My
          plan was to visit the
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Bl%C3%A5vand_Lighthouse"
            >Blåvand Lighthouse</a
          >
          local lighthouse, about a 35-minute walk from the bus station. At the
          time, Blåvand was hosting a festival and the main road through the
          city was congested with cars with Danish and German license plates.
        </p>
        <div id="map" style="border-radius: 6px">
          <p class="alt-alt">
            Satellite view of the westernmost protrusion of continental Denmark.
          </p>
        </div>
        <p>
          I stopped at a local fisherman's shop to buy a shrimp salad from a
          bakery and began walking. The town center of Blåvand is not large and
          it wasn't long before I reached an area with dozens of summer houses
          surrounded by pine trees. As I neared the shore, the vacation homes
          gave way to standalone houses built in the dunes a few meters from the
          sea.
        </p>
        <div class="img">
          <img
            src="/img/22041517878128.jpg"
            alt="Photo of dunes covered by heath, in the left top corner can be seen a family house built among the dunes that are as high as the house."
          />
        </div>
        <p>
          According to my navigation app, I had about 20 minutes left on my
          walk. As I walked along the
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/North_Sea"
            >North Sea</a
          >
          shore, I headed slightly north to follow the 400 km long west coast
          that borders Germany to the south and flows into the
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Baltic_Sea"
            >Baltic Sea</a
          >
          at
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Skagen"
            >Skagen</a
          >
          to the north. The westernmost point of Denmark,
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Bl%C3%A5vandshuk"
            >Blåvandshuk</a
          >, was filled with the sounds of waves crashing and seagulls
          screeching, as well as children playing on the WWII bunkers built as
          part of the
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Atlantic_Wall"
            >Atlantic Wall
          </a>
          during the war. I noticed that these bunkers were spaced about every
          few hundred meters along the entire west coast. However, "standing"
          might not be the right term to describe their condition. After more
          than half a century of neglect in the sand, these bunkers had sunken
          into the ground.
        </p>
        <div class="img">
          <img
            src="/img/22041517498117.jpg"
            alt="WWII bunker sinking into the sand beach with metal decorations of horsetail and neck, kids are playing around."
          />
        </div>
        <p>
          Their exteriors were often covered in graffiti and some even had
          additional metal constructions shaped like horses or giraffes. As I
          passed more and more bunkers, each with its own unique design and
          level of deterioration, I had the idea to scan them using a 3D
          modeling app called
          <a target="_blank" rel="noopener noreferrer" href="https://poly.cam"
            >Polycam</a
          >.
        </p>
        <iframe
          src="https://sketchfab.com/models/dd16bb89f8844760ab31396d495fd0ce/embed?autospin=1&ui_theme=dark&dnt=1"
          ><p class="alt-alt">3D scan of an Atlantic Wall bunker from WWII.</p>
        </iframe>

        <iframe
          src="https://sketchfab.com/models/37e4150677634273954aa6e69434ec15/embed?autospin=1&ui_theme=dark&dnt=1"
        >
        </iframe>
        <p>
          While the app's scanning and processing options are not the most
          advanced, it is user-friendly and convenient to use. There are also
          several ways to use the app for free, such as creating user profiles
          and sharing scanned content.
        </p>
        <div class="img">
          <img
            src="/img/22041518008132.jpg"
            alt="View upon a wide hilly heath with Blåvand lighthouse in the background."
          />
        </div>
        <p>
          When I reached the lighthouse, I bought a ticket to the top of the
          tower from a small house that was probably used to house the
          lighthouse crew. The view from the top was surreal, with dunes covered
          in grass of varying colors and narrow paths running through them. The
          landscape reminded me of the planet
          <a
            href="https://www.starwars.com/databank/scarif"
            target="_blank"
            rel="noopener noreferrer"
            >Scarif</a
          >
          from the Star Wars franchise.
        </p>
        <div class="img">
          <img
            src="/img/22041517628126.jpg"
            alt="Panorama photo of landscape view from the top of Blåvand lighthouse. Both on right and left can be seen North sea and beaches, in between are mostly dunes covered by rusty heath."
          />
        </div>
        <p>
          Later, as I browsed the souvenir shop, I saw a large selection of
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Amber"
            >amber</a
          >
          necklaces and jewelry. The elderly woman behind the cashier's desk
          told me that with a bit of luck, I might be able to find some amber on
          the beach. As I walked along the west coast, I noticed that the Danish
          military liked to train in the stratified terrain in the area
          surrounding Blåvand. The beach and sand fields to the northeast had
          several watchtowers, as well as other military facilities such as
          antennas and small storage units. Yellow signs warned of military
          areas and fencing marked off the training grounds.<br /><br />Overall,
          my visit to Blåvand was a unique and memorable experience. The WWII
          bunkers, now used as playgrounds by children, were a poignant reminder
          of the past, and the natural beauty of the west coast was
          breathtaking. In addition, I would also recommend visiting nearby
          Bjarke Ingels's
          <a
            href="https://en.wikipedia.org/wiki/Tirpitz_Museum_%28Denmark%29"
            target="_blank"
            rel="no opener no-referrer"
            >Tirpitz museum</a
          >.
        </p>
        <hr />
        <h2>Further reading</h2>
        <br />
        <div class="grid-container gallery">
          <a class="hh-stretch" href="/blog/house-hunting">
            <div class="grid-item" id="house-hunting">
              <span></span>
            </div>
          </a>
          <a href="/blog/aland">
            <div class="grid-item" id="aland">
              <span></span>
            </div>
          </a>
          <a href="/blog/västerbotten">
            <div class="grid-item" id="västerbotten">
              <span></span>
            </div>
          </a>
          <a href="/blog/vestkystruten">
            <div class="grid-item" id="vestkystruten">
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

      map.setView([55.55868, 8.57641], 8);

      // marker
      L.marker([55.55868, 8.07641]).addTo(map);
    </script>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
