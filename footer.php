<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package accura-tech-test
 */

?>

<footer>


<?php 

if ( is_page('contact')) {
	
}
else {
?>

<section id="footer_sec_1" class="">
	<div id="footer_sec_1_container" class="container">
			<div class="row m-0">
				<div class="col-lg-6 col-md-6">
					<h1 class="site_main_title" data-aos="fade-up">Sign up to our news</h1>
					<?php echo do_shortcode('[contact-form-7 id="66" title="News"]'); ?>
					<div class="d-flex bottom">
							<div data-aos="fade-up">
								<p class="para">PROUD TO SUPPORT</p>
								<img class="img-fuild" src="<?php echo get_template_directory_uri();?>/assets/footer_text.png" alt="">
							</div>
							<div data-aos="fade-up">
								<img class="img-fuild two" src="<?php echo get_template_directory_uri();?>/assets/footer-icon.png" alt="">
							</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 right">
					<h1 class="site_main_title" data-aos="fade-up">Contact us</h1>
					<?php echo do_shortcode('[contact-form-7 id="67" title="Contact Us"]'); ?>
				</div>
			</div>
	</div>
</section>

<?php


}

?>
		

<!-- contacts forms -->
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script> -->

<!-- <script type='text/javascript' src='https://masonry-ordered.tasuki.org/js/jquery.masonry.js?ver=1.0.0'></script> -->


<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<script>
		jQuery(function() {      
			let isMobile = window.matchMedia("only screen and (max-width: 1024px)").matches;
			if (isMobile) {
				AOS.init({ disable: true,});
			}else{
				AOS.init();
			}
		}); 
	</script>




</body>
</html>
