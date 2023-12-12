<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'head.php';
    ?>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Login | Adam Sochorec</title>
  </head>
  <meta name="robots" content="noindex" />
  <meta name="googlebot" content="noindex" />
  <body id="login-customer" class="store login">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'nav-bar.php';
    ?>
    <main>
      <article class="wrapper-narrow">
        <div class="pathname-container"></div>
        <h1>Order History</h1>
        <input type="email" placeholder="Email" id="email" /><br />
        <button
          class="flex-center"
          aria-label="<?php echo $lang['asset_164'] ?>"
          role="button"
          aria-labelledby="submitBtn"
        >
          Continue
        </button>
        <hr class="reveal" />
      </article>
    </main>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'footer.php';
    ?>
  </body>
</html>
