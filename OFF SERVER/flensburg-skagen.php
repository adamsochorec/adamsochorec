<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Flensburg - Skagen 🇩🇰| Adam Sochorec</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>

  <body id="flensburg-skagen">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <aside>
      <?php
      $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
      include $IPATH . 'scroll-status.php';
      ?>
    </aside>
    <main>
      <article class="wrapper-standard">
        <section>
          <div class="pathname-container">
            <i
              ><span class="pathname"><a href="/"></a> / </span>
              <span class="pathname blog"><a href="/#blog"></a> / </span>
              <span class="pathname-current blog"></span
            ></i>
          </div>
          <br />
          <h1></h1>
          <br />
          <img src="/img/jpg/flensburg-skagen-1.jpg" alt="#" />
          <p>
            <br />Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa
            aspernatur aut odio numquam eius fuga deleniti molestiae unde,
            veniam sapiente? Aliquid unde laborum a eum explicabo nesciunt
            totam, sunt doloremque. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Asperiores a reiciendis dolore in deserunt.
            Quisquam in enim hic dolores recusandae quo quis, similique labore
            dignissimos amet fugit itaque, minus corrupti!
          </p>
        </section>
        <hr />

        <section class="reveal">
          <div
            class="strava-embed-placeholder reveal"
            data-embed-type="activity"
            data-embed-id="7581051625"
          ></div>
          <p class="reveal">
            <br />Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa
            aspernatur aut odio numquam eius fuga deleniti molestiae unde,
            veniam sapiente? Aliquid unde laborum a eum explicabo nesciunt
            totam, sunt doloremque.
          </p>
        </section>
        <hr />
      </article>
    </main>
    <script src="https://strava-embeds.com/embed.js"></script>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
