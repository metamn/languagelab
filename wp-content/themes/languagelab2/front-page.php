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
			     <a id="intro-video"  href="http://languagelabsite.s3.amazonaws.com/shiv_intro.flv">
			     </a>
			  </div>
			  <script language="JavaScript">
	        flowplayer("intro-video", "<?php bloginfo( 'stylesheet_directory' ); ?>/assets/flowplayer-3.2.7.swf", {
            clip:  {
                autoPlay: false,
                autoBuffering: true
            }
          })  ;
        </script>
			
                
			  <div id="icons" class="block">			    
			    <ul class="inline-list">
			      <li>
			        <img title="Companies" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/companies.jpg">
			        <div>Companies</div>
			      </li>
			      <li>
			        <img title="Universities" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/universities.jpg">
			        <div>Universities</div>
			      </li>
			      <li>
			        <img title="Study Abroad Agents" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/agents.jpg">
			        <div>Study Abroad Agents</div>
			      </li>
			      <li>
			        <img title="English Language Schools" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/schools.jpg">
			        <div>English Language Schools</div>
			      </li>
			      <li class="last">
			        <img title="Individuals" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/individuals.jpg">
			        <div>Individuals</div>
			      </li>
			    </ul>			    
			  </div>
			
			
			  <div id="text">
          <?php the_post(); ?>			
          <?php the_content(); ?>
        </div>
          			  
			  
			  
			  <div id="more">
			    <div id="coming-soon" class="col">
			      <h2>Coming sooon</h2>
			      <ul>
			        <li>Market Leader Live</li>
			        <li>English for Hotels</li>
			      </ul>
			    </div>
			    
			    <div id="sidebar" class="col">
			      <h2>Browse more</h2>
			      <?php get_sidebar(); ?>
			    </div>			    
			 </div>
			 
			  
			</div><!-- #content -->
		</div><!-- #primary -->		
		
<?php get_footer(); ?>
