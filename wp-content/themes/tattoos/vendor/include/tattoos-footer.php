<?php
$footer_copyright = get_theme_mod('footer_copyright');
if(isset($footer_copyright) && !empty($footer_copyright)){
	$footer_copyright_text = get_theme_mod('footer_copyright');
}else{
	$footer_copyright_text = esc_html__('Copyright &copy; 2017 by ','tattoos');
}
?>
<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
<section class="ts_top_footer_section editable textcenter">
	<div class="container">
		<div class="row">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div>
	</div>
</section>
<?php } ?>
<div claSS="ts_bottom_footer editable">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="ts_copyright">
					<div class="ed_element_wrapper">
						<p class="ed_paragraph"><?php echo esc_html($footer_copyright_text); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>