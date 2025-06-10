<template>
  <body id="success" class="noindex">
    <main>
      <article class="wrapper-narrow flex-center">
        <div class="pathname-container"></div>
        <div class="pathname-container"></div>

        <div class="lottie">
          <dotlottie-player
            src="/assets/lottie/success.lottie"
            background="transparent"
            speed="1"
            autoplay
          ></dotlottie-player>
        </div>
        <br />

        <h1>Form submitted<br />successfully!</h1>
        <br />
        <h2>
          <a href="/"
            >Return to the homepage
            <svg
              id="chevron-right"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 384 512"
            >
              <path
                d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"
              />
            </svg>
          </a>
        </h2>
        <hr role="separator" />
      </article>
    </main>
  </body>
</template>
