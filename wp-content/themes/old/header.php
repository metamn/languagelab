<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  
  <title>
    <?php
    /*
     * Print the <title> tag based on what is being viewed.
     */
    global $page, $paged;

    wp_title( '|', true, 'right' );

    // Add the blog name.
    bloginfo( 'name' );

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
	    echo " | $site_description";

    // Add a page number if necessary:
    if ( $paged >= 2 || $page >= 2 )
	    echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

    ?>
	</title>
	
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
  <![endif]-->
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/large.css" charset="utf-8" media="screen and (min-width: 1400px)" rel="stylesheet" type="text/css" />  
  <link href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/wide.css" charset="utf-8" media="screen and (min-width: 1025px) and (max-width: 1399px)" rel="stylesheet" type="text/css" />
  <link href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/tablet.css" charset="utf-8" media="screen and (min-width: 481px) and (max-width: 1024px)" rel="stylesheet" type="text/css" />	
  <link href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/mobile.css" charset="utf-8" media="screen and (max-width: 480px)" rel="stylesheet" type="text/css" />
  <!--[if IE]>
    <link href="/assets/ie.css" media="all" type="text/css" rel="stylesheet">  
	<![endif]-->
  
  <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/flowplayer-3.2.6.min.js" type="text/javascript"></script>

  <link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/jquery.init.js" type="text/javascript"></script>  
  <!--
  <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/jquery.grid.js" type="text/javascript"></script>
  -->

  <?php
	  /* We add some JavaScript to pages with the comment form
	   * to support sites with threaded comments (when in use).
	   */
	  if ( is_singular() && get_option( 'thread_comments' ) )
		  wp_enqueue_script( 'comment-reply' );

	  /* Always have wp_head() just before the closing </head>
	   * tag of your theme, or you will break many plugins, which
	   * generally use this hook to add elements to <head> such
	   * as styles, scripts, and meta tags.
	   */
	  wp_head();
  ?>
</head>

<body <?php body_class(); ?>>

<div id="theme-switcher">
  <?php
  if ( function_exists( 'nkthemeswitch_cloud' ) ) {
    echo nkthemeswitch_cloud( $target = '_blank', $passkey = false, $screenshot = false, $addname = false );
  }
  ?>
</div>

<div id="page" class="hfeed">
	<header id="branding" role="banner">
			
			<hgroup>
				<h1 id="site-title">
				  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				    <img title="Languagelab Logo" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/logo.png" /></a></h1>
				<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
			</hgroup>

      <div id="menu" class="block">
        <nav id="access" role="navigation">
				  <h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
				  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
				  <div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
				  <div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
				  <?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
				  <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			  </nav><!-- #access -->			  
			</div>
			
			<div id="social">
		    <ul class="inline-list">
          <li><img title="View more videos on Youtube" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/youtube.png"></li>
          <li><img title="View more images on Flick" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/flickr.png"></li>
          <li><img title="Follow us on Twitter" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/twitter.png"></li>
          <li class="last"><img title="Be our friend on Facebook" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/facebook.png"></li>
        </ul>
			</div>
			
	</header><!-- #branding -->


	<div id="main">
