<?php /* Template Name: About Page */ get_header('2'); ?>

	<main role="main">
		<!-- section -->
                <section class="mainContent">

			<div class="headerBanner banner-7">
                            <h1><?php the_title(); ?></h1>
                            <p>SUBHEADER ABOUT THE COMPANY HERE</p>
                        </div> 
                    <div class="clearfix"></div>
                    <div class="resultsArea">
                        <div class="resultsSection">
                            <h2>OUR COMPANY</h2>
                            <p>SUBHEADER HERE AND HERE, AS NEEDED</p>
                        </div>
                        
                    </div>

                    <div class="clearfix"></div>
                    
                    <div class="aboutContainer">
                            <div class="aboutImages">
                                <span><img  src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-1.jpg" alt="image-1" ></span>
                                <span><img  src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-2.jpg" alt="image-2" ></span>
                                <span><img  src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-3.jpg" alt="image-3" ></span>
                            </div>

                            <div class="clearfix"></div>

                            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                                <!-- article -->
                                <article id="post-<?php the_ID(); ?>" <?php post_class('aboutContent'); ?>>

                                        <?php the_content(); ?>

                                        <?php comments_template( '', true ); // Remove if you don't want comments ?>

                                        <br class="clear">

                                        <?php edit_post_link(); ?>

                                </article>
                                <!-- /article -->

                            <?php endwhile; ?>

                            <?php else: ?>

                                <!-- article -->
                                <article>

                                        <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                                </article>
                                <!-- /article -->

                            <?php endif; ?>
                                
                    </div>                
                                
                        <div class="clearfix"></div>
                        <div class="resultsArea">  
                              <div class="resultsSection">
                                     <h2>MEET OUT TEAM</h2>
                                 <p>DEDICATED CONSTRUCTION PROFESSIONALS</p>
                             </div>
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        
                        <div class="teamContainer">
                                <div class="leftArrow-2"></div>

                                <?php    
                                      $args = array( 'post_type' => 'team', 'order' => 'ASC',  'posts_per_page' => '3' );  
                                      $loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post();?>  


                                     <div class="ourTeamMembers">  
                                        <span>
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
                                            <h3><?php the_title(); ?></h3>
                                        </span>      
                                         <span class="title"><h3><?php echo get_post_meta($post->ID, 'title', true); ?></h3></span>

                                    </div>

                                    <?php endwhile; ?>
                                <div class="rightArrow-2"></div>
                                
                        </div>        
                        
                        <div class="clearfix"></div>
                        
                        <div class="contactArea">
                        <h2>LET'S GET STARTED</h2><br />
                        <p>WITH YOUR RESIDENTIAL AND COMMERCIAL PROJECT</p>
                        <a class="button parallelogram" href="<?php echo home_url(); ?>/contact-us/"><span class="skewFix">CONTACT US</span></a>
                    </div>
                        
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
                            
                            <div class="firstHalf container " >
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                       <?php the_post_thumbnail('full'); ?>
                                </a>
                                <div class="textbox">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><p class="text">READ MORE</p></a>
                                </div>
                            </div>     
                            
                            
                            <div class="secondHalf" >
                                <span class="date"><p><?php the_time('F j, Y'); ?></p> </span>
                                        <h2>
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                        </h2>

                                        <span class="divider"></span>

                                         <a class="blue-button parallelogram" href="<?php echo home_url(); ?>/contact-us/"><span class="skewFix">CONTACT US</span></a>
                                         
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
                        
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
