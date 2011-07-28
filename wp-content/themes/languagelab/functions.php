<?php

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


?>
