<?php /* Template Name: Full Width */ ?>
<?php get_header(); ?>
<div class="mh-wrapper clearfix"><?php
	while (have_posts()) : the_post();
		get_template_part('content', 'page');
		comments_template();
	endwhile; ?>
</div>
<?php get_footer(); ?>