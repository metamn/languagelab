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
  
  // Hide social icons when hover on 'Why Languagelab'
  jQuery("#menu #menu-item-42").hover(    
    function () {
      var width = getWidth();
      if ( width == 'wide') {
        jQuery("#social").hide();
      }    
    }, 
    function () {
      var width = getWidth();
      if ( width == 'wide') {
        jQuery("#social").fadeIn();
      }       
    }
  );
  
  // Hide 'Contact Us' when hover on 'Our Services'
  jQuery("#menu #menu-item-45").hover(    
    function () {
      var width = getWidth();
      if ( width == 'large') {
        jQuery("#menu #menu-item-41").hide();
      } else {
        if ( width == 'wide') {
          jQuery("#menu #menu-item-41").hide();
          jQuery("#menu #menu-item-42").hide();
          jQuery("#social").hide();
        }
      }     
    }, 
    function () {
      var width = getWidth();
      if ( width == 'large') {
        jQuery("#menu #menu-item-41").fadeIn();
      } else {
        if ( width == 'wide') {
          jQuery("#menu #menu-item-41").fadeIn();
          jQuery("#menu #menu-item-42").fadeIn();
          jQuery("#social").fadeIn();
        }
      }       
    }
  );


  // determining the responsive stylesheet in use
  function getWidth() {
    var w = jQuery(window).width();
    if ( w >= 1400 ) {
      return 'large';
    } else {
      if ( w >= 1025 && w < 1400) {
        return 'wide';
      } 
    }
  }
}); 
