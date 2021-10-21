<?php

	/*

		Template Name: projects

	*/

	get_header();

?>



<section id="common_banner" class="sidebar">
	<div id="common_banner_container" style='background-image: url("<?php echo get_the_post_thumbnail_url(); ?>")'>
		<div class="bg-layer h-100">
			<div class="row m-0 h-100">
				<div class="col-lg-12 h-100">
					<div class="banner_text">
						<h1>Our<b><i> projects</i></b> </h1>
						<a href="contact/">
							<div class="banner-btn">
								<p class="para-a">CONTACT US</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




<!-- <script src="app.js"></script> -->


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
<section id="project_sec_1" class="sidebar">
	<div id="project_sec_1_container" class="border-for-left">
		<!-- <div class="bg-layer h-100"> -->
			<!-- <hr class="top-hr"> -->

			<!-- <div class="row hr-row m-0">
				<div class="col-lg-12 pb-3 text-center">
					<p class="site_sub_title">NEWS</p>
					<hr>
				</div>
			</div> -->


			<div class="ajax-posts wrapper">
                        <?php
                            $postsPerPage = 4;
                            $args = array(
                                'post_type' => 'projectstype',
                                'posts_per_page' => 4
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

                           <div class="row m-0 project-row">

				<div class="col-lg-7">
					<div>
						<img class="img-fluid" src="<?php echo 
site_url(); ?>/wp-content/uploads/2021/09/project-main.jpg" alt="">
					</div>
				</div>
				
				<div class="col-lg-5">
					<!-- <div class="project-div"> -->
						<p class="site_sub_title projsub">PROJECT</p>
						<h1 class="site_main_title">Name of Development</h1>
						<p class="para">Lorem ipsum dolor sit amet, turpis non erat eros a, vulputate magna posuere dui, vestibulum sit torquent felis et massa lorem, sed sodales sed mauris varius, repellat quam vel ut proin. 
						</p>

						<div class="d-flex viewmore-bt-div">
							<p class="site_sub_title">READ MORE</p>
							<a href=""><div class="viewmore-btn"><p>></p></div></a>
						</div>
						
					<!-- </div> -->
				</div>

				<div class="col-lg-12 line">
						<hr>
				</div>
				
			</div>

                        <?php 
                        endwhile; 
                        wp_reset_postdata();
                        ?>



                    </div>

<?php

	$argsy = array(
		'post_type' => 'projectstype',
		 'posts_per_page' => -1,
		 'paged'    => 2
		
	);
	$Prcount = count( get_posts( $argsy ) );
	
	// var_dump($argsy);
	// var_dump($Prcount);
	// var_dump("vfgff");
	?>
	<?php if($Prcount > 4){?>
		<div id="more_posts_newiiii" class="more_posts_new d-flex justify-content-center" Pgcount="<?php echo $Prcount;?>" style="position: relative;top: 77px;">
			<div class="banner-btn">
							<p class="para-a">VIEW MORE PROJECTS</p>
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
			
			

	</div>
</section>








<?php

	get_footer();

?>