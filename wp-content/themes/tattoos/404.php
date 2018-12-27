<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package tattoos
 */

get_header(); ?>
<div class="ts_error_wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-xs-12 col-lg-offset-2">
				<div class="error_heading">
					<h1><?php esc_html_e( '404', 'tattoos' ); ?></h1>
					<h2><?php esc_html_e( 'Oops! Page Not Found.', 'tattoos' ); ?></h2>
					<p>
						<?php esc_html_e( 'Your Search is not exist here or some other issues, please go to home', 'tattoos' ); ?>
					</p>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="back_btn"><?php esc_html_e('Back To Home', 'tattoos'); ?></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
