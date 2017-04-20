(function($){
  $(function(){
    initCarousel();
  });
  function initCarousel(){
    $(".view-home-widgets .view-content").slick({
      arrows: true,
      slidesToShow: 3
    });
  }
})(jQuery);
