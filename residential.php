<?php /* Template Name: Residential Page */ get_header('2'); ?>

	<main role="main">
		<!-- section -->
                <section class="mainContent">
                    
                    
                    <div class="headerBanner banner-3">
			<h1><?php the_title(); ?></h1>
                        <p>BRIEF SUMMARY OF SERVICES HERE AND HERE</p>
                    </div> 
                    <div class="clearfix"></div>
                    
                    <div class="resultsArea">
                        <div class="resultsSection">
                            <h2>RESIDENTIAL</h2>
                            <p>QUALITY YOU DESERVER, DEPENDABILITY YOU COUNT ON.</p>
                        </div>
                    </div>

                    <div class="commercialPostContainer">
                            <div id="gallery">
                                <div id="panel">

                                    <img  id="largeImage" src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-2.jpg" alt="gallery" >
                                    <h3>IMAGE GALLERY</h3>
                                </div><!-- panel -->

                                <div id="thumbs">

                                    <?php
                                    $args = array( 'post_type' => 'gallery' ,'cat'      => 9, 'posts_per_page' => 3);
                                     $loop = new WP_Query( $args );
                                     while ( $loop->have_posts() ) : $loop->the_post(); ?>


                                      <?php the_post_thumbnail('full');
                                     endwhile;
                                      ?>


                                                    
                                </div><!-- thumbs -->
                            </div><!-- gallery -->




                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                                <!-- article -->
                                <article id="post-<?php the_ID(); ?>" <?php post_class('commercialPost'); ?>>

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
                                
                </div> <!-- commercialPostContainer -->              
                        
                <div class="FocusArea">
                    <h2>AREAS OF FOCUS</h2>
                    <p>WHAT WE DO IN COMMERCIAL CONSTRUCTION</p>
                    
                         <?php    
                              $args = array( 'post_type' => 'focus','cat' => 9, 'order' => 'ASC',  'posts_per_page' => '3' );  
                              $loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post();?>  
                    
                    
                             <div class="focusPost">  
                                <span>
                                    <?php the_post_thumbnail(); ?>
                                    <h3><?php the_title(); ?></h3>
                                </span>      
                            
                                 <?php the_content(); ?>
                            </div>
                             
                            <?php endwhile; ?>
                </div><!-- focusArea -->
                        
                <div class="commercialIcons">
                    <div class="IconArea">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-10.png" alt="icon-10" >
                        
                                <h3>
                                    SKILLED & EXPEIRIENCED<BR />
                                    PROFESSIONALS
                                </h3>
                        
                    </div>
                    <div class="IconArea">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-11.png" alt="icon-11" >
                        <h3>
                            BIG-CAPABILITIES WITH<BR />
                            SMALL BUSINESS SERVICES
                        </h3>
                    </div>
                    <div class="IconArea">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-12.png" alt="icon-12" >
                        <h3>
                            PROFESSIONAL<BR />
                            PROJECT MANAGERS
                        </h3>
                    </div>
                </div><!--commercialIcons -->
                
                 <div class="clientArea">
                    <h2>WHAT OUR CLIENTS SAY...</h2>
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

                                         <a class="blue-button parallelogram" href="#"><span class="skewFix">CONTACT US</span></a>
                                         
                            </div>
                            <div class="triangle"></div>
                        
                        </div>
                             
                            <?php endwhile; ?>

                    </div><!--latestNewsArea -->
                    
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
