<?php
/**
 * accura-tech-test functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package accura-tech-test
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'accura_tech_test_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function accura_tech_test_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on accura-tech-test, use a find and replace
		 * to change 'accura-tech-test' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'accura-tech-test', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'accura-tech-test' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'accura_tech_test_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'accura_tech_test_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function accura_tech_test_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'accura_tech_test_content_width', 640 );
}
add_action( 'after_setup_theme', 'accura_tech_test_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function accura_tech_test_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'accura-tech-test' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'accura-tech-test' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'accura_tech_test_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function accura_tech_test_scripts() {
	wp_enqueue_style( 'accura-tech-test-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'accura-tech-test-style', 'rtl', 'replace' );

	wp_enqueue_script( 'accura-tech-test-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'accura_tech_test_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


function acura_resources()
{

	

	// wp_register_script( 'app-js', get_template_directory_uri() . '/js/app.js');
	wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.1', true);
	wp_register_script('popper-js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), '1.1', true);
	wp_register_script('owl-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.1', true);
	wp_register_script( 'core-js', get_template_directory_uri() . '/js/core.js');
		wp_register_script( 'projectsjs', get_template_directory_uri() . '/js/projects.js');
	wp_register_script('masnry-js', '//unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array('jquery'), '1.1', true);
	wp_register_script( 'app-js', get_template_directory_uri() . '/js/app.js');
	
	
	// wp_register_script( 'app-js', get_template_directory_uri() . 'app.js');https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js
	// wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array('jquery'), '1.1', true);
	// wp_register_script('rewrerjs', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array('jquery'), '1.1', true);
	// wp_enqueue_script('jquery', 'jquery-3.5.1.min.js', array(), null, true);
	
	// wp_deregister_script('jquery');

	
	wp_enqueue_script('bootstrap-js');
	wp_enqueue_script('popper-js');
	wp_enqueue_script('owl-js');
	// wp_enqueue_script('rewrerjs');
    wp_enqueue_script( 'core-js' );
    wp_enqueue_script( 'projectsjs' );
    wp_enqueue_script( 'masnry-js' );
    wp_enqueue_script( 'app-js' );


    wp_localize_script( 'core-js', 'ajax_posts', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'noposts' => __('No older posts found', 'twentyfifteen'),
    ));

    wp_localize_script( 'projectsjs', 'ajax_poststwo', array(
        'ajaxurltwo' => admin_url( 'admin-ajax.php' ),
        'noposts' => __('No older posts found', 'twentyfifteen'),
    ));

	
}
add_action( 'wp_enqueue_scripts', 'acura_resources' );




function more_post_ajax(){

	?>
    <script>
jQuery(document).ready(function($){
	$('.grid').masonry({
  itemSelector: '.grid-item',
  horizontalOrder: true
});
});
</script>
<?php

    $prPage = (isset($_POST["prPage"])) ? $_POST["prPage"] : 6;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 1;
    header("Content-Type: text/html");
    $args = array(
        'suppress_filters' => true,
        'post_type' => 'our_news',
        'posts_per_page' => $prPage,
        'paged'    => $page
        
    );

	// var_dump("hghfhg h gh hfg");

    $loop = new WP_Query($args);
    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post(); ?>
     

<div class="col-lg-4 grid-item">
	<!-- <input type="text" value="<?php echo $page; ?>"> -->
		<img class="img-fluid" src="<?php echo the_post_thumbnail_url(); ?>" alt="">
		<p class="site_sub_title pt-4"><?php echo get_the_date( 'm d Y' ); ?></p>
		<h1 class="site_main_title"><?php echo the_title(); ?></h1>
		<div class="content"><?php echo the_content(); ?></div>
		<div class="d-flex viewmore-bt-div">
			<p class="site_sub_title">READ ON</p>
			<a href="<?php the_permalink(); ?>"><div class="viewmore-btn"><p>></p></div></a>
		</div>
 </div>


    <?php endwhile;
    endif;
    wp_reset_postdata();
    die();
}
add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');



function more_post_ajax_proj(){
	// var_dump("kjhjkj hfg fgh hgf ghh hggh gh g hgh g hggh gh ghg");

    $prPaget = (isset($_POST["prPaget"])) ? $_POST["prPaget"] : 4;
    $paget = (isset($_POST['pageNumbert'])) ? $_POST['pageNumbert'] : 1;
	// var_dump($paget);
    // $paget = 2;

	// var_dump($prPaget);
	// var_dump($paget);
    header("Content-Type: text/html");
    $args = array(
        'suppress_filters' => true,
        'post_type' => 'projectstype',
        'posts_per_page' => $prPaget,
        'paged'    => $paget
        
    );
	// var_dump($page);
    $loop = new WP_Query($args);
    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post(); ?>
     

		<div class="row m-0 project-row">

			<div class="col-lg-7">
				<div>
					<img class="img-fluid" src="http://localhost/acura/wp-content/uploads/2021/09/project-main.jpg" alt="">
				</div>
			</div>
						
			<div class="col-lg-5">
				<!-- <div class="project-div"> -->
					<p class="site_sub_title projsub">PROJECT</p>
					<h1 class="site_main_title">Name of Development2</h1>
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

    <?php endwhile;
    endif;
    wp_reset_postdata();
    die();
}
add_action('wp_ajax_nopriv_more_post_ajax_proj', 'more_post_ajax_proj');
add_action('wp_ajax_more_post_ajax_proj', 'more_post_ajax_proj');
?>