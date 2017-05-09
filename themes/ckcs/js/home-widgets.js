(function($){
  $(function(){
    initCarousel();
  });
  function initCarousel(){
    $(".view-home-widgets .view-content").slick({
      arrows: true,
      slidesToShow: 3,
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
})(jQuery);
