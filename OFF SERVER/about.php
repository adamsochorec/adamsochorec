<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description"
        content="Self-taught photographer, Lego builder and bush-craft enjoyer, born in Prague, Czechia 🇨🇿. Currently occupied with Erhversakademi Kolding in Denmark 🇩🇰 and Vaasan Yliopsto in Finland 🇫🇮.​
I'm focusing on portrait, fashion, beauty, and experimental themes. Recently I'm also enjoying to work with landscapes, 3D scans and web design.​">
    <meta name="keywords"
        content="Adam Sochorec, freelance, photographer, art, fine art, portrait, about, page, contact, biography, content creator, content creation, IBA, erhversakademi, Portfolio, Works, Photography, Photos, 3D, 3D scans, Animations, Art, Web Design, responsive design, Instagram, Sketchfab, Flickr, @adamsochorec, Denmark, Kolding, Czechia, Czech Republic, Prague, Česká Republika, Česko, Praha, Fine Art, Fotografie, Umění, Studio photography, Rostislav Sochorec, lego, star wars, flickr, instagram, sketchfab, css, html, javascript, php, python, c, canon camera, iphone 13 mini, Polycam, beauty photography, experimental, elfsigth, website, web, landscape, landscape photography, prints, Rostislav Sochorec, Gabriela Sochorcová, Sofie Sochorcová, Petra Sochorcová, Magdalena Sochorcová">
    <title>About | Adam Sochorec</title>
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
    <aside>
        <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
        include $IPATH . 'banner.php';
        ?>
    </aside>
    <main id="about">
        <article class="intro-section">
            <section class="intro-subsection">
              <section class="flex-center">
              </section>
              <br /><br />
              <section class="read-more">
                <a class="flex-center" href="#scrolllink">
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
          </article>
        <article id="scrolllink" class="wrapper-standard">
            <section>
                <div class="pathname-container reveal">
                    <i
                      ><span class="pathname"><a href="/"></a> / </span>
                      <span class="pathname-current"></span
                    ></i>
                  </div><br>
                <h1 class="reveal"></h1>
                <br>
                <p class="reveal">Self-taught photographer, <a href="https://www.flickr.com/photos/141401020@N03/" target="_blank" rel="noopener noreferrer">Lego
                        builder</a> and bush-craft enjoyer, born in Prague, Czechia 🇨🇿.
                    Currently occupied with <a
                        href="https://www.iba.dk/fuldtidsuddannelser" target="_blank" rel="noopener noreferrer">Erhversakademi Kolding</a> in Denmark 🇩🇰 and <a
                        href="https://www.uwasa.fi/fi" target="_blank" rel="noopener noreferrer">Vaasan Yliopsto</a> in Finland 🇫🇮.​<br>I'm focusing on
                    portrait,
                    fashion, beauty, and experimental themes. Recently I'm also enjoying to
                    work with landscapes, 3D scans and web design.​<br><br>
                <p class="reveal">Most of my shots are taken with <a
                        href="https://www.bhphotovideo.com/c/product/892349-REG/Canon_8035b002_EOS_6D_Digital_Camera.html" target="_blank" rel="noopener noreferrer">Canon
                        6D</a> and <a href="https://www.apple.com/iphone-13/specs/" target="_blank" rel="noopener noreferrer">iPhone 13 mini</a>. 3D models
                    are
                    scanned on my iPhone and rendered by awesome <a
                        href="https://poly.cam/" target="_blank" rel="noopener noreferrer">Polycam</a> software.<br><br>Hereby open to collaborations and
                    projects!

            </section>
            <hr>
            <section>
                <picture>
                    <img class="reveal" src="/img/jpg/about.jpg"
                        alt="Portrait of Adam Sochorec in a blue shirt">
                </picture>
                <br><br>
                <picture>
                    <img class="reveal" src="/img/jpg/partners.png"
                        alt="Logos of past collaborators and partners: Roskilde Festival 2022, Confuctius Institute IBA Kolding, Antiyber Bullying Project, OLDstars, Slovo 21, Franklin Covey Czech, Divadlo na Vinohradech, Brick Gallery and Barae.">
                </picture>
            </section>
            <hr>
            <h2 class="reveal">Language competences</h2>
            <br><br>
            <section class="grid-container skills-section">
                <div class="grid-item">
                    <section class="reveal">
                        <p>Czech 🇨🇿</p>
                        <div class="skill-bar faded">
                            <div class="skill-bar" data-progress="95"></div>
                        </div>
                    </section>
                    <section class="reveal">
                        <p>English 🇬🇧 <br
                                class="hideLanguages">Slovak 🇸🇰</p>
                        <div class="skill-bar faded">
                            <div class="skill-bar" data-progress="80"></div>
                        </div>
                    </section>
                    <section class="reveal">
                        <p>Danish 🇩🇰<br class="hideLanguages">
                            Norweigan 🇳🇴</p>
                        <div class="skill-bar faded">
                            <div class="skill-bar" data-progress="45"></div>
                        </div>
                    </section>
                    <section class="reveal">
                        <p>German 🇩🇪 Swedish 🇸🇪</p>
                        <div class="skill-bar faded">
                            <div class="skill-bar" data-progress="20"></div>
                        </div>
                    </section>
                    <section class="reveal">
                        <p>Chinese 🇨🇳 Finnish 🇫🇮</p>
                        <div class="skill-bar faded">
                            <div class="skill-bar" data-progress="10"></div>
                        </div>
                    </section>
                </div>
                <div class="grid-item">
                    <section class="reveal">
                        <p>HTML5 <svg class="languages" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <title>HTML5 Logo Badge</title>
                                <path fill="#E34F26" d="M71,460 L30,0 481,0 440,460 255,512" />
                                <path fill="#EF652A" d="M256,472 L405,431 440,37 256,37" />
                                <path fill="#EBEBEB"
                                    d="M256,208 L181,208 176,150 256,150 256,94 255,94 114,94 115,109 129,265 256,265zM256,355 L255,355 192,338 188,293 158,293 132,293 139,382 255,414 256,414z" />
                                <path fill="#FFF"
                                    d="M255,208 L255,265 325,265 318,338 255,355 255,414 371,382 372,372 385,223 387,208 371,208zM255,94 L255,129 255,150 255,150 392,150 392,150 392,150 393,138 396,109 397,94z" />
                            </svg></p>
                        <div class="skill-bar faded">
                            <div class="skill-bar" data-progress="70"></div>
                        </div>
                    </section>
                    <section class="reveal">
                        <p>CSS3 <svg xmlns="http://www.w3.org/2000/svg" class="languages"
                                viewBox="0 0 512 512">
                                <path fill="#264de4"
                                    d="M71.357 460.819L30.272 0h451.456l-41.129 460.746L255.724 512z" />
                                <path fill="#2965f1" d="M405.388 431.408l35.148-393.73H256v435.146z" />
                                <path fill="#ebebeb"
                                    d="M124.46 208.59l5.065 56.517H256V208.59zM119.419 150.715H256V94.197H114.281zM256 355.372l-.248.066-62.944-16.996-4.023-45.076h-56.736l7.919 88.741 115.772 32.14.26-.073z" />
                                <path fill="#fff"
                                    d="M255.805 208.59v56.517H325.4l-6.56 73.299-63.035 17.013v58.8l115.864-32.112.85-9.549 13.28-148.792 1.38-15.176 10.203-114.393H255.805v56.518h79.639L330.3 208.59z" />
                            </svg></p>
                        <div class="skill-bar faded">
                            <div class="skill-bar" data-progress="60"></div>
                        </div>
                    </section>
                    <section class="reveal">
                        <p>PHP <svg class="languages" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" id="svg3430" version="1.1" viewBox="0 0 711.20123 383.5975">
                            <title id="title3510">Official PHP Logo</title>
                            <defs id="defs3434">
                              <clipPath clipPathUnits="userSpaceOnUse" id="clipPath3444">
                                <path d="M 11.52,162 C 11.52,81.677 135.307,16.561 288,16.561 l 0,0 c 152.693,0 276.481,65.116 276.481,145.439 l 0,0 c 0,80.322 -123.788,145.439 -276.481,145.439 l 0,0 C 135.307,307.439 11.52,242.322 11.52,162" id="path3446"/>
                              </clipPath>
                              <radialGradient cx="0" cy="0" fx="0" fy="0" gradientTransform="matrix(363.05789,0,0,-363.05789,177.52002,256.30713)" gradientUnits="userSpaceOnUse" id="radialGradient3452" r="1" spreadMethod="pad">
                                <stop id="stop3454" offset="0" style="stop-opacity:1;stop-color:#aeb2d5"/>
                                <stop id="stop3456" offset="0.3" style="stop-opacity:1;stop-color:#aeb2d5"/>
                                <stop id="stop3458" offset="0.75" style="stop-opacity:1;stop-color:#484c89"/>
                                <stop id="stop3460" offset="1" style="stop-opacity:1;stop-color:#484c89"/>
                              </radialGradient>
                              <clipPath clipPathUnits="userSpaceOnUse" id="clipPath3468">
                                <path d="M 0,324 576,324 576,0 0,0 0,324 Z" id="path3470"/>
                              </clipPath>
                              <clipPath clipPathUnits="userSpaceOnUse" id="clipPath3480">
                                <path d="M 0,324 576,324 576,0 0,0 0,324 Z" id="path3482"/>
                              </clipPath>
                            </defs>
                            <g id="g3438" transform="matrix(1.25,0,0,-1.25,-4.4,394.29875)">
                              <g id="g3440">
                                <g clip-path="url(#clipPath3444)" id="g3442">
                                  <g id="g3448">
                                    <g id="g3450">
                                      <path d="M 11.52,162 C 11.52,81.677 135.307,16.561 288,16.561 l 0,0 c 152.693,0 276.481,65.116 276.481,145.439 l 0,0 c 0,80.322 -123.788,145.439 -276.481,145.439 l 0,0 C 135.307,307.439 11.52,242.322 11.52,162" id="path3462" style="fill:url(#radialGradient3452);stroke:none"/>
                                    </g>
                                  </g>
                                </g>
                              </g>
                              <g id="g3464">
                                <g clip-path="url(#clipPath3468)" id="g3466">
                                  <g id="g3472" transform="translate(288,27.3594)">
                                    <path d="M 0,0 C 146.729,0 265.68,60.281 265.68,134.641 265.68,209 146.729,269.282 0,269.282 -146.729,269.282 -265.68,209 -265.68,134.641 -265.68,60.281 -146.729,0 0,0" id="path3474" style="fill:#777bb3;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
                                  </g>
                                </g>
                              </g>
                              <g id="g3476">
                                <g clip-path="url(#clipPath3480)" id="g3478">
                                  <g id="g3484" transform="translate(161.7344,145.3066)">
                                    <path d="m 0,0 c 12.065,0 21.072,2.225 26.771,6.611 5.638,4.341 9.532,11.862 11.573,22.353 1.903,9.806 1.178,16.653 -2.154,20.348 C 32.783,53.086 25.417,55 14.297,55 L -4.984,55 -15.673,0 0,0 Z m -63.063,-67.75 c -0.895,0 -1.745,0.4 -2.314,1.092 -0.57,0.691 -0.801,1.601 -0.63,2.48 L -37.679,81.573 C -37.405,82.982 -36.17,84 -34.734,84 L 26.32,84 C 45.508,84 59.79,78.79 68.767,68.513 77.792,58.182 80.579,43.741 77.05,25.592 75.614,18.198 73.144,11.331 69.709,5.183 66.27,-0.972 61.725,-6.667 56.198,-11.747 49.582,-17.939 42.094,-22.429 33.962,-25.071 25.959,-27.678 15.681,-29 3.414,-29 l -24.722,0 -7.06,-36.322 c -0.274,-1.41 -1.508,-2.428 -2.944,-2.428 l -31.751,0 z" id="path3486" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
                                  </g>
                                  <g id="g3488" transform="translate(159.2236,197.3071)">
                                    <path d="m 0,0 16.808,0 c 13.421,0 18.083,-2.945 19.667,-4.7 2.628,-2.914 3.124,-9.058 1.435,-17.767 C 36.012,-32.217 32.494,-39.13 27.452,-43.012 22.29,-46.986 13.898,-49 2.511,-49 L -9.523,-49 0,0 Z m 28.831,35 -61.055,0 c -2.872,0 -5.341,-2.036 -5.889,-4.855 l -28.328,-145.751 c -0.342,-1.759 0.12,-3.578 1.259,-4.961 1.14,-1.383 2.838,-2.183 4.63,-2.183 l 31.75,0 c 2.873,0 5.342,2.036 5.89,4.855 l 6.588,33.895 22.249,0 c 12.582,0 23.174,1.372 31.479,4.077 8.541,2.775 16.399,7.48 23.354,13.984 5.752,5.292 10.49,11.232 14.08,17.657 3.591,6.427 6.171,13.594 7.668,21.302 3.715,19.104 0.697,34.402 -8.969,45.466 C 63.965,29.444 48.923,35 28.831,35 m -45.633,-90 19.313,0 c 12.801,0 22.336,2.411 28.601,7.234 6.266,4.824 10.492,12.875 12.688,24.157 2.101,10.832 1.144,18.476 -2.871,22.929 C 36.909,3.773 28.87,6 16.808,6 L -4.946,6 -16.802,-55 M 28.831,29 C 47.198,29 60.597,24.18 69.019,14.539 77.44,4.898 79.976,-8.559 76.616,-25.836 75.233,-32.953 72.894,-39.46 69.601,-45.355 66.304,-51.254 61.999,-56.648 56.679,-61.539 50.339,-67.472 43.296,-71.7 35.546,-74.218 27.796,-76.743 17.925,-78 5.925,-78 l -27.196,0 -7.531,-38.75 -31.75,0 28.328,145.75 61.055,0" id="path3490" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
                                  </g>
                                  <g id="g3492" transform="translate(311.583,116.3066)">
                                    <path d="m 0,0 c -0.896,0 -1.745,0.4 -2.314,1.092 -0.571,0.691 -0.802,1.6 -0.631,2.48 L 9.586,68.061 C 10.778,74.194 10.484,78.596 8.759,80.456 7.703,81.593 4.531,83.5 -4.848,83.5 L -27.55,83.5 -43.305,2.428 C -43.579,1.018 -44.814,0 -46.25,0 l -31.5,0 c -0.896,0 -1.745,0.4 -2.315,1.092 -0.57,0.691 -0.801,1.601 -0.63,2.48 l 28.328,145.751 c 0.274,1.409 1.509,2.427 2.945,2.427 l 31.5,0 c 0.896,0 1.745,-0.4 2.315,-1.091 0.57,-0.692 0.801,-1.601 0.63,-2.481 L -21.813,113 2.609,113 c 18.605,0 31.221,-3.28 38.569,-10.028 7.49,-6.884 9.827,-17.891 6.947,-32.719 L 34.945,2.428 C 34.671,1.018 33.437,0 32,0 L 0,0 Z" id="path3494" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
                                  </g>
                                  <g id="g3496" transform="translate(293.6611,271.0571)">
                                    <path d="m 0,0 -31.5,0 c -2.873,0 -5.342,-2.036 -5.89,-4.855 l -28.328,-145.751 c -0.342,-1.759 0.12,-3.578 1.26,-4.961 1.14,-1.383 2.838,-2.183 4.63,-2.183 l 31.5,0 c 2.872,0 5.342,2.036 5.89,4.855 l 15.283,78.645 20.229,0 c 9.363,0 11.328,-2 11.407,-2.086 0.568,-0.611 1.315,-3.441 0.082,-9.781 l -12.531,-64.489 c -0.342,-1.759 0.12,-3.578 1.26,-4.961 1.14,-1.383 2.838,-2.183 4.63,-2.183 l 32,0 c 2.872,0 5.342,2.036 5.89,4.855 l 13.179,67.825 c 3.093,15.921 0.447,27.864 -7.861,35.5 -7.928,7.281 -21.208,10.82 -40.599,10.82 l -20.784,0 6.143,31.605 C 6.231,-5.386 5.77,-3.566 4.63,-2.184 3.49,-0.801 1.792,0 0,0 m 0,-6 -7.531,-38.75 28.062,0 c 17.657,0 29.836,-3.082 36.539,-9.238 6.703,-6.16 8.711,-16.141 6.032,-29.938 l -13.18,-67.824 -32,0 12.531,64.488 c 1.426,7.336 0.902,12.34 -1.574,15.008 -2.477,2.668 -7.746,4.004 -15.805,4.004 l -25.176,0 -16.226,-83.5 -31.5,0 L -31.5,-6 0,-6" id="path3498" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
                                  </g>
                                  <g id="g3500" transform="translate(409.5498,145.3066)">
                                    <path d="m 0,0 c 12.065,0 21.072,2.225 26.771,6.611 5.638,4.34 9.532,11.861 11.574,22.353 1.903,9.806 1.178,16.653 -2.155,20.348 C 32.783,53.086 25.417,55 14.297,55 L -4.984,55 -15.673,0 0,0 Z m -63.062,-67.75 c -0.895,0 -1.745,0.4 -2.314,1.092 -0.57,0.691 -0.802,1.601 -0.631,2.48 L -37.679,81.573 C -37.404,82.982 -36.17,84 -34.733,84 L 26.32,84 C 45.509,84 59.79,78.79 68.768,68.513 77.793,58.183 80.579,43.742 77.051,25.592 75.613,18.198 73.144,11.331 69.709,5.183 66.27,-0.972 61.725,-6.667 56.198,-11.747 49.582,-17.939 42.094,-22.429 33.962,-25.071 25.959,-27.678 15.681,-29 3.414,-29 l -24.723,0 -7.057,-36.322 c -0.275,-1.41 -1.509,-2.428 -2.946,-2.428 l -31.75,0 z" id="path3502" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
                                  </g>
                                  <g id="g3504" transform="translate(407.0391,197.3071)">
                                    <path d="M 0,0 16.808,0 C 30.229,0 34.891,-2.945 36.475,-4.7 39.104,-7.614 39.6,-13.758 37.91,-22.466 36.012,-32.217 32.493,-39.13 27.452,-43.012 22.29,-46.986 13.898,-49 2.511,-49 L -9.522,-49 0,0 Z m 28.831,35 -61.054,0 c -2.872,0 -5.341,-2.036 -5.889,-4.855 L -66.44,-115.606 c -0.342,-1.759 0.12,-3.578 1.259,-4.961 1.14,-1.383 2.838,-2.183 4.63,-2.183 l 31.75,0 c 2.872,0 5.342,2.036 5.89,4.855 l 6.587,33.895 22.249,0 c 12.582,0 23.174,1.372 31.479,4.077 8.541,2.775 16.401,7.481 23.356,13.986 5.752,5.291 10.488,11.23 14.078,17.655 3.591,6.427 6.171,13.594 7.668,21.302 3.715,19.105 0.697,34.403 -8.969,45.467 C 63.965,29.444 48.924,35 28.831,35 m -45.632,-90 19.312,0 c 12.801,0 22.336,2.411 28.601,7.234 6.267,4.824 10.492,12.875 12.688,24.157 2.102,10.832 1.145,18.476 -2.871,22.929 C 36.909,3.773 28.87,6 16.808,6 L -4.946,6 -16.801,-55 M 28.831,29 C 47.198,29 60.597,24.18 69.019,14.539 77.441,4.898 79.976,-8.559 76.616,-25.836 75.233,-32.953 72.894,-39.46 69.601,-45.355 66.304,-51.254 61.999,-56.648 56.679,-61.539 50.339,-67.472 43.296,-71.7 35.546,-74.218 27.796,-76.743 17.925,-78 5.925,-78 l -27.196,0 -7.53,-38.75 -31.75,0 28.328,145.75 61.054,0" id="path3506" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </svg></p>
                        <div class="skill-bar faded">
                            <div class="skill-bar" data-progress="30"></div>
                        </div>
                    </section>
                    <section class="reveal">
                        <p>JavaScript <svg class="languages" data-name="Layer 1"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 78.56 88.92">
                                <path d="M78.56,0H0L7.36,79.87l31.91,9.05,31.91-9.05L78.56,0Z"
                                    style="fill: #e6a329;" />
                                <path d="M39.28,6.51V82.15l25.86-7.32L71.42,6.51H39.28Z" style="fill: #f1bf22;" />
                                <path
                                    d="M59.85,16.31H20.09l-2.77,29.9,.06-.19H51.15l-1.1,12.65-10.78,3.1-10.94-3.15-.66-7.66h-9.93l1.42,15.3,20.1,5.71,20.11-5.71,2.77-30.03H26.31l.46-10.01h24.87l.37,5.73h10.01l-2.18-15.65Z"
                                    style="fill: #fff;" />
                                <path
                                    d="M39.29,16.31H20.09l-2.77,29.9,.06-.19h21.9v-9.75h-11.57l.46-10.01h11.12v-9.95Zm-11.58,34.66h-9.95l1.42,15.29,20.1,5.7v-10.18l-10.94-3.16-.63-7.66Z"
                                    style="fill: #ebebeb;" />
                            </svg>
                        </p>
                        <div class="skill-bar faded">
                            <div class="skill-bar" data-progress="20"></div>
                        </div>
                    </section>
                    <section class="reveal">
                        <p>C <svg class="languages" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                viewBox="0 0 48 48">
                                <g>
                                    <path style=" fill-rule:evenodd;fill:#283593;"
                                        d="M 22.902344 3.285156 C 23.582031 2.90625 24.417969 2.90625 25.097656 3.285156 C 28.449219 5.167969 38.546875 10.835938 41.902344 12.71875 C 42.582031 13.101563 43 13.804688 43 14.566406 C 43 18.332031 43 29.667969 43 33.433594 C 43 34.195313 42.582031 34.898438 41.902344 35.28125 C 38.546875 37.164063 28.453125 42.832031 25.097656 44.714844 C 24.417969 45.09375 23.582031 45.09375 22.902344 44.714844 C 19.546875 42.832031 9.453125 37.164063 6.097656 35.28125 C 5.417969 34.898438 5 34.195313 5 33.433594 C 5 29.667969 5 18.332031 5 14.566406 C 5 13.804688 5.417969 13.101563 6.097656 12.71875 C 9.449219 10.835938 19.550781 5.167969 22.902344 3.285156 Z " />
                                    <path style=" fill-rule:evenodd;fill:#5C6BC0;"
                                        d="M 5.304688 34.402344 C 5.039063 34.046875 5 33.710938 5 33.253906 C 5 29.511719 5 18.242188 5 14.496094 C 5 13.738281 5.417969 13.039063 6.09375 12.660156 C 9.4375 10.789063 19.5 5.152344 22.84375 3.28125 C 23.519531 2.902344 24.4375 2.910156 25.113281 3.289063 C 28.457031 5.160156 38.484375 10.746094 41.828125 12.617188 C 42.097656 12.769531 42.304688 12.953125 42.488281 13.195313 Z " />
                                    <path style=" fill-rule:evenodd;fill:#FFFFFF;"
                                        d="M 24 10 C 31.726563 10 38 16.273438 38 24 C 38 31.726563 31.726563 38 24 38 C 16.273438 38 10 31.726563 10 24 C 10 16.273438 16.273438 10 24 10 Z M 24 17 C 27.863281 17 31 20.136719 31 24 C 31 27.863281 27.863281 31 24 31 C 20.136719 31 17 27.863281 17 24 C 17 20.136719 20.136719 17 24 17 Z " />
                                    <path style=" fill-rule:evenodd;fill:#3949AB;"
                                        d="M 42.484375 13.203125 C 43 13.6875 42.992188 14.414063 42.992188 14.988281 C 42.992188 18.785156 42.960938 29.578125 43 33.371094 C 43.003906 33.769531 42.871094 34.1875 42.675781 34.5 L 23.59375 24 Z " />
                                </g>
                            </svg><br class="hideLanguages"> Python <svg class="languages" data-name="Layer 1"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 111.68 111.11">
                                <defs>
                                    <linearGradient id="linear-gradient" x1="-237.96" y1="472.37" x2="-237.3"
                                        y2="471.71"
                                        gradientTransform="translate(19719.11 39220.39) scale(82.82 -83.01)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#387eb8" />
                                        <stop offset="1" stop-color="#366994" />
                                    </linearGradient>
                                    <linearGradient id="linear-gradient-2" x1="-237.9" y1="472.28" x2="-237.19"
                                        y2="471.61"
                                        gradientTransform="translate(19747.44 39248.51) scale(82.82 -83.01)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#ffe052" />
                                        <stop offset="1" stop-color="#ffc331" />
                                    </linearGradient>
                                </defs>
                                <path
                                    d="M55.44,0C27.09,0,28.86,12.29,28.86,12.29l.03,12.74h27.06v3.83H18.15S0,26.8,0,55.41s15.84,27.59,15.84,27.59h9.45v-13.27s-.51-15.84,15.58-15.84h26.83s15.08,.24,15.08-14.57V14.83S85.07,0,55.44,0Zm-14.92,8.57c2.69,0,4.86,2.18,4.86,4.87,0,2.69-2.18,4.86-4.87,4.86s-4.86-2.18-4.86-4.87c0-1.29,.51-2.52,1.42-3.43,.91-.91,2.15-1.43,3.44-1.42Z"
                                    style="fill: url(#linear-gradient);" />
                                <path
                                    d="M56.25,111.11c28.35,0,26.58-12.3,26.58-12.3l-.03-12.74h-27.06v-3.82h37.8s18.14,2.06,18.14-26.55-15.84-27.59-15.84-27.59h-9.45v13.28s.51,15.84-15.58,15.84h-26.84s-15.08-.24-15.08,14.57v24.5s-2.28,14.82,27.34,14.82Zm14.92-8.57c-2.69,0-4.86-2.18-4.86-4.87,0-2.69,2.18-4.86,4.87-4.86s4.86,2.18,4.86,4.87c0,1.29-.51,2.52-1.42,3.44-.91,.91-2.15,1.43-3.44,1.43Z"
                                    style="fill: url(#linear-gradient-2);" />
                            </svg></p>
                        <div class="skill-bar faded">
                            <div class="skill-bar" data-progress="10"></div>
                        </div>
                    </section>
            </section>
            <hr>
            <section>
                <h2 class="reveal">@adamsochorec</h2><br>
                <section class="grid-container">
                    <ul>
                        <li class="reveal"><a href="https://www.brothers-brick.com/2017/08/21/forgotten-not-gone/">The Brothers Brick</a></li>
                        <li class="reveal"><a target="_blank" rel="noopener noreferrer" href="https://gjjlc.lixin.edu.cn/jdxw/109749.htm">Shanghai Lixin University</a></li>
                        <li class="reveal"><a target="_blank" rel="noopener noreferrer" href="https://gjjlc.lixin.edu.cn/jdxw/106321.htm">Shanghai Lixin University</a></li>
    <li class="reveal"><a target="_blank" rel="noopener noreferrer" href="https://www.divadlodisk.cz/repertoar/hrdina-zapadu-83">Divadlo Disk</a></li>
    <li class="reveal"><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/p/CS_WpX9Kj4O/?igshid=YmMyMTA2M2Y=">Divaldo Disk</a></li>

                    </ul>
                    <ul>
                        <li class="reveal"><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/p/CPkl9MtKWiz/?igshid=YmMyMTA2M2Y=">Divadlo Na Vinohradech</a></li>
    <li class="reveal"><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/p/CNNNkt_rNUn/?igshid=YmMyMTA2M2Y=">Barae</a></li>
    <li class="reveal"><a target="_blank" rel="noopener noreferrer" href="https://www.artivistlab.info/purano-hangos/exhibitions-photo-album">Artivist Lab</a></li>
    <li class="reveal"><a target="_blank" rel="noopener noreferrer" href="https://www.respekt.cz/galerie/cool-kids-saving-hot-planet">Respekt</a></li>
    <li class="reveal"><a target="_blank" rel="noopener noreferrer" href="https://www.hatefree.cz/clanky/tamara-moyzes-2">HateFree</a></li>
    
                    </ul>
                </section>
                <hr>
            </section>
            <section class="contact-form-section">
                <h2 class="reveal">Contact</h2>
                <br><br>
                <form id="contactForm" onclick="loading()"
                    action="https://formsubmit.co/2007080c2cf8bd2ebb68506e7aa98c5f"
                    method="POST" novalidate
                    enctype="multipart/form-data">
                    <!-- Email invisibilty -->
                    <section class="grid-container contact-form reveal">
                        <section class="grid-item">
                            <label for="email">
                                <p>Email *</p>
                            </label>
                                <input type="email" id="email" name="Email" placeholder="example@domain.dk"
                                    required />
                           <br><br>
                            <label for="subject">
                                <p>Subject *</p>
                            </label>
                                <input type="text" id="subject" name="_subject" required
                                    placeholder="Hi">
                            <br><br>
                        </section>
                        <section class="grid-item">
                            <label for="firstName">
                                <p>First Name</p>
                            </label>
                                <input type="text" id="firstName" name="First Name" placeholder="Franz" />
                            <br><br>
                            <label for="surname">
                                <p>Surname</p>
                            </label>
                                <input type="text" id="surname" name="surname" placeholder="Kafka" />
                           <br><br>
                        </section>
                    </section>
                    <section class="reveal">
                        <label for="message">
                            <p>Message *</p><br>
                        </label>
                            <textarea name="Message" rows="7" required
                                placeholder="Your questions or comments"></textarea>
                        <br><br>
                        <div class="btn-area flex-center">
                            <button id="btn" class="submit-btn" type="submit">
                                Sumbit contact form
                            </button>
                            <div class="btn-shadow"></div>
                        </div>
                        <br><br><br>
                        <input type="hidden" name="_captcha" value="false"><!-- Spam captcha deactivation -->
                        <input type="hidden" name="_next" value="https://adamsochorec.com/success">
                        <!-- Redirect to the success page -->
                    </section>
                </form>
            </section>
        </article>
    </main>
    <script src="/scripts/about.js"></script>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
</body>

</html>