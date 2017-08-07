jQuery(document).ready(function($){
  
  var mn = $(".site-header");
      mns = "scrolled";
      hdr = $('.site-header').height()-10;

  $(window).scroll(function() {
    if( $(this).scrollTop() > hdr ) {
      mn.addClass(mns);
    } else {
      mn.removeClass(mns);
    }
  });

});