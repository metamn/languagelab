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
        
        <section id="intro">
          <article>
            <?php the_post(); ?>
            <div class="entry-content">			
              <?php the_content(); ?>
            </div>
          </article>        
          
          <aside>
            <a id="intro-video"  href="http://languagelabsite.s3.amazonaws.com/shiv_intro.flv">
		          <img class="background-video" alt="Play this video" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/background-video.jpg">			     
		        </a>
          </aside>
			    <script language="JavaScript">
	          flowplayer("intro-video", "<?php bloginfo( 'stylesheet_directory' ); ?>/assets/flowplayer-3.2.7.swf", {
              clip:  {
                  autoPlay: false,
                  autoBuffering: true
              }
            })  ;
          </script>
        </section>
			
			  
			  <nav id="icons" class="block">			    
			    <ul id="img" class="inline-list">
			      <li class="companies">
			        <img title="Companies" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/companies.png">
			      </li>
			      <li class="universities">
			        <img title="Universities" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/universities.png">
			      </li>
			      <li  class="agents">
			        <img title="Study Abroad Agents" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/agents.png">
			      </li>
			      <li  class="schools">
			        <img title="English Language Schools" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/schools.png">
			      </li>
			      <li class="last individuals">
			        <img title="Individuals" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/individuals.png">
			      </li>
			    </ul>
			    <ul id="txt" class="inline-list">
			      <li class="companies">
			        Companies
			      </li>
			      <li class="universities">
			        Universities
			      </li>
			      <li  class="agents">
			        Study Abroad Agents
			      </li>
			      <li  class="schools">
			        English Language Schools
			      </li>
			      <li class="last individuals">
			        Individuals
			      </li>
			    </ul>
			  </nav>
						  
			  <section id="more" class="block">
			    <div id="coming-soon" class="col">
			      <h2>Coming sooon</h2>
			      <ul>
			        <li>Market Leader Live</li>
			        <li>English for Hotels</li>
			      </ul>
			    </div>
			    
			    <div id="contact-form" class="col">
			      <h2>Contact Us</h2>
			      <ul>
			        <li>
			          Your name
			          <input id="name" type="text" class="text" />
			        </li>
			        <li>
			          Your e-mail
			          <input id="email" type="text" class="text" />
			        </li>
			        <li>
			          Your message
			          <textarea id="message" type="text"></textarea>
			        </li>
			        <li>
			          <input name="submit" type="submit" value="Send message" class="button" />
			        </li>
			      </ul>
			    </div>			    
			  </section>
			 
        <section id="sidebar" class="block">
          <?php get_sidebar(); ?>
        </section>
			  
			</div><!-- #content -->
		</div><!-- #primary -->		
		
<?php get_footer(); ?>
