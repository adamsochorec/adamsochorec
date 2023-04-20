<!DOCTYPE html>
<html lang="en">
  <head>
    <meta
      name="description"
      content="I have the great pleasure to invite you to the first official exposition of my works!
The expo is going to be in inner spaces of the Knud's Garage in Kolding.
You can take a look on my on large scale prints framed in historical frames series, on which I was working on last spring."
    />
    <meta
      name="keywords"
      content="Portfolio, Works, Photography, Photos, 3D, 3D scans, Animations, Art, exposition, expo, exhibition, knud's garage, kolding, denmark, danmark, syddanmark, kommune, Munkegade, Adam Sochorec, @adamsochorec, Rostislav Sochorec, Gabriela Sochorcová, Sofie Sochorcová, Petra Sochorcová, Magdalena Sochorcová"
    />
    <title>Expo in Kolding | Adam Sochorec</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
  </head>

  <body>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main id="expo-in-kolding">
      <article class="intro-section">
        <section class="intro-subsection">
          <section class="flex-center" id="countdown">
            <ul>
              <li><span id="days"></span>days</li>
              <li><span id="hours"></span>Hours</li>
              <li><span id="minutes"></span>Minutes</li>
            </ul>
          </section>
          <br /><br />
          <section class="read-more">
            <a class="flex-center" href="#scrolllink">
              <h5>Learn more about the event</h5>
              <lottie-player
                id="scrollLottie"
                src="/img/lottie/scroll-down.json"
                background="transparent"
                loop
                speed="1"
                autoplay
              >
              </lottie-player>
            </a>
          </section>
        </section>
        <div class="blur"></div>
      </article>
      <article id="scrolllink" class="wrapper-standard">
        <div class="pathname-container reveal">
          <i
            ><span class="pathname"><a href="/"></a> / </span>
            <span class="pathname-current"></span
          ></i>
        </div>
        <br />
        <section>
          <h1 class="reveal"></h1>
          <br />
          <p class="reveal">
            I have the great pleasure to invite you to the first official
            exposition of my works!<br />
            The expo is going to be in inner spaces of the
            <a
              href="https://knuds-garage.business.site/"
              target="_blank"
              rel="noopener noreferrer"
            >
              Knud's Garage</a
            >
            in Kolding.<br />You can take a look on my on large scale prints
            framed in historical frames series, on which I was working during
            the last spring.
          </p>
          <hr />
        </section>
        <section class="reveal">
          <section class="expo grid-container">
            <section class="expo grid-item">
              <div class="panel">
                <h3>Where</h3>
                <p>
                  <b>Knud's Garage</b><br />Munkegade 5A<br />Kolding 6000<br />Denmark
                  🇩🇰
                </p>
              </div>
            </section>
            <section class="expo grid-item">
              <div class="panel">
                <h3>When</h3>
                <p>
                  <b>Jan - Feb 2023</b><br /><br />Mon -
                  Sat&ensp;&emsp;12.00-02.00<br />Sun&emsp;&emsp;&emsp;&emsp;&nbsp;14.00-22.00
                </p>
              </div>
            </section>
            <br /><br />
          </section>
          <div class="btn-area flex-center">
            <a
              aria-describedby="about"
              href="https://www.google.com/maps/dir//Knuds+Garage,+Munkegade+5A,+6000+Kolding,+Denmark/@55.4896193,9.4774543,17z/data=!4m15!1m6!3m5!1s0x0:0x4beb056a0a3fdde7!2sKnuds+Garage!8m2!3d55.4896141!4d9.4775472!4m7!1m0!1m5!1m1!1s0x464c9f7aed9ccbcd:0x4beb056a0a3fdde7!2m2!1d9.4775472!2d55.4896141?hl=en"
              target="_blank"
              rel="noopener noreferrer"
            >
              <div aria-describedby="about" id="btn">Get the directions</div>
              <div class="btn-shadow"></div>
            </a>
          </div>
        </section>
        <hr />
      </article>
    </main>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
