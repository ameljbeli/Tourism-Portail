<?php
$top_bar_text = $topbar_facebook = $topbar_twitter = $topbar_google = $topbar_linkedin = $topbar_pinterest = $topbar_youtube = '';
$top_bar_text = get_theme_mod('top_bar_text');
$topbar_facebook = get_theme_mod('topbar_facebook');
$topbar_twitter = get_theme_mod('topbar_twitter');
$topbar_google = get_theme_mod('topbar_google');
$topbar_linkedin = get_theme_mod('topbar_linkedin');
$topbar_pinterest = get_theme_mod('topbar_pinterest');
$topbar_youtube = get_theme_mod('topbar_youtube');

if(!empty($top_bar_text) || !empty($topbar_facebook) || !empty($topbar_twitter) || !empty($topbar_google) || !empty($topbar_linkedin) || !empty($topbar_pinterest) || !empty($topbar_youtube)){ ?>
<div class="ts_top_header editable">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="ts_top_text">
					<div class="ed_element_wrapper">
						<div class="ed_paragraph"><p><?php echo esc_html($top_bar_text); ?></p></div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="ts_social_wrapper">
					<ul class="ed_element_sorting">
						<?php if(isset($topbar_facebook) && !empty($topbar_facebook)){
						echo '<li class="ed_element_wrapper"><a href="'.esc_url($topbar_facebook).'" class="ed_img_anchor"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>'; 
						}if(isset($topbar_twitter) && !empty($topbar_twitter)){
						echo '<li class="ed_element_wrapper"><a href="'.esc_url($topbar_twitter).'" class="ed_img_anchor"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>'; 
						}if(isset($topbar_google) && !empty($topbar_google)){
						echo '<li class="ed_element_wrapper"><a href="'.esc_url($topbar_google).'" class="ed_img_anchor"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>'; 
						}if(isset($topbar_linkedin) && !empty($topbar_linkedin)){
						echo '<li class="ed_element_wrapper"><a href="'.esc_url($topbar_linkedin).'" class="ed_img_anchor"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>'; 
						}if(isset($topbar_pinterest) && !empty($topbar_pinterest)){
						echo '<li class="ed_element_wrapper"><a href="'.esc_url($topbar_pinterest).'" class="ed_img_anchor"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>'; 
						}if(isset($topbar_youtube) && !empty($topbar_youtube)){
						echo '<li class="ed_element_wrapper"><a href="'.esc_url($topbar_youtube).'" class="ed_img_anchor"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>';
						}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<div class="ts_header_setion editable">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-xs-12">
				<div class="ts_header_wrapper">
					<div class="ts_logo_wrapper">
						<div class="ts_logo">
							<div class="ed_element_wrapper">
							<?php the_custom_logo();?>
							<?php if ( is_front_page() && is_home() ) : ?>
								<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
							<?php else : ?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php endif;

							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
								<p class="site-description"><?php echo esc_html($description) ; ?></p>
							<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="ts_menu_section">
						<div class="ts_menu">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only"><?php echo esc_html__('Toggle navigation','tattoos'); ?></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="ts_menu_wrapper collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<?php wp_nav_menu( array( 'theme_location'  => 'menu-1','depth' => 4 ,'menu_class' => 'nav navbar-nav','container' => false,'fallback_cb'=>'tattoos_menu_editor')); ?>
							</div>
						</div>
					</div>				
				</div>
			</div>
		</div>
	</div>
</div>