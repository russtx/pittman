<?php /* Template Name: Commercial Page */ get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="mainContent">
                    
                    
                    <div class="headerBanner banner-2">
			<h1><?php the_title(); ?></h1>
                        <p>EXPERT&nbsp; PROJECT&nbsp; MANAGERS</p>
                    </div> 
                    <div class="clearfix"></div>
                    
                    <div class="resultsArea">
                        <div class="resultsSection">
                            <h2>COMMERCIAL</h2>
                            <p>QUALITY YOU DESERVER, DEPENDABILITY YOU COUNT ON.</p>
                        </div>
                    </div>

                    <div id="gallery">
                        <div id="panel">

                            <img  id="largeImage" src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-1.jpg" alt="gallery" >
                            <h3>IMAGE GALLERY</h3>
                        </div><!-- panel -->

                        <div id="thumbs">

                            <?php
                            $args = array( 'post_type' => 'gallery', 'posts_per_page' => 3);
                             $loop = new WP_Query( $args );
                             while ( $loop->have_posts() ) : $loop->the_post(); ?>

                            
                              <?php the_post_thumbnail('full');
                             endwhile;
                              ?>


                                            </div>
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
                        
                <div class="FocusArea">
                    <h2>AREAS OF FOCUS</h2>
                    <p>WHAT WE DO IN COMMERCIAL CONSTRUCTION</p>
                    
                         <?php    
                              $args = array( 'post_type' => 'focus','cat' => 8, 'order' => 'ASC',  'posts_per_page' => '3' );  
                              $loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post();?>  
                    
                    
                             <div class="focusPost">  
                                <span>
                                    <?php the_post_thumbnail(); ?>
                                    <h3><?php the_title(); ?></h3>
                                </span>      
                            
                                 <?php the_content(); ?>
                            </div>
                             
                            <?php endwhile; ?>
                </div> 
                        
                        

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
