<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tattoos
 */
$theme_sidebar_position  =  $sidebar_layout = '';
$sidebar_layout = get_theme_mod('sidebar_layout');
if(isset($sidebar_layout) && !empty($sidebar_layout)){
	$theme_sidebar_position = get_theme_mod('sidebar_layout');
}
if(empty($sidebar_layout)){
$theme_sidebar_position = 'right';
}
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog_post_wrapper_main">
		  <div class="blog_thumbnail"> 
		  <?php if (has_post_thumbnail()){ ?>
			<?php 
			if($theme_sidebar_position == 'full'){
				the_post_thumbnail('full');
			}else{
				the_post_thumbnail('tattoos-blog-small');
			}
			?>
		  <?php } ?>
		  </div>
	</div>
	<div class="blog_mk_title">
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	</div>
	<div class="blog_desc blog_details_desc mar_b_30">
		<div class="bottom">
		<?php tattoos_posted_on(); ?>  
		</div>
		<div class="blog_content">
			<p><?php the_excerpt(); ?></p>
		</div>
		<span class="link_icon">
			<a href="<?php the_permalink(); ?>"><?php echo esc_html__('Read More','tattoos'); ?></a>
		</span>
	</div>
</div><!-- #post-## -->
