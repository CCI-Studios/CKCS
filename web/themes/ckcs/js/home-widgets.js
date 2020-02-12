(function($){
  var carousel;
  var paused = false;
  
  $(function(){
    initCarousel();
    initPauseButton();
  });
  function initCarousel(){
    carousel = $(".view-home-widgets .view-content").slick({
      arrows: true,
      slidesToShow: 3,
      autoplay: true,
      autoplaySpeed: 4000,
      responsive: [
        {
          breakpoint: 960,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 740,
          settings: {
            slidesToShow: 1,
            adaptiveHeight: true
          }
        },
      ]
    });
  }
  function initPauseButton(){
    $(".view-home-widgets").append("<div class='pause-container'><button class='pause' title='Pause carousel'>Pause carousel</button></div>");
    $(".view-home-widgets button.pause").on("click", pauseClick);
  }
  function pauseClick(e){
    if (paused) {
      carousel.slick("slickPlay");
    } else {
      carousel.slick("slickPause");
    }
    paused = !paused;
  }
})(jQuery);
