<aside>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'scroll-status.php';
    ?>
  </aside>

  <STYLE>
    /* scroll status start */
.progress-container {
    position: fixed;
    top: var(--nav-bar-top-position);
    width: 100%;
    z-index: 9;
  }
  .progress-bar {
    background: rgb(var(--secondary-color));
    border-bottom-right-radius: var(--border-radius-1);
    height: 4px;
  }
  /* scroll status end*/
  </STYLE>
  <script>
    // SCROLL STATUS
window.onscroll = function () {
    scrollStatus();
  };
  
  function scrollStatus() {
    const winScroll =
      document.body.scrollTop || document.documentElement.scrollTop;
    const height =
      document.documentElement.scrollHeight -
      document.documentElement.clientHeight;
    const scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";
  }
  /*
  if (scrolled = 0) {
    document.querySelector(".progress-bar").style.width = 0;
  }
  */
  </script>

  <div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
</div>