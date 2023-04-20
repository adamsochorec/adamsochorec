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
        <section class="img">
          <img
            src="/img/jpg/IMG_1849.jpg"
            alt="Me & Marcel on the northernmost point of Denmark - Skagen"
          />
          <br /><br class="hide" />
          <p>
            <i class="note"
              >Me & Marcel on the northernmost point of Denmark - Skagen
            </i>
          </p>
        </section>
        <p>
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
        <iframe
          src="https://www.youtube.com/embed/3go3v59pfEo"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
          ><p class="alt-alt">
            Link to a YoutTube blog from our journey made by Marcel.
          </p></iframe
        >
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
        <br class="hide" />
        <section class="flex-center">
          <iframe
            class="strava-embed-placeholder"
            data-embed-type="activity"
            data-embed-id="7581051625"
          ></iframe>
          <br class="hide" />
        </section>
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
        <section class="grid-container gallery">
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
        </section>
        <?php
          $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
          include $IPATH . 'global-totop.php';
          ?>
      </article>
    </main>
    <script src="https://strava-embeds.com/embed.js"></script>

    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
