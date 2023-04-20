<script>
  // TIMER
  (function countdown() {
    const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;
    let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      nextYear = yyyy + 1,
      monthDay = "01/06/",
      birthday = monthDay + yyyy;

    today = mm + "/" + dd + "/" + yyyy;
    if (today > birthday) {
      birthday = monthDay + nextYear;
    }
    //end

    const countDown = new Date(birthday).getTime(),
      x = setInterval(function countdown() {
        const now = new Date().getTime(),
          distance = countDown - now;

        (document.getElementById("days").innerText = Math.floor(
          distance / day
        )),
          (document.getElementById("hours").innerText = Math.floor(
            (distance % day) / hour
          )),
          (document.getElementById("minutes").innerText = Math.floor(
            (distance % hour) / minute
          ));

        //do something later when date is reached
        if (distance < 0) {
          document.getElementById("headline").innerText = "is right now";
          document.getElementById("countdown").style.display = "none";
          clearInterval(x);
        }
      }, 0);
  })();
</script>

<ul>
  <li><span id="days"></span>days</li>
  <li><span id="hours"></span>Hours</li>
  <li><span id="minutes"></span>Minutes</li>
</ul>
<style>
  /* timer start */
  #kolding-expo #countdown {
    align-items: center;
    text-align: center;
    text-shadow: var(--text-shadow-1);
    transform: var(--text-transform-1);
  }
  #kolding-expo #countdown li {
    display: inline-block;
    font-size: 1rem;
    list-style-type: none;
    padding: 0 1em;
    text-transform: uppercase;
  }
  #kolding-expo #countdown ul {
    padding: 0;
  }
  #kolding-expo #countdown li span {
    display: block;
    font-size: 4.5rem;
  }
  @media only screen and (max-width: 375px) {
    #kolding-expo #countdown li {
      font-size: 0.8rem;
    }
    #kolding-expo #countdown li span {
      font-size: 2.3rem;
    }
  }
  /* timer end */
</style>
