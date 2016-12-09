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
                        <div class="clearfix"></div>
                        <div class="resultsArea">  
                              <div class="resultsSection">
                                     <h2>MEET OUT TEAM</h2>
                                 <p>DEDICATED CONSTRUCTION PROFESSIONALS</p>
                             </div>
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
