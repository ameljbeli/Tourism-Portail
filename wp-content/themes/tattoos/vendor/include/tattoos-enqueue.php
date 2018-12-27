<?php
/**
 * Enqueue scripts.
 */
function tattoos_scripts() {

	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'),null,true);
	wp_enqueue_script('moment', get_template_directory_uri() . '/assets/js/moment.js', array('jquery'),null,true);
	wp_enqueue_script('carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'),null,true);
	wp_enqueue_script( 'tattoos-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'tattoos-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script('tattoos-custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'),null,true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tattoos_scripts' );

/**
 * Enqueue styles.
 */
function tattoos_styles() {
	wp_enqueue_style('tattoos-defaultbasic', get_stylesheet_uri(), array(), '1', 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1', 'all');	
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1', 'all');	
	wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl-carousel.min.css', array(), '1', 'all');	
	wp_enqueue_style('tattoos-style', get_template_directory_uri() . '/assets/css/custom-style.css', array(), '1', 'all');
	wp_enqueue_style('tattoos-responsive', get_template_directory_uri() . '/assets/css/custom-responsive.css', array(), '1', 'all');
}
add_action( 'wp_enqueue_scripts', 'tattoos_styles' );
?>