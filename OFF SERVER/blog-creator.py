import sys
import os

newArticle="new-article.php"
articlePath="Blog/"
completeName=articlePath+newArticle
name1=os.path.abspath(completeName)
myfile = open(name1, 'w')


script='''<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'blog-desc.php';
    ?>
    < meta name="keywords" content="" />
    <title>??? | Adam Sochorec</title>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
  </head>

  <body id="???" class="blog-item">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
      <article class="wrapper-standard">
        <div class="pathname-container">
          <i
            ><span class="pathname"><a href="/"></a> / </span>
            <span class="pathname blog"><a href="/#blog"></a> / </span>
            <span class="pathname-current blog"></span
          ></i>
        </div>
        <br />
        <h1></h1>
        <section class="img">
          <img src="/img/jpg/???.jpg" alt="#" />
          <p><i class="note">Img description</i></p>
        </section>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae
          hic odit in amet harum quos voluptatum tempore, molestiae explicabo
          nihil itaque. Repellat aliquid quos quo eligendi? Tempore animi
          assumenda ex. Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Officia vitae voluptas quae modi? Officiis possimus accusantium, dolor
          officia quod, minus inventore quibusdam quos, autem incidunt debitis
          laborum tempora ab architecto.
        </p>
        <?php
          $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
          include $IPATH . 'global-totop.php';
          ?>
      </article>
    </main>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>

'''
myfile.write(script)
myfile.close()
