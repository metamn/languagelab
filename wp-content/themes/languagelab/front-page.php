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
                
        
        <div class="col col-1">
          <div id="text">
            <?php the_post(); ?>			
            <?php the_content(); ?>
          </div>          
			  </div>
			  
			  <div id="background-image">
			    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/background-video.jpg">
			  </div>
			  <div class="col col-2">
			    <div id="video">
			      <a id="intro-video" style="display:block;width:32em;height:22em;" href="http://languagelabsite.s3.amazonaws.com/shiv_intro.flv">
			      </a>
			    </div>
			  </div>
			  <script language="JavaScript">
	        flowplayer("intro-video", "http://localhost/languagelab/wp-content/themes/languagelab/assets/flowplayer-3.2.7.swf", {
            clip:  {
                autoPlay: false,
                autoBuffering: true
            }
          })  ;
        </script>
			
			  <div id="icons" class="block">			    
			    <ul id="img" class="inline-list">
			      <li>
			        <img title="Companies" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/companies.jpg">
			      </li>
			      <li>
			        <img title="Universities" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/universities.jpg">
			      </li>
			      <li>
			        <img title="Study Abroad Agents" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/agents.jpg">
			      </li>
			      <li>
			        <img title="English Language Schools" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/schools.jpg">
			      </li>
			      <li class="last">
			        <img title="Individuals" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/individuals.jpg">
			      </li>
			    </ul>
			    <ul id="txt" class="inline-list">
			      <li>
			        Companies
			      </li>
			      <li>
			        Universities
			      </li>
			      <li>
			        Study Abroad Agents
			      </li>
			      <li>
			        English Language Schools
			      </li>
			      <li class="last">
			        Individuals
			      </li>
			    </ul>
			  </div>
			
			  
			  <div id="more" class="block">
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
