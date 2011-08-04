jQuery.noConflict();
     

jQuery(document).ready(function(){
  
  // Highlight links on startpage
  jQuery(".home #text").hover(
    function () {
      jQuery(".home #targets").addClass('highlight-links');
    }, 
    function () {
      jQuery(".home #targets").removeClass('highlight-links');
    }
  );
  
  jQuery(".home #coming-soon").hover(
    function () {
      jQuery(".home #sidebar").addClass('highlight-links');
    }, 
    function () {
      jQuery(".home #sidebar").removeClass('highlight-links');
    }
  );
  
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
