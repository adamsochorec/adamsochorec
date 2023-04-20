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
      content="adamsochorec, adam sochorec, @adamsochorec,"
    />
    <title>Kvarken | Adam Sochorec</title>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>

  <body id="kvarken" class="blog-item">
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
        <img src="/img/jpg/22082424738796.jpg" alt="#" />
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae
          hic odit in amet harum quos voluptatum tempore, molestiae explicabo
          nihil itaque. Repellat aliquid quos quo eligendi? Tempore animi
          assumenda ex. Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Officia vitae voluptas quae modi? Officiis possimus accusantium, dolor
          officia quod, minus inventore quibusdam quos, autem incidunt debitis
          laborum tempora ab architecto.
        </p>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d915615.5461435941!2d20.156662041525998!3d63.37053814236951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x467d73e074df66a1%3A0xa4e4047d9037d359!2sKvarken%20Archipelago%20UNESCO%20World%20Heritage%20Site%20Memorial!5e0!3m2!1sen!2scz!4v1672683519810!5m2!1sen!2scz"
          width="800"
          height="600"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          ><p class="alt-alt">
            Satelite view of an Kvarken Archiepelago on, with the Bothnian bay
            on left and the west coast of Finish Ostrobotten on the left.
          </p></iframe
        >
        <img src="/img/jpg/2208258808.jpg" alt="#" />
        <img src="/img/jpg/22082324138789.jpg" alt="#" />
        <img src="/img/jpg/22082424728795.jpg" alt="#" />
        <img src="/img/jpg/22082424428791.jpg" alt="#" />
        <img src="/img/jpg/22082424528792.jpg" alt="#" />
        <img src="/img/jpg/22082424738796.jpg" alt="#" />
        <img src="/img/jpg/2208238785.jpg" alt="#" />
        <img src="/img/jpg/2208258806.jpg" alt="#" />
        <img src="/img/jpg/22082525588812.jpg" alt="#" />
        <img src="/img/jpg/22082525398811.jpg" alt="#" />
        <img src="/img/jpg/22082525648814.jpg" alt="#" />
        <img src="/img/jpg/2208258805.jpg" alt="#" />

        <hr />
        <section>
          <h2>Related literature</h2>
          <br />
          <ol>
            <li>
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://en.wikipedia.org/wiki/Kvarken"
                >Kvarken on Wikipedia</a
              >
            </li>
            <li>
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://en.wikipedia.org/wiki/Freedom_to_roam#Finland"
                >Everyman's right</a
              >
            </li>
            <li>
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://www.tulikartta.fi/"
                >Map of public shelters across Finland</a
              >
            </li>
            <li>
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://www.eraluvat.fi/en/fishing/fisheries-management-fee.html"
                >Fishing in nature fee</a
              >
            </li>
            <li>
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://www.fishinginfinland.fi"
                >Fishing in Finland
              </a>
            </li>
          </ol>
          <?php
          $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
          include $IPATH . 'global-totop.php';
          ?>
        </section>
        <hr />
        <h2>Further reading</h2>
        <br />
        <section class="grid-container gallery">
          <a class="hh-stretch" href="/blog/house-hunting">
            <div class="grid-item" id="house-hunting">
              <span></span>
            </div>
          </a>
          <a href="/blog/blavand">
            <div class="grid-item" id="blåvand">
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
          <a class="hh-stretch" href="/blog/aland">
            <div class="grid-item" id="åland">
              <span></span>
            </div>
          </a>
        </section>
      </article>
    </main>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
