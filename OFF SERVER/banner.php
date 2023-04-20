<a aria-describedby="expo-in-kolding" href="/expo-in-kolding">
  <div class="banner-container">
    <h3 id="headline">
      Visit upcomming expo in Kolding, starting in <span id="days"></span> days
    </h3>
  </div>
</a>


<style>
  /* expo banner start */
.banner-container {
  animation: 1s fade;
  animation-delay: 0;
  animation-direction: forwards;
  animation-iteration-count: 1;
  animation-play-state: running;
  animation-timing-function: ease-in-out;
  background: rgb(var(--white-color));
  position: absolute;
  top: var(--nav-bar-top-position);
  transition: var(--transition-1);
  width: 100%;
  z-index: 9;
}
@keyframes fade {
  0% {
    top: -100px;
  }
  100% {
    background-color: var(--text-color);
    top: var(--nav-bar-top-position);
  }
}
.banner-container h3 {
  font-size: var(--fontsize-p);
  font-weight: var(--paragraph-weight);
  padding: 16px;
  text-align: center;
}
.banner-container h3 {
  animation: gradient-background 1s linear infinite alternate;
  -webkit-animation: gradient 15s ease infinite;
  animation: gradient 15s ease infinite;
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  -webkit-background-clip: text;
  background-size: 400% 400%;
  -webkit-text-fill-color: transparent;
}
/* expo banner end */
</style>