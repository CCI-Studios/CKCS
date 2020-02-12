(function($){
  $(function(){
    $(".field--name-field-accordion-items .field--name-field-title").click(accordionClick);
  });
  function accordionClick(e) {
    e.preventDefault();
    $(this)
    .closest(".paragraph")
    .toggleClass("open")
    .find(".field--name-field-body")
    .slideToggle();
  }
})(jQuery);
