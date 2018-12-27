<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tattoos
 */
$theme_sidebar_position = $thumb_w = $thumb_h = $sidebar_layout = '';
$sidebar_layout = get_theme_mod('sidebar_layout');
if(isset($sidebar_layout) && !empty($sidebar_layout)){
	$theme_sidebar_position = get_theme_mod('sidebar_layout');
}
if(empty($sidebar_layout)){
$theme_sidebar_position = 'right';
}
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(is_single()){ ?>
<div class="blog_post_wrapper_main">
      <div class="blog_thumbnail"> 
	  <?php if (has_post_thumbnail()){ ?>
		<?php the_post_thumbnail('tattoos-blog-single'); ?>
	  <?php } ?>
	  </div>
     </div>
     <div class="blog_desc blog_details_desc">
      <h3><?php the_title(); ?></h3>
		<div class="bottom">
		  <?php tattoos_posted_on(); ?>
		</div>
      <div class="blog_content blog_single_content">
       <?php the_content(); ?>
	   <?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tattoos' ),
				'after'  => '</div>',
			) );
		?>
      </div>
      </div>
<?php }else{ ?>
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
	<?php if ( is_sticky() ) {
		 echo '<span class="featured-post"><i class="fa fa-thumb-tack"></i>' . esc_html__( ' Sticky', 'tattoos' ).'</span>';
	} ?>
	<?php tattoos_posted_on(); ?>  
	</div>
	<div class="blog_content">
		<?php the_excerpt(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tattoos' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	<span class="link_icon">
		<a href="<?php the_permalink(); ?>"><?php echo esc_html__('Read More', 'tattoos'); ?></a>
	</span>
</div>
<?php } ?>
</div><!-- #post-## -->