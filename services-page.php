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
                        
                    <div class="clearfix"></div>
                        <div class="contactArea">
                            <h2>LET'S GET STARTED</h2><br />
                            <p>WITH YOUR RESIDENTIAL AND COMMERCIAL PROJECT</p>
                            <a class="button parallelogram" href="#"><span class="skewFix">CONTACT US</span></a>
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
