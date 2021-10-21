<?php

	/*

		Template Name: about us

	*/

	get_header();

?>



<section id="common_banner" class="sidebar">
	<div id="common_banner_container" style='background-image: url("<?php echo get_the_post_thumbnail_url(); ?>")'>
		<div class="bg-layer h-100">
			<div class="row m-0 h-100">
				<div class="col-lg-12 h-100">
					<div class="banner_text">
						<h1 data-aos="fade-up">About<b><i> us</i></b> </h1>
						<a href="contact/" data-aos="fade-up">
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


<section id="about_sec_1" class="sidebar">
	<div id="about_sec_1_container" class="border-for-left">
		<!-- <div class="bg-layer h-100"> -->
			<div class="row m-0">
				
				<div class="col-lg-4">
					<!-- <div class="project-div"> -->
						<p class="site_sub_title" data-aos="fade-up">EXCEPTIONAL REFURBISHMENT </p>
						<h1 class="site_main_title" data-aos="fade-up">Above and beyond. </h1>
						<p class="para" data-aos="fade-up"><?php echo get_field('above_and_beyoned'); ?>
						</p>
						
					<!-- </div> -->
				</div>
				<div class="col-lg-8 pl-0">
					<div>
						<img class="img-fluid" src="<?php echo get_field('abus_image_1'); ?>" alt="" data-aos="fade-up">
					</div>
				</div>
			</div>
			<div class="row hr-row m-0">
				<div class="col-lg-12">
						<hr>
				</div>
			</div>
		<!-- </div> -->
	</div>
</section>


<section id="about_sec_2" class="sidebar">
	<div id="about_sec_2_sub">
		<div id="about_sec_2_container" class="border-for-left">
		<!-- <div class="bg-layer h-100"> -->
			<div class="row m-0">
				
				<div class="col-lg-3">
						<p class="site_sub_title" data-aos="fade-up">COMPLETELY BESPOKE</p>
						<h1 class="site_main_title" data-aos="fade-up">As standard</h1>
						<p class="para" data-aos="fade-up">Founded in 2019, based in Based in Essex, and Northumberland, we are a nationwide full service refurbishment contractor dedicated to creating exceptional spaces.
						</p>
				</div>
				<div class="col-lg-4">
					<p class="para" data-aos="fade-up">Our broad sector experience and diverse, professional team can support every aspect of a refurbishment project from concept to delivery, we work closely with our clients to add value every step of the way.
						<br><br>The close working relationships with our clients is key to our success as it is our understanding of the unique requirements of every job that ensures that we deliver the quality that we are synonomous with.
				</p>
				</div>
				<div class="col-lg-5">
					<img class="img-fluid" src="<?php echo get_field('abus_image_2'); ?>" alt="" data-aos="fade-up">
				</div>
			</div>
			<div class="row hr-row m-0">
				<div class="col-lg-12">
						<hr>
				</div>
			</div>
		<!-- </div> -->
		</div>
	</div>
</section>


<section id="about_sec_3" class="sidebar">
	<div id="about_sec_3_container" class="border-for-left">
			<div class="row m-0">
				<div class="col-lg-7">
					<div>
						<img class="img-fluid" src="<?php echo get_field('abus_image_3'); ?>" alt="" data-aos="fade-up">
					</div>
				</div>
				<div class="col-lg-5">
						<p class="para" data-aos="fade-up"><?php echo get_field('section_3'); ?></p>
				</div>
				
			</div>
			<div class="row hr-row m-0">
				<div class="col-lg-12">
						<hr>
				</div>
			</div>
	</div>
</section>


<?php

	get_footer();

?>