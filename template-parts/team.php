<?php

	/*

		Template Name: team

	*/

	get_header();

?>



<section id="common_banner" class="sidebar">
	<div id="common_banner_container" style='background-image: url("<?php echo get_the_post_thumbnail_url(); ?>")'>
		<div class="bg-layer h-100">
			<div class="row m-0 h-100">
				<div class="col-lg-12 h-100">
					<div class="banner_text" data-aos="fade-up">
						<h1>The<b><i> team</i></b> </h1>
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


<section id="team_sec_1" class="sidebar">
	<div id="team_sec_1_container" class="border-for-left">
		<!-- <div class="bg-layer h-100"> -->
			<div class="row m-0">

				<div class="col-lg-7">
					<div>
						<img class="img-fluid" src="<?php echo get_field('team_photo'); ?>" alt="">
					</div>
				</div>
				
				<div class="col-lg-5">
					<!-- <div class="project-div"> -->
						<p class="site_sub_title" data-aos="fade-up">WE DO COMPLICATED</p>
						<h1 class="site_main_title" data-aos="fade-up">It’s a team effort.</h1>
						<p class="para" data-aos="fade-up"><?php echo get_field('team_datail'); ?>
						</p>
						
					<!-- </div> -->
				</div>
				
			</div>

			<div class="row hr-row m-0">
				<div class="col-lg-12">
					<!-- <div> -->
						<hr>
					<!-- <span></span> -->
					<!-- </div> -->
				</div>
			</div>
		<!-- </div> -->
	</div>
</section>


<section id="team_sec_2" class="sidebar">
	<div id="team_sec_2_container" class="border-for-left">
			<div class="row m-0">
				<div class="col-lg-12">
					<p class="site_sub_title" data-aos="fade-up">THE DIRECTORS</p>
				</div>		
			</div>		
			<div class="row m-0">

				<?php
				if( have_rows('directors') ):
					while( have_rows('directors') ) : the_row();
						?>
						<div class="col-lg-6">
									<div class="dphoto wrapper" style='background-image: url("<?php echo get_sub_field('photo'); ?>")' data-aos="fade-up">
										<div class="hover-text-div">
											<p data-aos="fade-up"><?php echo get_sub_field('hovering_text'); ?></p>
										</div>
									</div>
									<p class="site_sub_title" data-aos="fade-up"><?php echo get_sub_field('designation'); ?></p>
									<h1 class="site_main_title" data-aos="fade-up"><?php echo get_sub_field('name'); ?></h1>
								</div>
						<?php
					endwhile;
				else :
				endif;
				?>

			</div>
	</div>
</section>





<?php

	get_footer();

?>