<?php


// Constants, definitions
define('LOGO_IMAGE_TITLE', 'Languagelab logo'); //a media titled "Languagelab logo" will be choosen as the logo image





// Filter wp_nav_menu() to add additional links and other output
// - only main menu navigation is considered, sidebar menu will have no 'Home' added
function new_nav_menu_items($items) {
  if ( !(strpos($items, 'Our Services') === false) ) {
	  $homelink = '<li class="menu-item"><a title="' . __('Home') . '" href="' . home_url( '/' ) . '">' . __('Home') . '</a></li>';
	  $items = $homelink . $items;
	}
	return $items;
}
add_filter( 'wp_nav_menu_items', 'new_nav_menu_items' );


// Get the logo
// - search through attachments/media and get the image titled LOGO_IMAGE_TITLE
function logo() {
  $args = array(
   'post_type' => 'attachment',
   'post_title' => LOGO_IMAGE_TITLE
  );
  $logos = get_posts($args);
  if ($logos) {
    $logo = $logos[0];
    if ($logo) {
      echo wp_get_attachment_image($logo->ID, 'full');
    }   
  }
}

?>
