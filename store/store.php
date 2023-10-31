<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'leaflet-head.php';
    ?>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Store | Adam Sochorec</title>
  </head>

  <body id="store-index" class="store">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
      <article class="wrapper-wide">
        <div class="pathname-container"></div>
        <hr class="reveal" />
        <div class="grid-container fifty-fifty">
          <div class="grid-item">
            <h1>Recently published</h1>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui
              voluptatem blanditiis expedita omnis corrupti id rem perspiciatis
              possimus, cumque cum optio ut illo incidunt laborum ad magnam est,
              architecto dignissimos.
            </p>
            <a class="cta flex-center">Learn more &#8250;</a>
          </div>
          <div class="grid-item v-stretch">
            <img src="/img/2021-04-13-00596.jpg" />
          </div>
        </div>
        <hr class="reveal" />
        <!-- PRODUCTS START -->
        <section class="product-grid">
          <!-- PRODUCT 1 START -->
          <div class="grid-item">
            <img src="/img/prints/21041385565587.jpg" /><br /><br />
            <h3>Wall print</h3>
            <p>Lorem ipsim dolor kokot mrdka</p>
            <a class="cta cta-2 flex-center">Buy &#8250;</a>
          </div>
          <!-- PRODUCT 1 END -->
          <!-- PRODUCT 2 START -->
          <div class="grid-item">
            <img src="/img/prints/21041425600.jpg" /><br /><br />
            <h3>Wall print</h3>
            <p>Lorem ipsim dolor kokot mrdka</p>
            <a class="cta cta-2 flex-center">Buy &#8250;</a>
          </div>
          <!-- PRODUCT 2 END -->
          <!-- PRODUCT 3 START -->
          <div class="grid-item">
            <img src="/img/prints/21042289925635.jpg" /><br /><br />
            <h3>Wall print</h3>
            <p>Lorem ipsim dolor kokot mrdka</p>
            <a class="cta cta-2 flex-center">Buy &#8250;</a>
          </div>
          <!-- PRODUCT 3 END -->
          <!-- PRODUCT 4 START -->
          <div class="grid-item">
            <img src="/img/prints/21042593335697.jpg" /><br /><br />
            <h3>Wall print</h3>
            <p>Lorem ipsim dolor kokot mrdka</p>
            <a class="cta cta-2 flex-center">Buy &#8250;</a>
          </div>
          <!-- PRODUCT 4 END -->
          <!-- PRODUCT 5 START -->
          <div class="grid-item">
            <img src="/img/prints/21071948976502.jpg" /><br /><br />
            <h3>Wall print</h3>
            <p>Lorem ipsim dolor kokot mrdka</p>
            <a class="cta cta-2 flex-center">Buy &#8250;</a>
          </div>
          <!-- PRODUCT 5 END -->
          <!-- PRODUCT 6 START -->
          <div class="grid-item">
            <img src="/img/prints/21082261146778.jpg" /><br /><br />
            <h3>Wall print</h3>
            <p>Lorem ipsim dolor kokot mrdka</p>
            <a class="cta cta-2 flex-center">Buy &#8250;</a>
          </div>
          <!-- PRODUCT 6 END -->
          <!-- PRODUCT 7 START -->
        </section>
      </article>
      <!-- PRODUCTS END -->
      <!-- CONTACT FORM START -->
      <article id="contact">
        <section class="wrapper-standard">
          <section class="contact-form-section">
            <hr class="reveal" />
            <h1 class="reveal">Contact</h1>
            <form
              id="contactForm"
              action="https://formsubmit.co/2007080c2cf8bd2ebb68506e7aa98c5f"
              method="POST"
              novalidate
              enctype="multipart/form-data"
            >
              <!-- Email invisibility -->
              <div class="grid-container contact-form fifty-fifty reveal">
                <div class="grid-item">
                  <p><label for="email">Email * </label></p>
                  <input
                    type="email"
                    id="email"
                    name="Email"
                    placeholder=""
                    required
                    autocomplete="email"
                  />
                  <br />
                  <p><label for="name">Name *</label></p>
                  <input
                    required
                    type="text"
                    id="name"
                    name="Name"
                    placeholder=""
                    autocomplete="name"
                  />

                  <br />
                </div>
                <div class="grid-item">
                  <p><label for="subject">Subject * </label></p>
                  <input
                    type="text"
                    id="subject"
                    name="_subject"
                    required
                    placeholder=""
                  />
                  <br />
                  <p><label for="company">Company (optional)</label></p>
                  <input
                    type="text"
                    id="company"
                    name="Company"
                    placeholder=""
                    autocomplete="work"
                  />
                  <br />
                </div>
              </div>
              <div class="reveal">
                <p><label for="message">Message * </label></p>
                <textarea
                  minlength="10"
                  name="Message"
                  rows="7"
                  id="message"
                  required
                  placeholder=""
                ></textarea>
                <br />
                <br />

                <div class="btn-area flex-center">
                  <button class="cta" id="btn" class="submit-btn" type="submit">
                    Submit contact form
                  </button>
                  <div class="btn-shadow"></div>
                </div>
                <input
                  type="hidden"
                  name="_captcha"
                  value="false"
                /><!-- Spam captcha deactivation -->
                <input
                  type="hidden"
                  name="_next"
                  value="https://adamsochorec.com/success"
                />
                <!-- Redirect to the success page -->
              </div>
            </form>
          </section>
        </section>
      </article>
      <!-- CONTACT FORM END -->
    </main>
    <?php echo $blog['extra-footer'] ?>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
