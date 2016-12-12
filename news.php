<?php /* Template Name: News and Updates Page */ get_header('2'); ?>

	<main role="main">
		<!-- section -->
                <section class="mainContent">
                    
                    
                    <div class="headerBanner banner-6">
			<h1><?php the_title(); ?></h1>
                        <p>WE REWARD CLIENTS WITH QUALITY</p>
                    </div> 
                    <div class="clearfix"></div>
                    
                    
                    <div class="recentPost">
                            <?php    
                              $args = array( 'post_type' => '','cat'      => 6,'orderby' => 'menu_order date',	'order'   => 'ASC',  'posts_per_page' => '1' );  
                              $loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post();?> 
                    
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                       <?php the_post_thumbnail('full'); ?>
                                </a>
                                <span><h4><?php the_time('F j, Y'); ?></h4></span>
                        
                                 <h2>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                </h2>
                    
                                <div class="recentPostSocials">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></i></a>
                                </div>
                    
                    <div class="clearfix"></div>
                    
                                <?php $content = get_the_content();   $trimmed_content = wp_trim_words( $content, 35, '<a href="'. get_permalink() .'"> ...</a>' ); ?>
                                <p><?php echo $trimmed_content; ?></p>
                                <div class="clearfix"></div>
                
                                <a class="blue-button parallelogram" href="<?php the_permalink(); ?>"><span class="skewFix">READ MORE</span></a>
                                
                                
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
