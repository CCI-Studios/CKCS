(function($){
  $(function(){
    initCarousel();
  });
  function initCarousel(){
    $(".view-header-images .view-content").slick({
      arrows: true,
      slidesToShow: 1
    });
  }
})(jQuery);
