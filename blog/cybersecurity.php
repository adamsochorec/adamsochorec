<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'head.php';
    ?>
    <meta
      name="description"
      content="Discover essential steps to secure and fortify your online presence. Learn the importance of contemporary passwords, two-factor authentication (2FA), and how to tackle social engineering vulnerabilities. Let's take control of our digital footprint to ensure online security and privacy."
    />
    <meta
      name="keywords"
      content="Online Presence, Contemporary Passwords, Social Engineering, Unique Password, Password Manager, Password Strength Calculator, iCloud Keychain, Apple Users, LastPass, Keeper, Hardware Key, Two-factor Authentication, 2FA, Single-use Time-dependent Code, Email, Verification App, Recovery Codes, SIM Swapping, Authy, Service Verification Native App, Personal Information, Privacy, Online Shopping, Data Access, Random Non-organic Passwords, Password Entropy Calculator, Google's Control, Internet"
    />
    <title>Cybersecurity | Adam Sochorec</title>
  </head>

  <body id="cybersecurity" class="blog-item">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'nav-bar.php';
    ?>
    <main>
      <section class="intro-section-wrapper" id="passwordGeneratorArea">
        <article id="passwordGenerator" class="intro-section gradient">
          <section class="intro-subsection">
            <h2>Get an ultimate password</h2>
            <section class="btn-area flex-center">
              <input
                type="text"
                placeholder="of 124-bit strength"
                id="password"
                readonly=""
              />
              <br />
              <div id="btn"></div>
              <div class="btn-shadow"></div>
            </section>
            <section class="read-more">
              <a class="flex-center" href="#scrolllink">
                <h5>Learn more about cybersecurity</h5>
                <lottie-player
                  id="scrollLottie"
                  src="/assets/lottie/scroll-down.json"
                  background="transparent"
                  loop
                  speed="2"
                  autoplay
                ></lottie-player>
              </a>
            </section>
          </section>
        </article>
      </section>
      <article id="scrolllink" class="wrapper-wide">
        <h1 class="reveal"></h1>
        <h2 class="reveal">
          Essential Steps Leading to Your Secure and Healthy Online Presence.
        </h2>
        <div class="grid-container seventy-thirty">
          <div class="grid-item reveal">
            <div class="pathname-container">
              <p>
                <span class="pathname"><a href="/"></a> &#8250; </span>
                <span class="pathname"
                  ><a href="/#blog"></a> &#8250; cybersecurity</span
                >
              </p>
            </div>
          </div>
          <div class="grid-item reveal">
            <p>
              <span class="pathname">
                <svg
                  id="date"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                >
                  <path
                    d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"
                  />
                </svg>
                &nbsp; August 2022</span
              >
            </p>
          </div>
        </div>
        <hr class="reveal" />
        <section>
          <h3 class="reveal">1. Contemporary Passwords</h3>
          <p class="drop-cap reveal">
            The most effective way how today to hack someone's identity is to
            "social engineer". That means “guessing” someone's password based on
            the target's public information (date of birth, postal code, house
            number, etc.) usually on social sites.
          </p>

          <p class="reveal">
            By using complex not the organic password for all of your online
            accounts, you can drastically reduce the risk of having your
            birthday on Facebook or tag the location of your hometown in an
            Instagram post.
          </p>

          <p class="reveal">
            Another step forward to secure your online and offline identity is
            using a unique password for each account you own. That creates a
            powerful cascade of barriers that possible hackers might cross
            pretty easily with a single or similar password.
          </p>

          <p class="reveal">
            To be able to manipulate many random characters from the keyboard
            you need a reliable password manager. Does not matter how powerful
            and unique your passwords are when you keep them in Excel
            spreadsheets on your work laptop...
          </p>
          <hr class="reveal" />
          <section>
            <h4 class="reveal">1.2 Password Strength</h4>
            <br />
            <form
              class="reveal"
              id="password-strength-form"
              action=""
              method="get"
              accept-charset="utf-8"
              spellcheck="false"
              autocomplete="off"
            >
              <input
                id="myPassword"
                type="password"
                value=""
                autocomplete="off"
              />
            </form>
            <p class="flex-center reveal">
              ↑
              <span class="note">
                This tool is safe to interact with. Everything is processed
                locally - no data are sent or stored.</span
              >
            </p>
            <p class="reveal">
              Contemporary password hacking is more about social engineering and
              working with the most commonly used words/phrases in dictionaries,
              than processing-heavy combinatorics.
            </p>
          </section>
        </section>
        <hr class="reveal" />
        <section>
          <h4 class="reveal">
            1.3 Problem Solution
            <svg
              id="screwdriver-wrench"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 512 512"
            >
              <path
                d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM104 432c0 13.3-10.7 24-24 24s-24-10.7-24-24s10.7-24 24-24s24 10.7 24 24z"
              />
            </svg>
          </h4>
          <ol class="reveal">
            <li><p>Set up a trusted and encrypted password manager:</p></li>
            <ul>
              <li>
                <a
                  target="_blank"
                  rel="noopener noreferrer"
                  href="https://www.apple.com/legal/privacy/data/en/icloud-keychain/"
                  >iCloud keychain</a
                >
                - Apple users
              </li>
              <li>
                <a
                  target="_blank"
                  rel="noopener noreferrer"
                  href="https://www.lastpass.com/how-lastpass-works"
                  >LastPass</a
                >
                and
                <a
                  target="_blank"
                  rel="noopener noreferrer"
                  href="https://www.keepersecurity.com/en_GB/"
                  >Keeper</a
                >
                - any kind of devices
              </li>
            </ul>
            <li>
              Generate powerful and unique passwords through your password
              manager or
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="#passwordGenerator"
                >password generator</a
              >
            </li>
            <li>Store them in your password manager</li>
            <li>
              Remember master password to your manager or get a
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://www.tomsguide.com/news/usb-security-key"
                >hardware key</a
              >
            </li>
          </ol>
        </section>
        <hr class="reveal" />
        <h3 class="reveal">2.What Is 2FA and Why Is It Essential.</h3>
        <section class="grid-container fifty-fifty">
          <div class="gri-item">
            <p class="reveal">
              Two-factor authentication (2FA) is an additional security feature
              for logging into your online accounts. 2FA is based on entering a
              single-use time-dependent code sent to you by SMS, email, or
              verification app.
            </p>
            <p class="reveal">
              2FA usually works on top of the standard login procedure (username
              and password), so if your account info gets compromised, the
              hacker still wouldn't access your account.
            </p>
            <p class="reveal">
              After successful 2FA activation, you might be shown a couple of
              six to eight-digit recovery codes. In case you would lose access
              to your email and phone number, you still can manage your online
              account with those single-use codes (after you use all of them,
              you will receive new ones).
            </p>
          </div>
          <div class="grid-item reveal">
            <lottie-player
              id="FALottie"
              src="/assets/lottie/2FA-2.json"
              background="transparent"
              loop
              autoplay
            ></lottie-player>
          </div>
        </section>
        <hr class="reveal" />
        <section>
          <h4 class="reveal">2.2 What Is SIM Swapping</h4>
          <br />
          <section class="img-fill reveal">
            <!-- Generator: Adobe Illustrator 27.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
            <?php
            $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
            include $IPATH . 'simswap.php';
            ?>
          </section>
          <p class="flex-center reveal">
            ↑
            <span class="note">
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://www.snbonline.com/"
                >www.snbonline.com</a
              >
            </span>
          </p>
          <p class="reveal">
            You can easily avoid this by using a mobile app for 2FA that is
            independent of your phone number. Most the online services provide
            their native app for 2FA or they support trusted third-party apps
            for secure two-factor authentication.
          </p>
        </section>
        <hr class="reveal" />
        <section>
          <h4 class="reveal">
            2.3 Problem Solution
            <svg
              id="screwdriver-wrench"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 512 512"
            >
              <path
                d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM104 432c0 13.3-10.7 24-24 24s-24-10.7-24-24s10.7-24 24-24s24 10.7 24 24z"
              />
            </svg>
          </h4>
          <ol class="reveal">
            <li>
              Set up a 2FA for your online accounts with 2FA support through:
            </li>
            <ul>
              <li>
                <a
                  target="_blank"
                  rel="noopener noreferrer"
                  href="https://www.apple.com/legal/privacy/data/en/icloud-keychain/"
                  >iCloud keychain</a
                >
                - Apple users
              </li>
              <li>
                Trusted third-party 2FA apps such as
                <a
                  target="_blank"
                  rel="noopener noreferrer"
                  href="https://authy.com/"
                  >Authy</a
                >,
                <a
                  target="_blank"
                  rel="noopener noreferrer"
                  href="https://www.lastpass.com/how-lastpass-works"
                  >LastPass</a
                >
                or
                <a
                  target="_blank"
                  rel="noopener noreferrer"
                  href="https://www.keepersecurity.com/en_GB/"
                  >Keeper</a
                >
              </li>
              <li>
                Service's verification native app (f.e. Adobe - Account Access)
              </li>
              <li>
                If the service does support any mentioned methods, use the SMS
                verification
              </li>
            </ul>
          </ol>
        </section>
        <hr class="reveal" />
        <section>
          <h3 class="reveal">3. Social Engineering Vulnerability</h3>
          <p class="reveal">
            Watch out for your online traces. Set your personal information
            (such as birthday, year of graduation, etc.) as private or at least
            not public (friends/followers) NO friends of friends (you do not
            control the information accessibility scope!).
          </p>
          <p class="reveal">
            Do not pick your pin codes or passwords as keywords you published
            somewhere (pets or child's name).<br />When registering for a new
            online service, fill out only the required information. All your
            published information might hackers use against you.
          </p>

          <p class="reveal">
            When installing a new app, check out in settings its requests to
            read your data - decide which are necessary for the app
            functionality.<br />For example, does your app for online shopping
            needs access to your contact and messages?<br />By using random
            non-organic passwords will most personal information in the online
            space lose its value (as a possible key to your sensitive data).
          </p>
        </section>

        <hr class="reveal" />
        <section>
          <h4 class="reveal">
            3.2 Problem Solution
            <svg
              id="screwdriver-wrench"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 512 512"
            >
              <path
                d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM104 432c0 13.3-10.7 24-24 24s-24-10.7-24-24s10.7-24 24-24s24 10.7 24 24z"
              />
            </svg>
          </h4>
          <ol class="reveal">
            <li>
              Keep the information you publish about yourself under control, set
              required sensitive information visibility as private
            </li>
            <li>
              Before filling out any information about yourself, ask yourself if
              is it fundamental for app/service functionality
            </li>
            <li>Stick to the random non-organic passwords</li>
            <li>Educate yourself about social engineering</li>
          </ol>
        </section>

        <hr class="reveal" />
        <section>
          <h3 class="reveal">4. Related Literature</h3>
          <ol>
            <li class="reveal">
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://open.spotify.com/episode/2hJsSOoQkgnlQLEFrdBVFp?si=06ff9cdeb3da4cbc"
                >Story about a professional social engineer &#8250;</a
              >
            </li>
            <li class="reveal">
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://open.spotify.com/episode/4q0cNkAHQQMBTu4NmeNW7E?si=a4c35c68a1d34724"
                >Google's control over the internet &#8250;</a
              >
            </li>
            <li class="reveal">
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://authy.com/blog/authy-vs-google-authenticator/"
                >Authy vs. Google Authenticator &#8250;</a
              >
            </li>
            <li class="reveal">
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://www.omnicalculator.com/other/password-entropy"
                >Password Entropy Calculator &#8250;</a
              >
            </li>

            <li class="reveal">
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://open.spotify.com/episode/5Snektk5Z2nUzM7DgoEBSx?si=eKX_d1f1SY6T3j5S3mkLgA"
                >Hacking backstage &#8250;</a
              >
            </li>
          </ol>
        </section>
        <hr class="reveal" />
        <h2 class="reveal">Further Reading</h2>
        <br />
        <div class="swiper recommendation-swiper reveal">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide gallery">
              <a href="/blog/aland">
                <div class="grid-item" id="aland">
                  <div class="blur">
                    <span><br />🇦🇽</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="swiper-slide gallery">
              <a href="/blog/blavand">
                <div class="grid-item" id="blavand">
                  <div class="blur">
                    <span><br />🇩🇰</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="swiper-slide gallery">
              <a href="/blog/house-hunting">
                <div class="grid-item" id="house-hunting">
                  <div class="blur">
                    <span><br />🇫🇮</span>
                  </div>
                </div></a
              >
            </div>
            <div class="swiper-slide gallery">
              <a href="/blog/vasterbotten">
                <div class="grid-item" id="vasterbotten">
                  <div class="blur">
                    <span><br />🇸🇪</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="swiper-slide gallery">
              <a href="/blog/vestkystruten">
                <div class="grid-item" id="vestkystruten">
                  <div class="blur">
                    <span><br />🇩🇰</span>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </article>
    </main>
    <script
      type="text/javascript"
      src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"
    ></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-interactivity@1.6.2/dist/lottie-interactivity.min.js"></script>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'footer.php';
    ?>
  </body>
</html>
