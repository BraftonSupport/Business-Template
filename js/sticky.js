jQuery(document).ready(function($){
  
  var mn = $(".site-header");
      mns = "scrolled";
      hdr = $('.site-header').height();

  $(window).scroll(function() {
    if( $(this).scrollTop() > hdr ) {
      mn.addClass(mns);
    } else {
      mn.removeClass(mns);
    }
  });

});