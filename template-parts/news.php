<?php

	/*

		Template Name: news

	*/

	get_header();

?>




<!-- <h1>Masonry - horizontalOrder</h1>

<div class="row grid">
  <div class="col-lg-4 grid-item grid-item--height2">111
<img src="http://localhost/acura/wp-content/uploads/2021/09/Layer-24.jpg" alt="">

  </div>
  <div class="col-lg-4 grid-item grid-item--height3">222
	  <img src="http://localhost/acura/wp-content/uploads/2021/09/Layer-5.jpg" alt="">
  </div>
  <div class="col-lg-4 grid-item">3333</div>
  <div class="col-lg-4 grid-item grid-item--height2">444</div>
  <div class="col-lg-4 grid-item"></div>
  <div class="col-lg-4 grid-item grid-item--height3"></div>
  <div class="col-lg-4 grid-item grid-item--height2"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--height2"></div>
  <div class="grid-item grid-item--height3"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--height2"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--height2"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--height2"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>
</div> -->


<!-- <div class="container"> -->
	<!-- <div class="grid">
  <div class="grid-item">
	  
  <img src="http://localhost/acura/wp-content/uploads/2021/09/Layer-5.jpg" alt="">
  </div>
  <div class="grid-item">
	   <img src="http://localhost/acura/wp-content/uploads/2021/09/Layer-24.jpg" alt="">
  </div>
  <div class="grid-item">
	   <img src="http://localhost/acura/wp-content/uploads/2021/09/Layer-7.jpg" alt="">
  </div>
  <div class="grid-item">
	   <img src="http://localhost/acura/wp-content/uploads/2021/09/Layer-24.jpg" alt="">
	</div>
	 <div class="grid-item">
	   <img src="http://localhost/acura/wp-content/uploads/2021/09/Layer-24.jpg" alt="">
	</div>
	 <div class="grid-item">
	   <img src="http://localhost/acura/wp-content/uploads/2021/09/Layer-24.jpg" alt="">
	</div>

</div> -->
<!-- </div> -->

<!-- news -->
<section id="news_sec_1" class="sidebar">
	<div id="news_sec_1_container" class="border-for-left">
		<!-- <div class="bg-layer h-100"> -->
			<!-- <hr class="top-hr"> -->

			<div class="row hr-row m-0">
				<div class="col-lg-12 pb-3 text-center">
					<p class="site_sub_title">NEWS</p>
					<hr>
				</div>
			</div>


			<div class="row ajax-posts grid">
                        <?php
                            $postsPerPage = 6;
                            $args = array(
                                'post_type' => 'our_news',
                                'posts_per_page' => 6
								// 'paged'    => 2
                                // 'tax_query' => array(
                                //     array(
                                //         'taxonomy' => 'product_cat',
                                //         'terms' => 20,
                                //         'field' => 'term_id',
                                //     )
                                // ),
                            );                            
							$loop = new WP_Query($args);
                            while ($loop->have_posts()) : $loop->the_post(); ?>

                            <!-- <div class="col-sm-3"></div> -->
							<div class="col-lg-4 grid-item">
		<img class="img-fluid" src="<?php echo the_post_thumbnail_url(); ?>" alt="">
		<p class="site_sub_title pt-4"><?php echo get_the_date( 'm d Y' ); ?></p>
		<h1 class="site_main_title"><?php echo the_title(); ?></h1>
		<div class="content"><?php echo the_content(); ?></div>
		<div class="d-flex viewmore-bt-div">
			<p class="site_sub_title">READ ON</p>
			<a href="<?php the_permalink(); ?>"><div class="viewmore-btn"><p>></p></div></a>
		</div>
 </div>


                        <?php 
                        endwhile; 
                        wp_reset_postdata();
                        ?>



                    </div>

<?php

	$args = array(
		'post_type' => 'our_news',
		 'posts_per_page' => -1
		
	);
	$Prcount = count( get_posts( $args ) );?>
	<?php if($Prcount > 4){?>
		<div class="more_posts d-flex justify-content-center" Pgcount="<?php echo $Prcount;?>" style="position: relative;top: 77px;">
			<div class="banner-btn">
							<p class="para-a">VIEW MORE ARTICLES</p>
						</div>
		</div>
	<?php }; ?>  

<!-- <div class="row">
	<div class="col-lg-4">
		<img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
		<p class="site_sub_title pt-4"><?php echo get_the_date( 'm d Y' ); ?></p>
		<h1 class="site_main_title"><?php echo the_title(); ?></h1>
		<div class="content"><?php echo the_content(); ?></div>
		<div class="d-flex viewmore-bt-div">
			<p class="site_sub_title">READ ON</p>
			<a href="<?php the_permalink(); ?>"><div class="viewmore-btn"><p>></p></div></a>
		</div>
 </div>
</div> -->
			
			
		<!-- </div> -->
		<hr class="bottom-hr">
	</div>
</section>
<!-- news -->










<?php

	get_footer();

?>