<?php
/**
 * archondigital functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package archondigital
 */

if ( ! function_exists( 'archondigital_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function archondigital_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on archondigital, use a find and replace
	 * to change 'archondigital' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'archondigital', get_template_directory() . '/languages' );

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

	add_image_size( 'featured-thumb', 800, 600, TRUE );
	add_image_size( 'featured-thumb-article', 800, 400, TRUE );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'archondigital' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'status',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'archondigital_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'archondigital_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function archondigital_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'archondigital_content_width', 640 );
}
add_action( 'after_setup_theme', 'archondigital_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function archondigital_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'archondigital' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'archondigital' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'archondigital_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function archondigital_scripts() {
	wp_enqueue_style( 'archondigital-style', get_stylesheet_uri() );

	wp_enqueue_script( 'foundation-jquery', get_template_directory_uri() . '/assets/bower_components/jquery/dist/jquery.js', array(), '20151215', false );	

	wp_enqueue_script( 'foundation-what-input', get_template_directory_uri() . '/assets/bower_components/what-input/what-input.js', array('foundation-jquery'), '20151215', true );	
	
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/assets/bower_components/foundation-sites/dist/foundation.js', array('foundation-jquery'), '20151215', true );	

	wp_enqueue_script( 'foundation-app', get_template_directory_uri() . '/assets/js/app.js', array('foundation-jquery'), '20151215', true );	

	wp_enqueue_script( 'archondigital-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'archondigital-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'archondigital_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function filter_media_comment_status( $open, $post_id ) {
	$post = get_post( $post_id );
	if( $post->post_type == 'attachment' ) {
		return false;
	}
	return $open;
}
add_filter( 'comments_open', 'filter_media_comment_status', 10 , 2 );

// insert default title for post format status
add_filter( 'wp_insert_post_data' , 'modify_post_title' , '99', 2 );

function modify_post_title( $data , $postarr ) {

if( has_post_format('status')) {
   if ($data['post_type'] == 'post') {
    $data['post_title'] = 'Status update | ' . date('j F Y');
  }
}
  return $data;
}

// adsense shortcode
function get_adsense($atts) {
	return '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Archon Digital 2015 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-4990847170766317"
     data-ad-slot="8659334290"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>';
}
 
add_shortcode('adsense', 'get_adsense');
