jQuery.noConflict();
     

jQuery(document).ready(function(){
  
  // Hide 'Contact Us' when hover on 'Our Services'
  jQuery("#menu #menu-item-45").hover(
    function () {
      jQuery("#menu #menu-item-41").hide();
    }, 
    function () {
      jQuery("#menu #menu-item-41").fadeIn();
    }
  );


}); 
