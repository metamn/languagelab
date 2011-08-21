<?php


// Get post/page images
// get all of the images attached to the current post
function get_images($size = 'thumbnail') {
	global $post;

	$photos = get_children( array('post_parent' => $post->ID, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID') );

	$results = array();

	if ($photos) {
		foreach ($photos as $photo) {
			// get the correct image html for the selected size
			$results[] = wp_get_attachment_image($photo->ID, $size);
		}
	}

	return $results;
}

// Filter wp_nav_menu() to add additional links and other output
// - only main menu navigation is considered, sidebar menu will have no 'Home' added
function new_nav_menu_items($items) {
  if ( !(strpos($items, 'Our Services') === false) ) {
	  $homelink = '<li class="menu-item menu-item-home"><a title="' . __('Home') . '" href="' . home_url( '/' ) . '">' . __('Home') . '</a></li>';
	  $items = $homelink . $items;
	}
	return $items;
}
add_filter( 'wp_nav_menu_items', 'new_nav_menu_items' );



?>
