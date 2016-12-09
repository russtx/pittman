<?php /* Template Name: Our Work Page */ get_header('2'); ?>

	<main role="main">
		<!-- section -->
                <section class="mainContent">
                    
                    
                    <div class="headerBanner banner-5">
			<h1><?php the_title(); ?></h1>
                        <p>WE REWARD CLIENTS WITH QUALITY</p>
                    </div> 
                    <div class="clearfix"></div>
                    
                    <div class="resultsArea">
                        <div class="resultsSection">
                            <h2>QUALITY SINCE XXXX</h2>
                            <p>EACH PROJECT IS THE PURSUIT OF PERFECTION</p>
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

                            <?php
                                    $args = array( 'post_type' => 'WORK' ,'cat'      => 9, 'posts_per_page' => 1);
                                     $loop = new WP_Query( $args );
                                     while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                   
                                     

                                    <div class="commercialPost">
                                        <h3><?php the_title(); ?></h3>
                                        
                                        <div class="postInfo">
                                            <h4>Category:&nbsp; </h4><span class="category">&nbsp;&nbsp; <h4><?php the_category();?></h4></span><br />
                                            <div class="clearfix"></div>
                                            <h4>Project Date:&nbsp; </h4><span class="date">&nbsp;&nbsp; <h4><?php echo get_post_meta($post->ID, 'project-date', true); ?></h4></span><br />
                                            <div class="clearfix"></div>
                                            <h4>Location:&nbsp; </h4><span class="location">&nbsp;&nbsp; <h4><?php echo get_post_meta($post->ID, 'location', true); ?></h4></span><br />
                                            <div class="clearfix"></div>
                                        </div>
                                        
                                         <?php the_content(); // Dynamic Content 
                                        endwhile;
                                         ?>
                                    </div>


                        
                                
                </div> <!-- commercialPostContainer -->   
                
                
                <div class="commercialPostContainer">
                            <div id="gallery">
                                <div id="panel">

                                    <img  id="largeImage" src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-1.jpg" alt="gallery" >
                                    <h3>IMAGE GALLERY</h3>
                                </div><!-- panel -->

                                <div id="thumbs">

                                    <?php
                                    $args = array( 'post_type' => 'gallery' ,'cat'      => 8, 'posts_per_page' => 3);
                                     $loop = new WP_Query( $args );
                                     while ( $loop->have_posts() ) : $loop->the_post(); ?>


                                      <?php the_post_thumbnail('full');
                                     endwhile;
                                      ?>


                                                    
                                </div><!-- thumbs -->
                            </div><!-- gallery -->

                            <?php
                                    $args = array( 'post_type' => 'WORK' ,'cat'      => 8, 'posts_per_page' => 1);
                                     $loop = new WP_Query( $args );
                                     while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                   
                                     

                                    <div class="commercialPost">
                                        <h3><?php the_title(); ?></h3>
                                        
                                        <div class="postInfo">
                                            <h4>Category:&nbsp; </h4><span class="category">&nbsp;&nbsp; <h4><?php the_category();?></h4></span><br />
                                            <div class="clearfix"></div>
                                            <h4>Project Date:&nbsp; </h4><span class="date">&nbsp;&nbsp; <h4><?php echo get_post_meta($post->ID, 'project-date', true); ?></h4></span><br />
                                            <div class="clearfix"></div>
                                            <h4>Location:&nbsp; </h4><span class="location">&nbsp;&nbsp; <h4><?php echo get_post_meta($post->ID, 'location', true); ?></h4></span><br />
                                            <div class="clearfix"></div>
                                        </div>
                                        
                                         <?php the_content(); // Dynamic Content 
                                        endwhile;
                                         ?>
                                    </div>


                        
                                
                </div> <!-- commercialPostContainer -->  
                
                
                <div class="commercialPostContainer">
                            <div id="gallery">
                                <div id="panel">

                                    <img  id="largeImage" src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-3.jpg" alt="gallery" >
                                    <h3>IMAGE GALLERY</h3>
                                </div><!-- panel -->

                                <div id="thumbs">

                                    <?php
                                    $args = array( 'post_type' => 'gallery' ,'cat'      => 10, 'posts_per_page' => 3);
                                     $loop = new WP_Query( $args );
                                     while ( $loop->have_posts() ) : $loop->the_post(); ?>


                                      <?php the_post_thumbnail('full');
                                     endwhile;
                                      ?>


                                                    
                                </div><!-- thumbs -->
                            </div><!-- gallery -->

                            <?php
                                    $args = array( 'post_type' => 'WORK' ,'cat'      => 10, 'posts_per_page' => 1);
                                     $loop = new WP_Query( $args );
                                     while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                   
                                     

                                    <div class="commercialPost">
                                        <h3><?php the_title(); ?></h3>
                                        
                                        <div class="postInfo">
                                            <h4>Category:&nbsp; </h4><span class="category">&nbsp;&nbsp; <h4><?php the_category();?></h4></span><br />
                                            <div class="clearfix"></div>
                                            <h4>Project Date:&nbsp; </h4><span class="date">&nbsp;&nbsp; <h4><?php echo get_post_meta($post->ID, 'project-date', true); ?></h4></span><br />
                                            <div class="clearfix"></div>
                                            <h4>Location:&nbsp; </h4><span class="location">&nbsp;&nbsp; <h4><?php echo get_post_meta($post->ID, 'location', true); ?></h4></span><br />
                                            <div class="clearfix"></div>
                                        </div>
                                        
                                         <?php the_content(); // Dynamic Content 
                                        endwhile;
                                         ?>
                                    </div>


                        
                                
                </div> <!-- commercialPostContainer -->  
                        
                
                        
                
                    
                   
                    
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
