<?php
/**
 * tattoos functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tattoos
 */

if ( ! function_exists( 'tattoos_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tattoos_setup() {

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
		
	add_theme_support('post-thumbnails',array('post')); 
	add_image_size( 'tattoos-blog-single', 750, 575 );
	add_image_size( 'tattoos-blog-full', 1140, 350 );
	add_image_size( 'tattoos-blog-small', 750, 350 );
	

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Tattoos Header Menu', 'tattoos' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'tattoos_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	/*implimenting new feature from 4.5*/
	add_theme_support( 'custom-logo', array(
	   'header-text' => array( 'site-title', 'site-description' ),
	   'flex-width' => true
	) );

	add_editor_style( array(  get_template_directory_uri() . 'assets/css/fonts.css') );
}
endif;
add_action( 'after_setup_theme', 'tattoos_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tattoos_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tattoos_content_width', 640 );
}
add_action( 'after_setup_theme', 'tattoos_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tattoos_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tattoos' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'tattoos' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar', 'tattoos' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add footer widgets here.', 'tattoos' ),
		'before_widget' => '<div class="col-lg-4 col-md-4"><div id="%1$s" class="widget %2$s"><div class="ts_footer_wrapper">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<h2 class="ts_footer_heading ed_heading">',  
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tattoos_widgets_init' );

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

/************************ start Tattoos Require File ************************/
require_once get_template_directory().'/vendor/functions.php';
/************************ close Tattoos Require File ************************/ 