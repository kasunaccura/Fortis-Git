<?php

	/*

		Template Name: contact

	*/

	get_header();

?>





<section id="contact_s_1" class="sidebar">
    <div id="contact_s_1_sub">
        <div id="contact_s_1_container" class="border-for-left">
            <!-- <div class="bg-layer h-100"> -->
                <div class="row hr-row m-0" data-aos="fade-up">
                    <div class="col-lg-12 text-center">
						  <p class="site_sub_title header">CONTACT</p>
                            <hr>
                    </div>
                </div>

				<div class="row m-0">
                    <div class="col-lg-4">
                        <p class="site_sub_title" data-aos="fade-up">GET IN TOUCH WITH US...</p>
						<div class="para" data-aos="fade-up"><?php the_content(); ?></div>
                    </div>
					 <div class="col-lg-8" data-aos="fade-up">
                       <div style="width: 100%"><iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=414&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="414" frameborder="0"></iframe></div>
                    </div>
                </div>

				 <div class="row hr-row-2 m-0">
                    <div class="col-lg-12 text-center">
                            <hr>
                    </div>
                </div>


        </div>
    </div>
</section>


<section id="contact_s_2" class="sidebar">
	<div id="contact_s_2_container" class="border-for-left">
			<div class="row m-0">
				<div class="col-lg-6 col-md-6">
					<h1 class="site_main_title" data-aos="fade-up">Sign up <b><i>to our news</i></b></h1>
					<?php echo do_shortcode('[contact-form-7 id="66" title="News"]'); ?>
					<div class="d-flex bottom">
							<div>
								<p class="para" data-aos="fade-up">PROUD TO SUPPORT</p>
								<img class="img-fuild" src="<?php echo get_template_directory_uri();?>/assets/scotties.png" alt="">
							</div>
							<div>
								<img class="img-fuild two" src="<?php echo get_template_directory_uri();?>/assets/AFC_POS_RGB WHITE.png" alt="">
							</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 right">
					<h1 class="site_main_title" data-aos="fade-up">Contact <b><i>us</i></b></h1>
					<?php echo do_shortcode('[contact-form-7 id="67" title="Contact Us"]'); ?>
				</div>
			</div>
	</div>
</section>





<?php

	get_footer();

?>