<?php /* Template Name: Test 2 Page  */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
   
<body>
 
    
    
                        <div class="container">
                            <img src="" alt="">
                            <div class="textbox">
                                <p class="text">TEXT</p>
                            </div>
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
                            
                            
                            <div class="secondHalf "  >
                                
                                <span class="date"><p><?php the_time('F j, Y'); ?></p> </span>
                                        <h2>
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                        </h2>

                                        <span class="divider"></span>

                                         <a class="blue-button parallelogram" href="<?php echo home_url(); ?>/contact-us/"><span class="skewFix">CONTACT US</span></a>
                                         
                            </div>
                            <div class="triangle" ></div>
                            
                        
                        </div>
                             
                            <?php endwhile; ?>

                    </div><!--latestNewsArea -->
                    
                    
    
    
		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
