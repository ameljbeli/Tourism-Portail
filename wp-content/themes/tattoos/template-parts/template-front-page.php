<?php
/*
Template Name: Homepage
*/ 
get_header(); ?>
<?php if(get_theme_mod("tattoos_home_banner_on_off") != '' && get_theme_mod("tattoos_home_banner_on_off") == 'on'): ?>
<section class="ts_banner_section editable" style="background-image: url(<?php echo esc_url(get_theme_mod("tattoos_bnr_img"));?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1">
				<div class="ts_banner_slider">
					<div class="owl-carousel owl-theme" id="banner_slider">
						<?php if(get_theme_mod("slide1_title") != ''): ?>
						<div class="item">
							<div class="ts_banner_text ed_element_sorting">
								<div class="ed_element_wrapper"><p class="ed_paragraph"><?php echo esc_html(get_theme_mod("slide1_title"));?></p></div>
								<?php if(get_theme_mod("slide1_content") != ''): ?>
								<div class="ed_element_wrapper"><h1 class="ed_heading"><?php echo esc_html(get_theme_mod("slide1_content"));?></h1></div>
								<?php endif;?>
								<div class="ts_banner_btn_wrapper ed_element_sorting">
									<?php if(get_theme_mod("slide1_link1") != ''): ?>
									<div class="left_btn">
										<div class="ed_element_wrapper">
											<a href="<?php echo esc_url(get_theme_mod("slide1_link1"));?>" class="tattoo_btn ed_button"><span class="btn_icon"><span class="ed_element_wrapper"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/thumb.png'); ?>" alt="" class="ed_image" width="18" height="18"></span></span><?php echo esc_html__('join us now','tattoos'); ?></a>
										</div>
									</div>
									<?php endif;?>
									<?php if(get_theme_mod("slide1_link2") != ''): ?>
									<div class="right_btn">	
										<div class="ed_element_wrapper">	
											<a href="<?php echo esc_url(get_theme_mod("slide1_link2"));?>" class="tattoo_btn ed_button"><span class="btn_icon"><span class="ed_element_wrapper"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/calender.png'); ?>" alt="" class="ed_image" width="18" height="18"></span></span><?php echo esc_html__('book now','tattoos'); ?></a>
										</div>
									</div>
									<?php endif;?>
								</div>
							</div>
						</div>
						<?php endif;?>
						<?php if(get_theme_mod("slide2_title") != ''): ?>
						<div class="item">
							<div class="ts_banner_text ed_element_sorting">
								<div class="ed_element_wrapper"><p class="ed_paragraph"><?php echo esc_html(get_theme_mod("slide2_title"));?></p></div>
								<?php if(get_theme_mod("slide2_content") != ''): ?>
								<div class="ed_element_wrapper"><h1 class="ed_heading"><?php echo esc_html(get_theme_mod("slide2_content"));?></h1></div>
								<?php endif;?>
								<div class="ts_banner_btn_wrapper ed_element_sorting">
									<?php if(get_theme_mod("slide2_link1") != ''): ?>
									<div class="left_btn">
										<div class="ed_element_wrapper">
											<a href="<?php echo esc_url(get_theme_mod("slide2_link1"));?>" class="tattoo_btn ed_button"><span class="btn_icon"><span class="ed_element_wrapper"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/thumb.png'); ?>" alt="" class="ed_image" width="18" height="18"></span></span><?php echo esc_html__('join us now','tattoos'); ?></a>
										</div>
									</div>
									<?php endif;?>
									<?php if(get_theme_mod("slide2_link2") != ''): ?>
									<div class="right_btn">	
										<div class="ed_element_wrapper">	
											<a href="<?php echo esc_url(get_theme_mod("slide2_link2"));?>" class="tattoo_btn ed_button"><span class="btn_icon"><span class="ed_element_wrapper"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/calender.png'); ?>" alt="" class="ed_image" width="18" height="18"></span></span><?php echo esc_html__('book now','tattoos'); ?></a>
										</div>
									</div>
									<?php endif;?>
								</div>
							</div>
						</div>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?> 
<section class="ts_about_section editable" style="background-image: url(<?php echo esc_url(get_theme_mod("tattoos_about_img"));?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 ts_about_div ed_element_wrapper_box ed_element_sorting col-xs-12">
				<div class="ts_about_content ed_box ed_element_sorting">
					<div class="ed_element_wrapper">
						<h1 class="ed_heading"><?php echo esc_html(get_theme_mod("aboutus_title"));?></h1>
					</div>
					<div class="ed_element_wrapper">
						<p class="ed_paragraph"><?php echo esc_html(get_theme_mod("aboutus_content"));?></p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>

<?php if(get_theme_mod("tattoos_team_on_off") != '' && get_theme_mod("tattoos_team_on_off") == 'on'): ?>
<section class="ts_team_section editable">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-8 col-lg-offset-1 col-md-offset-2 col-sm-12 col-xs-12 col-sm-offset-0 col-xs-offset-0">
				<div class="tattoo_heading_wrapper ed_element_sorting">
					<div class="ed_element_wrapper"><h2 class="ts_main_heading ed_heading"><?php echo esc_html(get_theme_mod("team_title"));?></h2></div>
					<div class="ed_element_wrapper"><p class="ts_sub_heading ed_subheading"><?php echo esc_html(get_theme_mod("team_content"));?></p></div>
				</div>
			</div>
			<div class="ts_team_member_wrapper ed_element_sorting">
			
				<div class="col-lg-4 col-md-4 ed_element_wrapper_box">
					<div class="ts_team_member ed_box ed_element_sorting">
						<?php if(get_theme_mod("team1_img") != ''): ?>
						<div class="ts_team_img">
							<div class="ed_element_wrapper"><img src="<?php echo esc_url(get_theme_mod("team1_img"));?>" alt="" class="ed_image" width="370" height="403"></div>
						</div>
						<?php endif; ?> 
						<div class="ed_element_wrapper"><h3 class="ed_heading"><?php echo esc_html(get_theme_mod("team1_member_name"));?></h3></div>
						<div class="ed_element_wrapper"><p class="ed_paragraph"><?php echo esc_html(get_theme_mod("team1_member_designation"));?></p></div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-4 ed_element_wrapper_box">
					<div class="ts_team_member ed_box ed_element_sorting">
						<?php if(get_theme_mod("team2_img") != ''): ?>
						<div class="ts_team_img">
							<div class="ed_element_wrapper"><img src="<?php echo esc_url(get_theme_mod("team2_img"));?>" alt="" class="ed_image" width="370" height="403"></div>
						</div>
						<?php endif; ?> 
						<div class="ed_element_wrapper"><h3 class="ed_heading"><?php echo esc_html(get_theme_mod("team2_member_name"));?></h3></div>
						<div class="ed_element_wrapper"><p class="ed_paragraph"><?php echo esc_html(get_theme_mod("team2_member_designation"));?></p></div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-4 ed_element_wrapper_box">
					<div class="ts_team_member ed_box ed_element_sorting">
						<?php if(get_theme_mod("team3_img") != ''): ?>
						<div class="ts_team_img">
							<div class="ed_element_wrapper"><img src="<?php echo esc_url(get_theme_mod("team3_img"));?>" alt="" class="ed_image" width="370" height="403"></div>
						</div>
						<?php endif; ?> 
						<div class="ed_element_wrapper"><h3 class="ed_heading"><?php echo esc_html(get_theme_mod("team3_member_name"));?></h3></div>
						<div class="ed_element_wrapper"><p class="ed_paragraph"><?php echo esc_html(get_theme_mod("team3_member_designation"));?></p></div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>
<?php endif; ?> 
<?php if(get_theme_mod("tattoos_contact_on_off") != '' && get_theme_mod("tattoos_contact_on_off") == 'on'): ?>
<section class="ts_update_section editable">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
				<div class="ts_updation_text ed_element_sorting">
					<div class="ed_element_wrapper"><h1 class="ed_heading"><?php echo esc_html(get_theme_mod("contact_title"));?></h1></div>
					<div class="ed_element_wrapper"><p class="ed_paragraph"><?php echo esc_html(get_theme_mod("contact_content"));?></p></div>
					<div class="ts_update_btn_wrapper ed_element_sorting">
						<?php if(get_theme_mod("contact_join") != ''): ?>
						<div class="left_btn">
							<div class="ed_element_wrapper">
								<a href="<?php echo esc_url(get_theme_mod("contact_join"));?>" class="tattoo_btn ed_button"><span class="btn_icon"><span class="ed_element_wrapper"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/call.png'); ?>" alt="" class="ed_image" width="18" height="18"></span></span><?php echo esc_html__('join us now','tattoos'); ?></a>
							</div>
						</div>
						<?php endif;?>
						<?php if(get_theme_mod("contact_book") != ''): ?>
						<div class="right_btn">	
							<div class="ed_element_wrapper">	
								<a href="<?php echo esc_url(get_theme_mod("contact_book"));?>" class="tattoo_btn ed_button"><span class="btn_icon"><span class="ed_element_wrapper"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/envelope.png'); ?>" alt="" class="ed_image" width="18" height="18"></span></span><?php echo esc_html__('book now','tattoos'); ?></a>
							</div>
						</div>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?> 
<?php get_footer(); ?>