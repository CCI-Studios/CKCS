(function($){
  $(function(){
    $(".menu--main .menu-item--expanded > a").on("click", dropdownClick);
  });
  function dropdownClick(e){
    e.preventDefault();
    $(this).closest("li").toggleClass("open");
  }
})(jQuery);
