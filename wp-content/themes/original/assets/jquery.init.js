jQuery.noConflict();
     

jQuery(document).ready(function(){

  // Show quick quote form on startpage
  jQuery('.home #contact-form h2').click(function() {
    jQuery(this).next().toggle('slow');
  });

}); 
