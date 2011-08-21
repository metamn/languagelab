jQuery.noConflict();
     

jQuery(document).ready(function(){

  // Changing font
  jQuery("#theme-switcher li").click(function() {
    jQuery("body").attr("style", "font-family:" + jQuery(this).html() + ";");
  });

  // Scrolling the startpage
  jQuery("#scroll").localScroll();

  // Show quick quote form on startpage
  jQuery('.home #contact-form h2').click(function() {
    jQuery(this).next().toggle('slow');
  });

}); 
