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
  
  $(document).ready(function (){
    // Declare Carousel jquery object
    var owl = $('.homeslider');
  
    // Carousel initialization
    owl.owlCarousel({
        loop:false,
        margin:0,
        navSpeed:5000,
        nav:false,
        dots:true,
        autoplay: true,
        rewind: true,
        items:1
    });
  
  
    // add animate.css class(es) to the elements to be animated
    function setAnimation ( _elem, _InOut ) {
      // Store all animationend event name in a string.
      // cf animate.css documentation
      var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
  
      _elem.each ( function () {
        var $elem = $(this);
        var $animationType = 'animated ' + $elem.data( 'animation-' + _InOut );
  
        $elem.addClass($animationType).one(animationEndEvent, function () {
          $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
        });
      });
    }
  
  // Fired before current slide change
    owl.on('change.owl.carousel', function(event) {
        var $currentItem = $('.owl-item', owl).eq(event.item.index);
        var $elemsToanim = $currentItem.find("[data-animation-out]");
        setAnimation ($elemsToanim, 'out');
    });
  
  // Fired after current slide has been changed
    var round = 0;
    owl.on('changed.owl.carousel', function(event) {
  
        var $currentItem = $('.owl-item', owl).eq(event.item.index);
        var $elemsToanim = $currentItem.find("[data-animation-in]");
      
        setAnimation ($elemsToanim, 'in');
    })
    
    owl.on('translated.owl.carousel', function(event) {
      console.log (event.item.index, event.page.count);
      
        if (event.item.index == (event.page.count - 1))  {
          if (round < 1) {
            round++
            console.log (round);
          } else {
            owl.trigger('stop.owl.autoplay');
            var owlData = owl.data('owl.carousel');
            owlData.settings.autoplay = false; //don't know if both are necessary
            owlData.options.autoplay = false;
            owl.trigger('refresh.owl.carousel');
          }
        }
    });
  
  });

  $(document).ready(function(){
    var owl = $(".team-carousel");
    owl.owlCarousel({
      loop: true,
      margin: 30,
      autoplay: true,
      autoplayTimeout: 5000,
      smartSpeed: 600,
      nav: false,
      dots: true,
      responsive: {
        0: { items: 1 },
        640: { items: 2 },
        768: { items: 3 },
        1200: { items: 3 }
      }
    });

    // Custom navigation
    $(".js-custom-next").click(function(e){
      e.preventDefault();
      owl.trigger("next.owl.carousel");
    });
    $(".js-custom-prev").click(function(e){
      e.preventDefault();
      owl.trigger("prev.owl.carousel");
    });
  });

  jQuery(document).ready(function($){
    $('.testimonials-carousel').owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      dots: true,
      autoplay: true,
      autoplayTimeout: 5000,
      smartSpeed: 600,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1
        },
        992: {
          items: 1
        }
      }
    });
  });
  