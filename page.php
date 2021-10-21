<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package accura-tech-test
 * Template Name: Home
 */

get_header();
?>
<!-- dgfdgfgdgfgdf -->
	<main id="primary" class="site-main">

	<!-- <input type="text" id="kasun_id" value="4"> -->

<section id="home_banner" class="">
	<div id="home_banner_container" style='background-image: url("<?php echo get_field('home_banner'); ?>")'>
		<div class="bg-layer h-100">
			<div class="row m-0 h-100">
				<div class="col-lg-12 h-100">
					<div class="banner_text" data-aos="fade-up">
						<h1 ><b>A STRONG VISION: </b> driving <b><i> innovation</i></b>  to deliver <b><i> the impossible</i></b> </h1>
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



<section id="home_sec_1" class="">
	<div id="home_sec_1_container" class="container">
		<!-- <div class="bg-layer h-100"> -->
			<div class="row m-0">
				<div class="col-lg-8">
					<div>
						<img class="img-fluid" src="<?php echo get_field('project_image'); ?>" alt="" data-aos="fade-up">
					</div>
				</div>
				<div class="col-lg-4 d-flex">
					<div class="project-div">
						<p class="site_sub_title" data-aos="fade-up">PROJECTS</p>
						<h1 class="site_main_title" data-aos="fade-up">Project Name</h1>
						<p class="para" data-aos="fade-up"><?php echo get_field('project_description'); ?>
						<span id="first_text_hidden" class="para-text-hidden">dfsdfd fdfd sfdfsd dsfd dsf fdsf </span>
						 <span id="read_more_id_click" class="read-more-click" onclick="readMoreless()">READ MORE</span>
						</p>
						
						<div class="d-flex viewmore-bt-div" data-aos="fade-up">
							<p class="site_sub_title">VIEW MORE PROJECTS</p>
							<a href=""><div class="viewmore-btn"><p>></p></div></a>
						</div>
					</div>
				</div>
			</div>
		<!-- </div> -->
	</div>
</section>




<!-- counter -->

<section id="home_sec_2" class="">
	<div id="home_sec_2_container" class="container">
		<div class="row m-0 counter_row wrapper" id="counter">
			<div class="col-lg-4 d-flex justify-content-center">
					<div class="text-center">
							<p class="counter-value site_main_title" data-count="21000">0</p>
							<p class="m-para" data-aos="fade-up">litres of paint <br> used in 2019</p>
							<p class="para" data-aos="fade-up">Enough to paint the <br> Golden Gate Bridge twice.</p>
					</div>
			</div>
			<div class="col-lg-4 d-flex justify-content-center sup">
					<div class="text-center">
							<p class="counter-value site_main_title" data-count="34500">0</p>
							<p class="site_main_title">m<sup>2</sup></p>
							<p class="m-para" data-aos="fade-up">of new flooring <br> laid in 2019</p>
							<p class="para" data-aos="fade-up">Enough to cover 35 Wimbledon Centre Courts <br> or 5 Wembley Football Pitches.</p>
					</div>
			</div>
			<div class="col-lg-4 d-flex justify-content-center">
					<div class="text-center">
							<p class="counter-value site_main_title" data-count="129">0</p>
							<p class="m-para" data-aos="fade-up">kitchens removed & installed <br> in 7 weeks</p>
							<p class="para" data-aos="fade-up">Thats just over 3 Kitchens  <br> per day (Mon-Fri working)</p>
					</div>
			</div>
		</div>
	</div>
</section>
<!-- counter end -->


<!-- about us -->
<section id="home_sec_3" class="">
	<div id="home_sec_3_container" class="container">
		<!-- <div class="bg-layer h-100"> -->
			<div class="row m-0">
				<div class="col-lg-4">
					<div class="abt-svs" style='background-image: url("<?php echo get_field('about_us_image'); ?>")' data-aos="fade-up">

					</div>
					<p class="site_sub_title" data-aos="fade-up">COMPLETELY BESPOKE</p>
					<h1 class="site_main_title" data-aos="fade-up">As standard...</h1>
					<p class="para" data-aos="fade-up"><?php echo get_field('about_us'); ?></p>
					<div class="d-flex viewmore-bt-div" data-aos="fade-up">
						<p class="site_sub_title">ABOUT US</p>
						<a href=""><div class="viewmore-btn"><p>></p></div></a>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="abt-svs" style='background-image: url("<?php echo get_field('our_services_image'); ?>")' data-aos="fade-up">
					
					</div>
					<p class="site_sub_title" data-aos="fade-up">OUR SERVICES</p>
					<h1 class="site_main_title" data-aos="fade-up">Pre-construction.  Build.  Delivery.  After care.</h1>
					<p class="para" data-aos="fade-up"><?php echo get_field('our_services'); ?></p>
					<div class="d-flex viewmore-bt-div" data-aos="fade-up">
						<p class="site_sub_title">HOW WE WORK</p>
						<a href=""><div class="viewmore-btn"><p>></p></div></a>
					</div>
				</div>
			</div>
		<!-- </div> -->
		<hr>
	</div>
</section>
<!-- about us -->

<!-- constraction -->
<section id="home_sec_4" class="">
	<div id="home_sec_4_container" class="border-for-left wrapper" style='background-image: url("<?php echo get_field('construction_image'); ?>")'>
		<span class="span_bg_color"></span>
		<!-- <div class="bg-layer h-100"> -->
			<div class="row m-0">
				<div class="col-lg-12">
					<p class="site_sub_title" data-aos="fade-up">FUTURE-PROOF CONSTRUCTION</p>
					<h1 class="site_main_title" data-aos="fade-up">That doesn’t cost the Earth.</h1>
					<p class="para" data-aos="fade-up"><?php echo get_field('construction_text'); ?></p>
					
				</div>
			</div>
		<!-- </div> -->
	</div>
</section>
<!-- constraction -->


<!-- team -->
<section id="home_sec_5" class="" >
	<div id="home_sec_5_container" class="container">
		<!-- <span class="line-top"></span> -->
		<hr>
		<!-- <div class="bg-layer h-100"> -->
			<div class="row m-0" data-aos="fade-up">
				<div class="col-lg-12 team-photo" style='background-image: url("<?php echo get_field('team_photo'); ?>")'>
					<!-- <div>
						<img class="img-fluid" src="<?php echo get_field('team_photo'); ?>" alt="">
					</div> -->
				</div>
			</div>
			<div class="row m-0">
				<div class="col-lg-4">
					
				</div>
				<div class="col-lg-8">
					<p class="site_sub_title" data-aos="fade-up">WE DO COMPLICATED</p>
					<h1 class="site_main_title" data-aos="fade-up">It’s a team effort...</h1>
					<p class="para" data-aos="fade-up"><?php echo get_field('team_text'); ?></p>
					<div class="d-flex viewmore-bt-div" data-aos="fade-up">
						<p class="site_sub_title">MEET THE TEAM</p>
						<a href=""><div class="viewmore-btn"><p>></p></div></a>
					</div>
				</div>
			</div>
		<!-- </div> -->
	</div>
</section>
<!-- team -->


<!-- news -->
<section id="home_sec_6" class="">
	<div id="home_sec_6_container" class="container">
		<!-- <div class="bg-layer h-100"> -->
			<hr class="top-hr">

			<div class="row m-0">
				<div class="col-lg-12 pb-3 text-center">
					<p class="site_sub_title pb-4" data-aos="fade-up">NEWS</p>
				</div>
			</div>

			<div class="row m-0">
				

	<?php 
						$args = array( 
							'post_type' => 'our_news',
							'posts_per_page' => 3, 
							);
						$the_query = new WP_Query( $args ); 
            $count = 1;
						?>
						<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
											// $post_date = get_the_date( 'M j' ); 
											$post_date = get_the_date( 'm d Y' ); 
											// var_dump($post_date);
							?>


	<div class="col-lg-4 col-md-4">
		<img src="<?php echo the_post_thumbnail_url(); ?>" alt="" data-aos="fade-up">
		<p class="site_sub_title pt-4" data-aos="fade-up"><?php echo $post_date; ?></p>
		<h1 class="site_main_title" data-aos="fade-up"><?php echo the_title(); ?></h1>
		<div class="content" data-aos="fade-up"><?php echo the_content(); ?></div>
		<div class="d-flex viewmore-bt-div" data-aos="fade-up">
			<p class="site_sub_title">READ ON</p>
			<a href=""><div class="viewmore-btn"><p>></p></div></a>
		</div>
    </div>         

                <?php  $count++;
						 endwhile;
						wp_reset_postdata(); ?>
						<?php else:  ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>		
				
					
				
			</div>

			<div class="row m-0">
				<div class="col-lg-12 pb-3 d-flex justify-content-center">
					<a href="news/">
						<div class="banner-btn" data-aos="fade-up">
							<p class="para-a">VIEW MORE ARTICLES</p>
						</div>
					</a>
				</div>
			</div>
			
		<!-- </div> -->
		<hr class="bottom-hr">
	</div>
</section>
<!-- news -->






	

	</main><!-- #main -->


<script>
function readMoreless() {
  
  let innerText = document.getElementById("read_more_id_click").innerText;

    if (innerText == "READ MORE") {
      document.getElementById("read_more_id_click").innerText = "READ LESS";
      document.getElementById("first_text_hidden").style.display = "block"; 
    } else {

      document.getElementById("read_more_id_click").innerText = "READ MORE";
      document.getElementById("first_text_hidden").style.display = "none"; 
    }

}
</script>


<script>
	jQuery(document).ready(function($) {
        var a = 0;
        $(window).scroll(function() {
            var oTop = $('#counter').offset().top - window.innerHeight;
            if (a == 0 && $(window).scrollTop() > oTop) {
                $('.counter-value').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                    },
                    {
    
                    duration: 4000,
                    easing: 'swing',
                    step: function() {
                        $this.text(commaSeparateNumber(Math.floor(this.countNum)));
                    },
                    complete: function() {
                        $this.text(commaSeparateNumber(this.countNum));
                    }
                    });
                });
                a = 1;
            }
    
        });


		function commaSeparateNumber(val) {
			while (/(\d+)(\d{3})/.test(val.toString())) {
				val = val.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
			}
			return val;
			}
  
  });
</script>

<?php
get_sidebar();
get_footer();



