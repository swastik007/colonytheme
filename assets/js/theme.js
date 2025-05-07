jQuery(document).ready(function ($) {
    $('.custom-slider').owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      smartSpeed: 800,
      dots: true,
      nav: false
    });
  });
  