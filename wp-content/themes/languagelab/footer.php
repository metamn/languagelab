<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<div class="col col-1">
			  <div id="copyright">
			    &copy; 2011 <a title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			    <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a>
			  </div>
			</div>
			
			<div class="col col-2">
			  <div id="social">
			    <ul id="social" class="inline-list">
            <li><img title="View more videos on Youtube" src="wp-content/themes/languagelab/assets/youtube.png"></li>
            <li><img title="View more images on Flick" src="wp-content/themes/languagelab/assets/flickr.png"></li>
            <li><img title="Follow us on Twitter" src="wp-content/themes/languagelab/assets/twitter.png"></li>
            <li><img title="Be our friend on Facebook" src="wp-content/themes/languagelab/assets/facebook.png"></li>
          </ul>
			  </div>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
