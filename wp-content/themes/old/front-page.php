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
          
        <div id="video">
			     <a id="intro-video"  href="http://languagelabsite.s3.amazonaws.com/shiv_intro.flv"></a>
			     
			     <img alt="Play this video" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/play_large.png">
			     
			     <div class="info">
			      <h3>Come And Visit English City</h3>
			     </div>
			  </div>
			  <script language="JavaScript">
	        flowplayer("video", "<?php bloginfo( 'stylesheet_directory' ); ?>/assets/flowplayer-3.2.7.swf", {
            clip:  {
                autoPlay: false,
                autoBuffering: true
            }
          })  ;
        </script>
			
			  <div id="targets">			    
		      <ul class="nav">
			      <li>
			        <a href="">Companies</a>
			      </li>
			      <li>
			        <a href="">Universities</a>
			      </li>
			      <li>
			        <a href="">Study Abroad Agents</a>
			      </li>
			      <li>
			        <a href="">English Language Schools</a>
			      </li>
			      <li class="last">
			        <a href="">Individuals</a>
			      </li>
			    </ul>
			  </div>
			  
			
        <div id="text">
          <?php the_post(); ?>			
          <?php the_content(); ?>
        </div>  
			  
			  <div id="sidebar">
		      <h2>Browse more</h2>
		      <?php get_sidebar(); ?>
		    </div>			    
			 
			  
			  <div id="coming-soon">
		      <h2>Coming sooon</h2>
		      <ul>
		        <li><a href="">Market Leader Live</a></li>
		        <li><a href="">English for Hotels</a></li>		        
		      </ul>
		    </div>
			    
			    
			  
			</div><!-- #content -->
		</div><!-- #primary -->		
		
<?php get_footer(); ?>
