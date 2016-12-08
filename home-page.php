<?php /* Template Name: Home Page */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="mainSection homeSection">

			
                    <div class="residentialSlide" id="leftslide">
                    
                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                                <!-- article -->
                                <article id="post-<?php the_ID(); ?>" <?php post_class('mainContent homeContent'); ?>>

                                    <h2>RESIDENTIAL</h2>

                                    <h3>QUALITY RESULTS &amp; DEPENDABLE WORK</h3>

                                        <?php the_content(); ?>
                                    
                                    <a class="button parallelogram" href="#"><span class="skewFix">LEARN MORE</span></a>

                                        <?php comments_template( '', true ); // Remove if you don't want comments ?>

                                        <br class="clear">

                                        <?php edit_post_link(); ?>

                                </article>
                                <!-- /article -->
                                
                                
 
                        <?php endwhile; ?>
                                

                        <?php else: ?>
                                
                          
                        
                    </div>   
                    
                          

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
                        
                        <div class="commercial pollSlider" id="rightSlide">
                            <div class="commercialContent">
                                <h3>COMMERCIAL</h3>
                                <a class="button parallelogram" href="#"><span class="skewFix">LEARN MORE</span></a>
                            </div>
                        </div>
                        <div id="pollSlider-button">
                            <span><i class="fa fa-caret-left" aria-hidden="true"></i></span>
                            <span><p>NEXT:</p></span>
                            <p>COMMERCIAL</p>
                            <span><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                        </div>
                        
                        <div class="arrows">
                            <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                        </div>

		</section><!-- homeSection -->
                <div class="clearfix"></div>
                <section class="second">
                    
                    <!-- nav -->
                    <nav class="nav secondNav" role="navigation">
                        <div class="navContainer">
                        <?php html5blank_nav(); ?>
                    
                       <div class="secondSocialIcons">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-houzz" aria-hidden="true"></i></a>
                        </div>
                    
                        </div><!--navContainer -->
                    </nav><!-- /nav -->
                    <div class="ourWork">
                        <div class="leftShade">
                            
                            <div class="nonSkew">
                                <h2>
                                    OUR<br />
                                    WORK
                                </h2>
                                <p>
                                    EXPERT PROJECT MANAGERS
                                </p>

                                <a class="blue-button parallelogram" href="#"><span class="skewFix">LEARN MORE</span></a>
                            </div><!-- nonSkew -->
                              
                            
                            
                        </div><!-- leftShade -->
                        
                       
                        
                         <div class="resultsArea">
                             <div class="resultsContainer"> 
                              <div class="resultsSection">
                                <h2>PROVEN RESULTS</h2>
                                <p>ON A WIDE RANGE OF CONSTRUCTION PROJECTS</p>
                               
                                
                            </div><!-- resultsSection -->  
                             
                             
                             
                                     <?php    
                              $args = array( 'post_type' => 'services','order' => 'ASC', 
                                  'posts_per_page' => '3' );  
                              $loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post('resultsPost');?>        
                                
                                <div class="resultsImg">  
                                  <?php the_post_thumbnail('full'); ?>
                                    <h2><?php the_title(); ?></h2><br /> 
                                    <h3><?php echo get_post_meta($post->ID, 'sub-title', true); ?></h3>
                                    <a class="blue-button parallelogram" href="#"><span class="skewFix">LEARN MORE</span></a>
                                </div>
                             
                             
                                
                              
                             <?php endwhile; ?>
                             
                            
                             </div><!-- resultsContainer -->  
                        </div><!-- resultsArea -->
                    </div><!-- ourWork -->
                    
                    
                    
                </section><!-- secondSection -->
                <div class="clearfix"></div>
                <section class="thirdSection">
                    <div class="ourTeam">
                        <div class="rightSide">
                            <div class="nonSkew">
                                    <h2>
                                    OUR<br />
                                    TEAM
                                </h2>
                                <p>EXPERIENCE & EXPERTISE</p>
                                 <a class="blue-button parallelogram" href="#"><span class="skewFix">ABOUT US</span></a>
                            </div>
                           
                        </div>
                        
                    </div><!-- ourTeam -->
                    <div class="clientArea">
                        <h2>SATISFIED CLIENTS</h2>
                        <h3>A NEW STANDARD FOR EXCEDING EXPECTATIONS</h3>
                        <div class="leftClients">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-image.png" alt="client" >
                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hardhat-2.png" alt="client" ></span>
                        </div>
                        <div class="rightClients">
                             <?php    
                              $args = array( 'post_type' => 'testimonials','order' => 'rand', 
                                  'posts_per_page' => '1' );  
                              $loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post();?>        
                                
                            <span class="leftArrow">&#9668;</span>
                            
                                <div class="quoteBox"> 
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quote-divider.png" alt="quote" >
                                    <?php the_content(); ?>
                                    <h2><?php the_title(); ?></h2><br /> 
                                    <h3><?php echo get_post_meta($post->ID, 'sub-title', true); ?></h3>
                                    <span><p><?php  the_category();  ?></p></span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bottom-divider.png" alt="quote" class="bottomImg">
                                </div>
                             
                            <span class="rightArrow">&#9658;</span> 
                                
                              
                             <?php endwhile; ?>
                        </div>
                    </div><!-- clientAreaa -->
                    
                    <div class="clearfix"></div>
                    
                    <div class="commercialText">
                         <?php    
                              $args = array( 'post_type' => 'commercial','cat' => 5, 'order' => 'ASC',  'posts_per_page' => '1' );  
                              $loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post();?>        
                                
                        <?php the_content(); ?>
                             
                            <?php endwhile; ?>
                    </div> 
                    
                    
                    
                    <div class="commercialLogos">
                         <?php    
                              $args = array( 'post_type' => 'commercial','order' => 'rand', 
                                  'posts_per_page' => '4' );  
                              $loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post();?>          
                                
                        <span><?php the_post_thumbnail('full'); ?></span>
                             
                            <?php endwhile; ?>
                    </div>
                    <div class="clearfix"></div>
                    
                     
                    <div class="latestNewsArea">
                        
                        <div class="newsHeader">
                            <h2>LATEST NEWS</h2>
                        </div>
                        
                        <div class="newsSocialIcons">
                            <h3>FOLLOW US</h3>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-houzz" aria-hidden="true"></i></a>
                        </div>
                        
                       <?php    
                              $args = array( 'post_type' => '','cat'      => 6,'orderby' => 'menu_order date',	'order'   => 'ASC',  'posts_per_page' => '3' );  
                              $loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post();?>        
                                
                        
                        <div class="thePost">
                            
                            <div class="firstHalf">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                       <?php the_post_thumbnail('full'); ?>
                                </a>
                            </div>    
                            
                            
                            <div class="secondHalf" >
                                <span class="date"><p><?php the_time('F j, Y'); ?></p> </span>
                                        <h2>
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                        </h2>

                                        <span class="divider"></span>

                                         <a class="blue-button parallelogram" href="#"><span class="skewFix">CONTACT US</span></a>
                                         
                            </div>
                            <div class="triangle"></div>
                        
                        </div>
                             
                            <?php endwhile; ?>

                    </div><!--latestNewsArea -->
                    
                    <div class="clearfix"></div>
                    
                    <div class="subscribeArea">
                        <h2>SUBSCRIBE</h2><br />
                        <h3>GET ALL THE LATEST NEWS AND UPDATES</h3>
                        <span class="emailLink"><?php echo do_shortcode('[gravityform id="1" title="true" description="true"]'); ?></span>
                        
                        <a href="#"><p>OUR PRIVACY POLICY</p></a>
                    </div>
                    
                     <div class="clearfix"></div>
                    
                    <div class="contactArea">
                        <h2>LET'S GET STARTED</h2><br />
                        <p>WITH YOUR RESIDENTIAL AND COMMERCIAL PROJECT</p>
                        <a class="button parallelogram" href="#"><span class="skewFix">CONTACT US</span></a>
                    </div>
                </section>
                
	</main>



<?php get_footer(); ?>
