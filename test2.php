<?php /* Template Name: Test 2 Page  */ get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="homeSection">
   
<body>
 
    
    <div class="hometop">
        <div class="redArea red">

             <div class="res " >

                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                            <!-- article -->
                            <article id="post-<?php the_ID(); ?>" <?php post_class('mainContent homeContent'); ?>>

                                <h2>RESIDENTIAL</h2>

                                <h3>QUALITY RESULTS &amp; DEPENDABLE WORK</h3>

                                    <?php the_content(); ?>

                                <a class="button parallelogram" href="<?php echo home_url(); ?>/residential-construction/"><span class="skewFix">LEARN MORE</span></a>

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


            </div><!-- res --> 

        </div><!--redArea -->
        <div class=" blueArea blue">

            <div class="commercial  " >
                <div class="commercialContent">
                    <h3>COMMERCIAL</h3>
                    <a class="button parallelogram" href="<?php echo home_url(); ?>/commercial-construction/"><span class="skewFix">LEARN MORE</span></a>
                </div>
            </div><!-- commercial -->
            <div id="pollSlider-button">
                <span><i class="fa fa-caret-left" aria-hidden="true"></i></span>
                <span><p>NEXT:</p></span>
                <p>COMMERCIAL</p>
                <span><i class="fa fa-caret-right" aria-hidden="true"></i></span>
            </div>


        </div><!-- blueArea -->
                <div class="arrows">
                    <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                </div>        
    </div> <!--homeTop -->              
    
    
		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
