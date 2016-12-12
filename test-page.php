<?php /* Template Name: Test Page  */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
</head>
<body>
  <div class="bg">
      <div class="in">testing</div>
    </div>
    <div class="btn">Hover me</div>
    
    
    <div class="bg-2">
      <div class="in-2"></div>
    </div>
    <div class="btn-2">Hover me</div>
    
    <div class="overlord"></div>
    <div class="target"></div>
    
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
                            
                            <div class="firstHalf " >
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                       <?php the_post_thumbnail('full'); ?>
                                </a>
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
                    
                    <div id="slideout">
                        <img src="feedback.png" alt="Feedback" />
                        <div id="slideout_inner">
                          [form code goes here]
                        </div>
                      </div>
    
    
		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
