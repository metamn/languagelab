jQuery.noConflict();
     

jQuery(document).ready(function(){

  // Scrolling the startpage
  jQuery("#scroll").click(function() {
    jQuery("#intro").toggle('slow');
    jQuery("#icons").toggle('slow');
    jQuery("#more").toggle('slow');
  });

  // Show quick quote form on startpage
  jQuery('.home #contact-form h2').click(function() {
    jQuery(this).next().toggle('slow');
  });

}); 
