<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

      <?php the_post(); ?>
			
			<?php
		    $attachments = get_images('full');
        if ($attachments) {
          foreach ($attachments as $attachment) {
            echo '<li>';
            echo $attachment;
            echo '</li>';
          }
        }
      ?>
      
      <?php the_content(); ?>
			
			
			</div><!-- #content -->
			
			<div id="video">
			  video ...
			</div>
			
			<div id="icons">
			  Companies
			  Universities
			  ....
			</div>
			
			<div id="coming-soon">
			  Coming sooon...
			</div>
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
