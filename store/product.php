<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Product details | Adam Sochorec</title>
  </head>

  <body id="store-product" class="store">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
      <article class="wrapper-wide">
        <div class="pathname-container">
          <p>
            <span class="pathname"><a href="/"></a> &#8250; </span>
            <span class="pathname"
              ><a href="/store/store">store</a> &#8250; #00000</span
            >
          </p>
        </div>
        <h1>#00000</h1>
        <div class="grid-container seventy-thirty">
          <div class="grid-item">
            <!-- Slider main container -->
            <div class="swiper" id="product-overview">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <img src="./prints/21041385565587.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="./prints/21071948976502.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="./prints/21100178367026.jpg" />
                </div>
                ...
              </div>

              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
          <div class="grid-item">
            <h2>500 DKK</h2>
            <p>incl. VAT / excl. shipping</p>
            <select id="size" name="size">
              <option value="" selected>Select size &#8250;</option>
              <option value="10x10">10 x 10cm</option>
              <option value="20x20">20 x 20cm</option>
              <option value="30x30">30 x 30cm</option>
              <option value="40x40">40 x 40cm</option>
            </select>
            <select id="material" name="material">
              <option value="" selected>Select material &#8250;</option>
              <option value="glossy-paper">Glossy photo paper</option>
              <option value="canvas">Canvas</option>
            </select>
            <select id="frame" name="frame">
              <option value="" selected>Select frame &#8250;</option>
              <option value="none">None</option>
              <option value="wood">Wood</option>
              <option value="aluminium">Aluminium</option>
            </select>
            <a href="/store/checkout" class="cta flex-center">Add to cart</a>
          </div>
        </div>
        <hr class="reveal" />
        <h2>Product Information</h2>
        <ul>
          <li>Lorem</li>
          <li>Lorem</li>
          <li>Lorem</li>
          <li>Lorem</li>
          <li>Lorem</li>
          <li>Lorem</li>
        </ul>
        <hr class="reveal" />

        <h2 class="reveal">Other customers purchased</h2>
        <br /><!-- Slider main container -->
        <div class="swiper" id="recommendation">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <section class="product-grid">
                <!-- PRODUCT 1 START -->
                <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'product-component.php';
    ?>
                <!-- PRODUCT 1 END -->
                <!-- PRODUCT 2 START -->
                <?php
                $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
                include $IPATH . 'product-component.php';
                ?>
                <!-- PRODUCT 2 END -->
                <!-- PRODUCT 3 START -->
                <?php
                $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
                include $IPATH . 'product-component.php';
                ?>
                <!-- PRODUCT 3 END -->
                <!-- PRODUCT 4 START -->
                <?php
                $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
                include $IPATH . 'product-component.php';
                ?>
                <!-- PRODUCT 4 END -->
              </section>
            </div>
            <div class="swiper-slide">
              <section class="product-grid">
                <!-- PRODUCT 1 START -->
                <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'product-component.php';
    ?>
                <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'product-component.php';
    ?>
                <!-- PRODUCT 1 END -->
                <!-- PRODUCT 2 START -->
                <?php
                $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
                include $IPATH . 'product-component.php';
                ?>
                <!-- PRODUCT 2 END -->
                <!-- PRODUCT 3 START -->
                <?php
                $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
                include $IPATH . 'product-component.php';
                ?>
                <!-- PRODUCT 3 END -->
                <!-- PRODUCT 4 START -->
                <?php
                $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
                include $IPATH . 'product-component.php';
                ?>
                <!-- PRODUCT 4 END -->
              </section>
            </div>
            <div class="swiper-slide">
              <section class="product-grid">
                <!-- PRODUCT 1 START -->
                <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'product-component.php';
    ?>
                <!-- PRODUCT 1 END -->
                <!-- PRODUCT 2 START -->
                <?php
                $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
                include $IPATH . 'product-component.php';
                ?>
                <!-- PRODUCT 2 END -->
                <!-- PRODUCT 3 START -->
                <?php
                $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
                include $IPATH . 'product-component.php';
                ?>
                <!-- PRODUCT 3 END -->
                <!-- PRODUCT 4 START -->
                <?php
                $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
                include $IPATH . 'product-component.php';
                ?>
                <!-- PRODUCT 4 END -->
              </section>
            </div>
            ...
          </div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </article>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
