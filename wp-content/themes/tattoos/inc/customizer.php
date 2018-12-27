<?php
/**
 * tattoos Theme Customizer
 *
 * @package tattoos
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tattoos_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	//___ Topbar setting___//
    $wp_customize->add_section(
        'tattoos_top_bar',
        array(
            'title'         => __('Topbar Setting', 'tattoos'),
            'priority'      => 21,
        )
    );
	//Topbar text
    $wp_customize->add_setting(
        'top_bar_text',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'top_bar_text',
        array(
            'label'         => __( 'Topbar Text', 'tattoos' ),
            'section'       => 'tattoos_top_bar',
            'type'          => 'text',    
        )
    );
	//Topbar facebook
    $wp_customize->add_setting(
        'topbar_facebook',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        'topbar_facebook',
        array(
            'label'         => __( 'Facebook Link', 'tattoos' ),
            'section'       => 'tattoos_top_bar',
            'type'          => 'text',    
        )
    );
	//Topbar twitter
    $wp_customize->add_setting(
        'topbar_twitter',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        'topbar_twitter',
        array(
            'label'         => __( 'Twitter Link', 'tattoos' ),
            'section'       => 'tattoos_top_bar',
            'type'          => 'text',    
        )
    );
	//Topbar google
    $wp_customize->add_setting(
        'topbar_google',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        'topbar_google',
        array(
            'label'         => __( 'Google+ Link', 'tattoos' ),
            'section'       => 'tattoos_top_bar',
            'type'          => 'text',    
        )
    );
	//Topbar linkedin
    $wp_customize->add_setting(
        'topbar_linkedin',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        'topbar_linkedin',
        array(
            'label'         => __( 'Linkedin Link', 'tattoos' ),
            'section'       => 'tattoos_top_bar',
            'type'          => 'text',    
        )
    );
	//Topbar pinterest
    $wp_customize->add_setting(
        'topbar_pinterest',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        'topbar_pinterest',
        array(
            'label'         => __( 'Pinterest Link', 'tattoos' ),
            'section'       => 'tattoos_top_bar',
            'type'          => 'text',    
        )
    );
	//Topbar youtube
    $wp_customize->add_setting(
        'topbar_youtube',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        'topbar_youtube',
        array(
            'label'         => __( 'Youtube Link', 'tattoos' ),
            'section'       => 'tattoos_top_bar',
            'type'          => 'text',    
        )
    );
	//___ add a panel home page setting ___//
	$wp_customize->add_panel( 'Home-page-Setting', array(
		'title'       => __( 'Home page Setting', 'tattoos' ),
		'priority'      => 22,
	) );
	//___ Banner setting___//
    $wp_customize->add_section(
        'tattoos_banner',
        array(
            'title'         => __('Banner Setting', 'tattoos'),
			'panel' => 'Home-page-Setting',
        )
    );
	$wp_customize->add_setting("tattoos_home_banner_on_off", array(
			"default" => 'off',
			"transport" => "refresh",
			'sanitize_callback' => 'tattoos_radio_sanitize_row',
		));
		$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			"tattoos_home_banner_on_off",
			array(
			'type' => 'radio',
			'label' => __("Banner On/Off", "tattoos"),
			'section' => 'tattoos_banner',
			'choices' => array(
				'on' => __("On", "tattoos"),
				'off' =>__("Off", "tattoos"),
			),
		)
	));	
	// for banner slide 1
		$wp_customize->add_setting("tattoos_bnr_img", array(
			"default" => '',
			"transport" => "refresh",
			'sanitize_callback' => 'esc_url_raw'
		));
		$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize,
			"tattoos_bnr_img",
			array(
				"label" => __("Banner BG Image", "tattoos"),
				"section" => "tattoos_banner",
				"settings" => "tattoos_bnr_img",
				
			)
		));
		//Slide 1
		$wp_customize->add_setting(
			'slide1_title',
			array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			'slide1_title',
			array(
				'label'         => __( 'Slide 1 Title', 'tattoos' ),
				'section'       => 'tattoos_banner',
				'type'          => 'text',    
			)
		);
		$wp_customize->add_setting(
			'slide1_content',
			array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			'slide1_content',
			array(
				'label'         => __( 'Slide 1 Content', 'tattoos' ),
				'section'       => 'tattoos_banner',
				'type'          => 'text',    
			)
		);
		$wp_customize->add_setting(
			'slide1_link1',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);
		$wp_customize->add_control(
			'slide1_link1',
			array(
				'label'         => __( 'Slide 1 Join us Link', 'tattoos' ),
				'section'       => 'tattoos_banner',
				'type'          => 'text',    
			)
		);
		$wp_customize->add_setting(
			'slide1_link2',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);
		$wp_customize->add_control(
			'slide1_link2',
			array(
				'label'         => __( 'Slide 1 Book Now Link', 'tattoos' ),
				'section'       => 'tattoos_banner',
				'type'          => 'text',    
			)
		);
		//Slide 2
		$wp_customize->add_setting(
			'slide2_title',
			array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			'slide2_title',
			array(
				'label'         => __( 'Slide 2 Title', 'tattoos' ),
				'section'       => 'tattoos_banner',
				'type'          => 'text',    
			)
		);
		$wp_customize->add_setting(
			'slide2_content',
			array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			'slide2_content',
			array(
				'label'         => __( 'Slide 2 Content', 'tattoos' ),
				'section'       => 'tattoos_banner',
				'type'          => 'text',    
			)
		);
		$wp_customize->add_setting(
			'slide2_link1',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);
		$wp_customize->add_control(
			'slide2_link1',
			array(
				'label'         => __( 'Slide 2 Join us Link', 'tattoos' ),
				'section'       => 'tattoos_banner',
				'type'          => 'text',    
			)
		);
		$wp_customize->add_setting(
			'slide2_link2',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);
		$wp_customize->add_control(
			'slide2_link2',
			array(
				'label'         => __( 'Slide 2 Book Now Link', 'tattoos' ),
				'section'       => 'tattoos_banner',
				'type'          => 'text',    
			)
		);
		//___ About us setting___//
		$wp_customize->add_section( 
			'tattoos_aboutus',
			array(
				'title'         => __('About us Setting', 'tattoos'),
				'panel' => 'Home-page-Setting',
			)
		);
		$wp_customize->add_setting("tattoos_about_img", array(
			"default" => '',
			"transport" => "refresh",
			'sanitize_callback' => 'esc_url_raw'
		));
		$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize,
			"tattoos_about_img",
			array(
				"label" => __("BG Image", "tattoos"),
				"section" => "tattoos_aboutus",
				"settings" => "tattoos_about_img",
				
			)
		));
		$wp_customize->add_setting(
			'aboutus_title',
			array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			'aboutus_title',
			array(
				'label'         => __( 'Title', 'tattoos' ),
				'section'       => 'tattoos_aboutus',
				'type'          => 'text',    
			)
		);
		$wp_customize->add_setting(
			'aboutus_content',
			array(
				'default' => '',
				'sanitize_callback' => 'sanitize_textarea_field',
			)
		);
		$wp_customize->add_control(
			'aboutus_content',
			array(
				'label'         => __( 'Content', 'tattoos' ),
				'section'       => 'tattoos_aboutus',
				'type'          => 'textarea',    
			)
		);
		//___ team setting___//
		$wp_customize->add_section(
			'tattoos_team',
			array(
				'title'         => __('Team Setting', 'tattoos'),
				'panel' => 'Home-page-Setting',
			)
		);
		$wp_customize->add_setting("tattoos_team_on_off", array(
			"default" => 'off',
			"transport" => "refresh",
			'sanitize_callback' => 'tattoos_radio_sanitize_row',
		));
		$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			"tattoos_team_on_off",
			array(
				'type' => 'radio',
				'label' => __("Team Section On/Off", "tattoos"),
				'section' => 'tattoos_team',
				'choices' => array(
					'on' => __("On", "tattoos"),
					'off' =>__("Off", "tattoos"),
				),
			)
		));	
		$wp_customize->add_setting(
			'team_title',
			array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			'team_title',
			array(
				'label'         => __( 'Title', 'tattoos' ),
				'section'       => 'tattoos_team',
				'type'          => 'text',    
			)
		);
		$wp_customize->add_setting(
			'team_content',
			array(
				'default' => '',
				'sanitize_callback' => 'sanitize_textarea_field',
			)
		);
		$wp_customize->add_control(
			'team_content',
			array(
				'label'         => __( 'Content', 'tattoos' ),
				'section'       => 'tattoos_team',
				'type'          => 'textarea',    
			)
		);
		// team 1
		$wp_customize->add_setting(
			'team1_img',
			array(
				'default-image' => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'team1_img',
				array(
				   'label'          => __( 'First Member Image', 'tattoos' ),
				   'type'           => 'image',
				   'section'        => 'tattoos_team',
				)
			)
		);
		$wp_customize->add_setting(
			'team1_member_name',
			array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			'team1_member_name',
			array(
				'label'         => __( 'First Member Name', 'tattoos' ),
				'section'       => 'tattoos_team',
				'type'          => 'text',    
			)
		);
		$wp_customize->add_setting(
			'team1_member_designation',
			array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			'team1_member_designation',
			array(
				'label'         => __( 'First Member Designation', 'tattoos' ),
				'section'       => 'tattoos_team',
				'type'          => 'text',    
			)
		);
		// team 2
		$wp_customize->add_setting(
			'team2_img',
			array(
				'default-image' => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'team2_img',
				array(
				   'label'          => __( 'Second Member Image', 'tattoos' ),
				   'type'           => 'image',
				   'section'        => 'tattoos_team',
				)
			)
		);
		$wp_customize->add_setting(
			'team2_member_name',
			array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			'team2_member_name',
			array(
				'label'         => __( 'Second Member Name', 'tattoos' ),
				'section'       => 'tattoos_team',
				'type'          => 'text',    
			)
		);
		$wp_customize->add_setting(
			'team2_member_designation',
			array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			'team2_member_designation',
			array(
				'label'         => __( 'Second Member Designation', 'tattoos' ),
				'section'       => 'tattoos_team',
				'type'          => 'text',    
			)
		);
		// team 3
		$wp_customize->add_setting(
			'team3_img',
			array(
				'default-image' => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'team3_img',
				array(
				   'label'          => __( 'Third Member Image', 'tattoos' ),
				   'type'           => 'image',
				   'section'        => 'tattoos_team',
				)
			)
		);
		$wp_customize->add_setting(
			'team3_member_name',
			array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			'team3_member_name',
			array(
				'label'         => __( 'Third Member Name', 'tattoos' ),
				'section'       => 'tattoos_team',
				'type'          => 'text',    
			)
		);
		$wp_customize->add_setting(
			'team3_member_designation',
			array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			'team3_member_designation',
			array(
				'label'         => __( 'Third Member Designation', 'tattoos' ),
				'section'       => 'tattoos_team',
				'type'          => 'text',    
			)
		);
		//___ Contact setting___// 
		$wp_customize->add_section(
			'tattoos_contact',
			array(
				'title'         => __('Contact Setting', 'tattoos'),
				'panel' => 'Home-page-Setting',
			)
		);
		$wp_customize->add_setting("tattoos_contact_on_off", array(
			"default" => 'off',
			"transport" => "refresh",
			'sanitize_callback' => 'tattoos_radio_sanitize_row',
		));
		$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			"tattoos_contact_on_off",
			array(
				'type' => 'radio',
				'label' => __("Contact Section On/Off", "tattoos"),
				'section' => 'tattoos_contact',
				'choices' => array(
					'on' => __("On", "tattoos"),
					'off' =>__("Off", "tattoos"),
				),
			)
		));	
		$wp_customize->add_setting(
			'contact_title',
			array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			'contact_title',
			array(
				'label'         => __( 'Title', 'tattoos' ),
				'section'       => 'tattoos_contact',
				'type'          => 'text',    
			)
		);
		$wp_customize->add_setting(
			'contact_content',
			array(
				'default' => '',
				'sanitize_callback' => 'sanitize_textarea_field',
			)
		);
		$wp_customize->add_control(
			'contact_content',
			array(
				'label'         => __( 'Content', 'tattoos' ),
				'section'       => 'tattoos_contact',
				'type'          => 'textarea',    
			)
		);
		$wp_customize->add_setting(
			'contact_join',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);
		$wp_customize->add_control(
			'contact_join',
			array(
				'label'         => __( 'Join us link', 'tattoos' ),
				'section'       => 'tattoos_contact',
				'type'          => 'text',    
			)
		);
		$wp_customize->add_setting(
			'contact_book',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);
		$wp_customize->add_control(
			'contact_book',
			array(
				'label'         => __( 'Book link', 'tattoos' ),
				'section'       => 'tattoos_contact',
				'type'          => 'text',    
			)
		);
	//___ Footer setting___//
    $wp_customize->add_section(
        'tattoos_footer',
        array(
            'title'         => __('Footer Setting', 'tattoos'),
            'priority'      => 28,
        )
    );
	//Topbar text
    $wp_customize->add_setting(
        'footer_copyright',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'footer_copyright',
        array(
            'label'         => __( 'Copyright Text', 'tattoos' ),
            'section'       => 'tattoos_footer',
            'type'          => 'text',    
        )
    );
	
	//Sidebar Position
	$wp_customize->add_section(
        'sidebar_position',
        array(
            'title'         => __('Sidebar Position', 'tattoos'),
            'priority'      => 20,
        )
    );
	$wp_customize->add_setting(
        'sidebar_layout',
        array(
            'default'           => 'right',
			'transport' => 'refresh',
			'sanitize_callback' => 'tattoos_sanitize_layout',
        )
    );
    $wp_customize->add_control(
        'sidebar_layout',
        array(
            'type'      => 'radio',
            'label'     => __('Theme Sidebar Position', 'tattoos'),
            'section'   => 'sidebar_position',
			'description'   => __('This option work for blog page, blog single page, archive page and search page.', 'tattoos'),      
            'choices'   => array(
                'full'           => __( 'Full', 'tattoos' ),
                'left'         => __( 'Left', 'tattoos' ),
                'right'    => __( 'Right', 'tattoos' )
            ),
        )
    ); 
	$wp_customize->add_setting(
        'page_sidebar_layout',
        array(
            'default'           => 'right',
			'transport' => 'refresh',
			'sanitize_callback' => 'tattoos_sanitize_layout',
        )
    );
    $wp_customize->add_control(
        'page_sidebar_layout',
        array(
            'type'      => 'radio',
            'label'     => __('Page Sidebar Position', 'tattoos'),
            'section'   => 'sidebar_position',
            'priority'  => 11,
			'description'   => __('This option work for pages.', 'tattoos'), 
            'choices'   => array(
                'full'           => __( 'Full', 'tattoos' ),
                'left'         => __( 'Left', 'tattoos' ),
                'right'    => __( 'Right', 'tattoos' )
            ),
        )
    ); 
	
}
add_action( 'customize_register', 'tattoos_customize_register' );

function tattoos_radio_sanitize_row($input) {
  $valid_keys = array(
		'on' => 'On',
		'off' => 'Off',
  );
  if ( array_key_exists( $input, $valid_keys ) ) {
	 return $input;
  } else {
	 return '';
  }
}
function tattoos_sanitize_layout( $value ) {  
    if ( ! in_array( $value, array( 'full', 'left', 'right' ) ) )
        $value = 'right';
 
    return $value;   
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function tattoos_customize_preview_js() {
	wp_enqueue_script( 'tattoos_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'tattoos_customize_preview_js' );
