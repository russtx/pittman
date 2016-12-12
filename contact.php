<?php /* Template Name: Contact Page */ get_header('2'); ?>

	<main role="main">
		<!-- section -->
                <section class="mainContent contactContainer">
                    
                    <div class="headerBanner banner-7">
                            <h1><?php the_title(); ?></h1>
                            <p>SUBHEADER ABOUT THE COMPANY HERE</p>
                        </div> 
                    <div class="clearfix"></div>
                    <div class="resultsArea">
                        <div class="resultsSection">
                            <h2>LET'S GET STARTED</h2>
                            <p>SUBHEADER HERE AND HERE, AS NEEDED</p>
                        </div>
                        
                    </div>

                    <div class="clearfix"></div>

			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('contactContent'); ?>>

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
                        
                       
                        <div class="contactForm">        
                            <?php echo do_shortcode('[gravityform id="2" title="true" description="true"]'); ?>
                        </div>
                        

                        
                        <div class="contactInfo">
                                <a href="#">
                                    PO BOX 920<br />
                                    Locust Grove, Virginia 22508<br />
                                    
                                    
                                </a>
                            <span class="contactPhone"><a href="tel:5405488233">(540) 548-8233</a><br /></span>
                                <a href="mailto:info@pittmancontruction.com">info@pittmancontruction.com</a>
                            </div>
                        
                        
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
