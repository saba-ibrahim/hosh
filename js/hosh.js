(function ($) {
    "use strict";

      var owl = $(".slider_owl");
      owl.owlCarousel({
          slideSpeed: 3000,

          autoplay:true,
          autoplayTimeout:3000,
          autoplayHoverPause:true,

          loop: true,
          nav: true,
          dots: true,
          navText: ["<span class='owl-left'></span>", "<span class='owl-right'></span>"],
          responsive: {
              0: {
                  items: 1
              },
              600: {
                  items: 1
              },
              1000: {
                  items: 1
              }
          }
      });



}(jQuery));
