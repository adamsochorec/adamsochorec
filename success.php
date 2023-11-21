<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'assets/components/footer.php'; ?>
    <title>Success | Adam Sochorec</title>
  </head>
  <body id="success" class="noindex">
    <?php include 'assets/components/nav-bar.php'; ?>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
    <main>
      <article class="wrapper-narrow flex-center">
        <div class="pathname-container"></div>
        <div class="pathname-container"></div>

        <div class="lottie">
          <dotlottie-player
          class="reveal"
            src="/assets/lottie/success.lottie"
            background="transparent"
            speed="1"
            autoplay
          ></dotlottie-player>
        </div>
        <br />

        <h1 class="reveal">Form submitted<br />successfully!</h1>
        <h2 class="reveal">
          <a href="/">Return to the homepage &#8250;</a>
        </h2>
      </article>
    </main>
    <!-- LOTTIE PLAYER SCRIPT START -->
    <script
      defer
      type="text/javascript"
      src="https://unpkg.com/@dotlottie/player-component@1.0.0/dist/dotlottie-player.js"
    ></script>
    <!-- LOTTIE PLAYER SCRIPT END -->
    <?php include 'assets/components/footer.php'; ?>
  </body>
</html>
