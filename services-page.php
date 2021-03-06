<?php /* Template Name: Services Page */ get_header('2'); ?>

<div class="clearfix"></div>

	<main role="main">
		<!-- section -->
                <section class="mainSection">
                    
                    <div class="headerBanner banner-1">
			<h1><?php the_title(); ?></h1>
                        <p>EXPERT&nbsp; PROJECT&nbsp; MANAGERS</p>
                    </div> 
                    <div class="clearfix"></div>
                    
                        <div class="resultsArea">
                             <div class="resultsContainer"> 
                              <div class="resultsSection">
                                <h2>CONSTRUCTION</h2>
                                <p>EXCELLENCE SINCE XXXX.</p>
                               
                                
                            </div><!-- resultsSection -->  
                             
                             
                             
                                     <div class="resultsImg ">
                                         <a href="<?php echo home_url(); ?>/commercial-construction/">
                                             <div class="container-2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/commercial-img.png" alt="commercial" >
                                                <div class="textbox-2">
                                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><p class="text-2"></p></a>
                                                </div>
                                            </div>             
                                                 
                                <h2>COMMERCIAL</h2><br> 
                                <h3>SUBTITLE HERE AND HERE AND HERE</h3></a>
                                    <a class="blue-button parallelogram" href="<?php echo home_url(); ?>/commercial-construction/"><span class="skewFix">LEARN MORE</span></a>
                            </div>
                            
                            <div class="resultsImg">
                                <a href="<?php echo home_url(); ?>/residential-construction/">
                                    <div class="container-2">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/residential-img.png" alt="residential" >
                                        <div class="textbox-2">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><p class="text-2"></p></a>
                                        </div>
                                    </div> 
                                    
                                <h2>RESIDENTIAL</h2><br> 
                                <h3>SUBTITLE HERE AND HERE AND HERE</h3></a>
                                    <a class="blue-button parallelogram" href="<?php echo home_url(); ?>/residential-construction/"><span class="skewFix">LEARN MORE</span></a>
                            </div>
                            
                            <div class="resultsImg">
                                <a href="<?php echo home_url(); ?>/land-development/">
                                    <div class="container-2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/land-develpment-img.png" alt="land-developmentl" >
                                    <div class="textbox-2">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><p class="text-2"></p></a>
                                    </div>
                                    </div> 
                                <h2>LAND DEVELOPMENT</h2><br> 
                                    <h3>SUBTITLE HERE AND HERE AND HERE</h3>
                                    <a class="blue-button parallelogram" href="<?php echo home_url(); ?>/land-development/"><span class="skewFix">LEARN MORE</span></a>
                            </div>
                             
                            
                             </div><!-- resultsContainer -->  
                        </div><!-- resultsArea -->
                        
                    <div class="clearfix"></div>
                        <div class="contactArea">
                            <h2>LET'S GET STARTED</h2><br />
                            <p>WITH YOUR RESIDENTIAL AND COMMERCIAL PROJECT</p>
                            <a class="button parallelogram" href="<?php echo home_url(); ?>/contact-us/"><span class="skewFix">CONTACT US</span></a>
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
                        
                        <div class="clearfix"></div>
                        <div class="postBox">    
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
                        </div>    
                    </div><!--latestNewsArea -->
                    
                     <div class="subscribeArea">
                        <h2>SUBSCRIBE</h2><br />
                        <h3>GET ALL THE LATEST NEWS AND UPDATES</h3>
                        <span class="emailLink"><?php echo do_shortcode('[gravityform id="1" title="true" description="true"]'); ?></span>
                        
                        <a href="#"><p>OUR PRIVACY POLICY</p></a>
                    </div>
                    
                     <div class="clearfix"></div>

		

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
