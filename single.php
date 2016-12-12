<?php get_header('2'); ?>

	<main role="main">
	<!-- section -->
        <section class="mainSection">
            
             <div class="headerBanner banner-8">
                            <h1><?php the_title(); ?></h1>
                            <p>SUBHEADER ABOUT THE COMPANY HERE</p>
                        </div> 
                    <div class="clearfix"></div>
                    
                    

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('newsContent'); ?>>
                    
                    <span class="returnLink"><p>Return To <a href="<?php echo home_url(); ?>/news-updates/">News & Updates</a></p></span>

                    <div class="clearfix"></div>

			<!-- post thumbnail -->
                        <span class="newsContentImage">
                            <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
                                </a>
                        </span>
			<?php endif; ?>
			<!-- /post thumbnail -->
                        
                        <div class="clearfix"></div>
                        
                        <div class="recentPost">
                                <div class="recentPostSocials">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></i></a>
                                </div>
                        </div>
                        
                        <div class="clearfix"></div>

			<?php the_content(); // Dynamic Content ?>

			

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>
                
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
