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
                
        <div id="intro">
          <div class="col col-1">
            <!--<div class="triangle triangle-left"></div>-->
            <div class="arrow arrow-right">
		          <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/arrow-right-red.png">
		        </div>
            <div id="text">
              <?php the_post(); ?>			
              <?php the_content(); ?>
            </div>
            <div class="arrow arrow-left">
		          <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/arrow-left-red.png">
		        </div>
			    </div>
			    
			    <div class="col col-2">
			      <div id="video">
			        <a id="intro-video"  href="http://languagelabsite.s3.amazonaws.com/shiv_intro.flv">
			          <img class="background-video" alt="Play this video" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/background-video.jpg">			     
			        </a>
			     </div>
			    </div>
			    <script language="JavaScript">
	          flowplayer("intro-video", "<?php bloginfo( 'stylesheet_directory' ); ?>/assets/flowplayer-3.2.7.swf", {
              clip:  {
                  autoPlay: false,
                  autoBuffering: true
              }
            })  ;
          </script>
        </div>
			
			  <div id="icons" class="block">			    
			    <ul id="img" class="inline-list">
			      <li>
			        <img title="Companies" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/companies.png">
			      </li>
			      <li>
			        <img title="Universities" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/universities.png">
			      </li>
			      <li>
			        <img title="Study Abroad Agents" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/agents.png">
			      </li>
			      <li>
			        <img title="English Language Schools" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/schools.png">
			      </li>
			      <li class="last">
			        <img title="Individuals" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/individuals.png">
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
			    <div class="arrow arrow-right">
		        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/arrow-right-blue.png">
		      </div>
			    
			    <div id="coming-soon" class="col col-1">
			      <h2>Coming sooon</h2>
			      <ul>
			        <li>Market Leader Live</li>
			        <li>English for Hotels</li>
			      </ul>
			    </div>
			    
			    <div id="contact-form" class="col col-2">
			      <h2>Get A Quick Quote &rarr;</h2>
			      <div class='form block'>
			        <ul class="left">
			          <li>
			            Your name *
			            <input id="name" type="text" class="text" />
			          </li>
			          <li>
			            Your e-mail *
			            <input id="email" type="text" class="text" />
			          </li>
			          <li>
			            Your message *
			            <textarea id="message" type="text"></textarea>
			          </li>
			          <li>
			            <input name="submit" type="submit" value="Get Quote" class="button" />
			          </li>
			        </ul>
			        <ul class="right">
			          <li>
			            Job Title *
			            <input id="job" type="text" class="text" />
			          </li>
			          <li>
			            Phone No. *
			            <input id="phone" type="text" class="text" />
			          </li>
			          <li>
			            Company *
			            <input id="company" type="text" class="text" />
			          </li>			        
			        </ul>
			       </div>
			    </div>
			    
			    <div class="col col-1">&nbsp;</div>
			    <div id="sidebar" class="col col-2">
	          <?php get_sidebar(); ?>
	        </div>
   			    			    
			    <div class="arrow arrow-left">
		        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/arrow-left-blue.png">
		      </div>
			 </div>
		
		  <div id="scroll">
		    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/arrow-scroll.png">	      
		  </div>	 
			 			  
			</div><!-- #content -->
		</div><!-- #primary -->		
		
<?php get_footer(); ?>
