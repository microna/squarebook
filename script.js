(function ($, undefined) {
  // JavaScript code
  // Mobile burger menu
  function burgerMenu() {
    const burger = document.querySelector(".burger");
    const menu = document.querySelector(".menu");
    const body = document.querySelector("body");
    burger.addEventListener("click", () => {
      if (!menu.classList.contains("active")) {
        menu.classList.add("active");
        burger.classList.add("active");
        body.classList.add("locked");
      } else {
        menu.classList.remove("active");
        burger.classList.remove("active");
        body.classList.remove("locked");
      }
    });
    // Here is the place where we change breakpoint
    window.addEventListener("resize", () => {
      if (window.innerWidth > 991.98) {
        menu.classList.remove("active");
        burger.classList.remove("active");
        body.classList.remove("locked");
      }
    });
  }
  burgerMenu();
  
  // FIX: Check if play-button exists before adding event listener
  const playButton = document.getElementById("play-button");
  if (playButton) {
    playButton.addEventListener("click", function () {
      var video = document.getElementById("video");
      console.log(video);
      if (video.paused) {
        video.play();
        this.textContent = "||";
      } else {
        video.pause();
        this.textContent = ">";
      }
    });
  }
  
  // FIX: Check if contact form exists before adding event listener
  const wpcf7Elm = document.querySelector(".wpcf7-form");
  if (wpcf7Elm) {
    const formSubmited = document.querySelector(".form-submitted");
    wpcf7Elm.addEventListener(
      "wpcf7submit",
      function (event) {
        $(wpcf7Elm).css("display", "none");
        // FIX: Check if formSubmited exists
        if (formSubmited) {
          $(formSubmited).css("display", "flex");
          // FIX: Use jQuery addClass instead of classList with jQuery object
          $(formSubmited).addClass("visible");
        }
        console.log('Form submitted successfully');
      },
      false
    );
  }
  
  // FIX: Check if Swiper container exists before initializing
  if (document.querySelector(".mySwiper")) {
    var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  }
})(jQuery);


