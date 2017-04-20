(function($){
  $(function(){
    $(".menu--main .menu-item--expanded > a").on("click", dropdownClick);
    $(".search-button").on("click", searchButtonClick);
  });
  function dropdownClick(e){
    e.preventDefault();
    $(this).closest("li").toggleClass("open");
  }
  function searchButtonClick(e){
    e.preventDefault();
    $(".search-button").hide();
    $(".block-search").show().find("input[type=search]").focus();
  }
})(jQuery);
