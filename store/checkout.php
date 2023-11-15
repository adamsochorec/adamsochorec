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

  <body id="store-checkout" class="store">
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
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
              ><a href="/store/store">store</a> &#8250; checkout</span
            >
          </p>
        </div>
        <h1>Checkout</h1>
        <hr class="reveal" />

        <div class="grid-container seventy-thirty">
          <div class="grid-item">
            <section class="contact-form-section">
              <h2 class="reveal">Billing Adress</h2>
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
                    <p><label for="email">First Name *</label></p>
                    <input
                      type="text"
                      id="billing-fname"
                      name="First Name"
                      placeholder=""
                      required
                      autocomplete="First Name"
                    />

                    <br />
                    <p><label for="email">Email * </label></p>
                    <input
                      type="email"
                      id="billing-email"
                      name="Email"
                      placeholder=""
                      required
                      autocomplete="email"
                    />
                    <br />
                  </div>
                  <div class="grid-item">
                    <p><label for="email">Last Name *</label></p>
                    <input
                      type="text"
                      id="billing-lname"
                      name="Last Name"
                      placeholder=""
                      required
                      autocomplete="Last Name"
                    />
                    <br />
                    <p><label for="email">Phone Number *</label></p>
                    <input
                      type="text"
                      id="billing-phone"
                      name="Phone Number"
                      placeholder=""
                      required
                      autocomplete="Phone Number"
                    />
                    <br />
                  </div>
                </div>
                <div class="reveal">
                  <p><label for="message">Address * </label></p>
                  <textarea
                    minlength="10"
                    name="address"
                    rows="1"
                    id="billing-address"
                    required
                    autocomplete="address-level1"
                    placeholder=""
                  ></textarea>
                </div>
                <div class="grid-container contact-form fifty-fifty reveal">
                  <div class="grid-item">
                    <p><label for="country">Country </label></p>

                    <select id="billing-country" name="Country" required>
                      <option>Denmark</option></select
                    ><br />
                    <p><label for="email">City *</label></p>
                    <input
                      type="text"
                      id="billing-city"
                      name="City"
                      placeholder=""
                      required
                      autocomplete="City"
                    />
                    <br />
                    <p>
                      <input
                        id="adresstype"
                        name="adresstype"
                        type="checkbox"
                      />
                      <label for="adresstype"
                        >My billing and shipping address are the same</label
                      >
                    </p>
                  </div>
                  <div class="grid-item">
                    <p><label for="email">City *</label></p>
                    <input
                      type="text"
                      id="city"
                      name="City"
                      placeholder=""
                      required
                      autocomplete="City"
                    />
                    <br />
                    <p><label for="email">ZIP Code *</label></p>
                    <input
                      type="text"
                      id="zip"
                      name="zip"
                      placeholder=""
                      required
                      autocomplete="Zip Code"
                    />
                    <br />
                    <p></p>
                  </div>
                </div>
                <!-- IF ADDRESS IS DIFFERENT-->
                <div id="hiddenElement" style="display: none">
                  <br />
                  <h2 class="reveal">Shipping Adress</h2>

                  <div class="grid-container contact-form fifty-fifty reveal">
                    <div class="grid-item">
                      <p><label for="email">First Name *</label></p>
                      <input
                        type="text"
                        id="delivery-fname"
                        name="First Name"
                        placeholder=""
                        required
                        autocomplete="First Name"
                      />

                      <br />
                      <p><label for="email">Email * </label></p>
                      <input
                        type="email"
                        id="delivery-email"
                        name="delivery-Email"
                        placeholder=""
                        required
                        autocomplete="email"
                      />
                      <br />
                    </div>
                    <div class="grid-item">
                      <p><label for="email">Last Name *</label></p>
                      <input
                        type="text"
                        id="delivery-lname"
                        name="Last Name"
                        placeholder=""
                        required
                        autocomplete="Last Name"
                      />
                      <br />
                      <p><label for="email">Phone Number *</label></p>
                      <input
                        type="text"
                        id="delivery-phone"
                        name="Phone Number"
                        placeholder=""
                        required
                        autocomplete="Phone Number"
                      />
                      <br />
                    </div>
                  </div>
                  <div class="reveal">
                    <p><label for="message">Address * </label></p>
                    <textarea
                      minlength="10"
                      name="address"
                      rows="1"
                      id="delivery-address"
                      required
                      autocomplete="address-level1"
                      placeholder=""
                    ></textarea>
                  </div>
                  <div class="grid-container contact-form fifty-fifty reveal">
                    <div class="grid-item">
                      <p><label for="country">Country </label></p>

                      <select id="delivery-country" name="Country" required>
                        <option>Denmark</option></select
                      ><br />
                      <p><label for="email">City *</label></p>
                      <input
                        type="text"
                        id="delivery-city"
                        name="City"
                        placeholder=""
                        required
                        autocomplete="City"
                      />
                    </div>
                    <div class="grid-item">
                      <p><label for="email">City *</label></p>
                      <input
                        type="text"
                        id="delivery-city"
                        name="City"
                        placeholder=""
                        required
                        autocomplete="City"
                      />
                      <br />
                      <p><label for="email">ZIP Code *</label></p>
                      <input
                        type="text"
                        id="delivery-zip"
                        name="zip"
                        placeholder=""
                        required
                        autocomplete="Zip Code"
                      />
                      <br />
                      <p></p>
                    </div>
                  </div>
                </div>
                <button class="cta" type="submit">
                 Submit Order
                </button>
              </form>

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
            </section>
          </div>
          <div class="grid-item"></div>
        </div>

        <hr class="reveal" />
      </article>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
