<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package accura-tech-test
 * 
 */

 

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	 <meta name="keywords" content="HTML, CSS, JavaScript">

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<meta http-equiv="Content-Security-Policy" content="block-all-mixed-content">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">	

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'accura-tech-test' ); ?></a>

<?php
// function is_front_page() {

// }
if ( is_page('home') || is_page('about') || is_page('team-2') || is_page('projects') ) {
	$hederlogourl = get_template_directory_uri().'/assets/logo-header.png';
}
else {
	$hederlogourl = get_template_directory_uri().'/assets/dark-header-logo.png';
}

// var_dump($hederlogourl);
?>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
				<?php
			else :
				?>
				<!-- <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p> -->
				<?php
			endif;
			$accura_tech_test_description = get_bloginfo( 'description', 'display' );
			if ( $accura_tech_test_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $accura_tech_test_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->


		<div id="header_s_1" class="wrapper">
			<div id="header_s_1_container">
				<a href="<?php echo site_url();?>"><img class="logo-header" src="<?php echo $hederlogourl;?>" alt=""></a>
			</div>
		</div>


		<div id="header_s_2" class="wrapper">
			<div id="header_s_2_container">
				<img class="header__menu" src="<?php echo get_template_directory_uri();?>/assets/menu.png" alt="">
				<img class="header__menu_d_icn" src="<?php echo get_template_directory_uri();?>/assets/menu_d_icn.png" alt="">
			</div>
		</div>


		<div id="header_s_3" class="wrapper">
			<div id="header_s_3_container" class="header_s_3_container">
				<div class="row">
					<div class="col-lg-12 text-center topicon">
						<img src="<?php echo get_template_directory_uri();?>/assets/topicon.png" alt="">
						<hr>
					</div>
				</div>
			
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'accura-tech-test' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'depth' 		 => 2,
						)
					);
					?>
				</nav><!-- #site-navigation -->

				<div class="header_bottom">
					<!-- <div> -->
						<div class="s-medai d-flex">
							<div><a href=""><img class="icons pr-3" src="<?php echo get_template_directory_uri();?>/assets/fb.png" alt=""></a></div>
							<div><a href=""><img class="icons pr-3" src="<?php echo get_template_directory_uri();?>/assets/insta.png" alt=""></a></div>
							<div><a href=""><img class="icons" src="<?php echo get_template_directory_uri();?>/assets/twitter.png" alt=""></a></div>
						</div>
						<p class="site_sub_title pt-4">HEAD OFFICE</p>
						<p class="para">Fortis Vision Limited
						<br>Dickens House
						<br>3-7 Guithavon Street
						<br>Witham, CM8 1BJ</p>
						<p class="site_sub_title pt-4">OPERATIONS</p>
						<p class="para">Fortis Vision Limited
						<br>3The North Colchester Business Centre
						<br>3340 The Crescent
						<br>3Colchester, Essex CO4 9AD</p>

						<p class="para-m">Registered in England, 
						<br>Company reg.17728231 VAT. 313122169</p>
					<!-- </div> -->

				</div>

			</div>
		</div>

	</header><!-- #masthead -->


