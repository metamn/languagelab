jQuery.noConflict();
     

jQuery(document).ready(function(){

  // Scrolling the startpage
  jQuery("#scroll").localScroll();

  // Show quick quote form on startpage
  jQuery('.home #contact-form h2').click(function() {
    jQuery(this).next().toggle('slow');
  });

}); 
