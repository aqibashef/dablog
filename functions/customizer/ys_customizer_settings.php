<?php

//////////////////////////////////////////////////////////////////
// Customizer - Add Custom Styling
//////////////////////////////////////////////////////////////////
function wpwagon_customizer_style()
{
	wp_enqueue_style('customizer-css', get_stylesheet_directory_uri() . '/functions/customizer/css/customizer.css');
}
add_action('customize_controls_print_styles', 'wpwagon_customizer_style');

//////////////////////////////////////////////////////////////////
// Customizer - Add Settings
//////////////////////////////////////////////////////////////////
function wpwagon_register_theme_customizer( $wp_customize ) {
 	
	// Add Sections
	
	$wp_customize->add_section( 'wpwagon_new_section_custom_css' , array(
   		'title'      => 'Custom CSS',
   		'description'=> 'Add your custom CSS which will overwrite the theme CSS',
   		'priority'   => 106,
	) );
	
	$wp_customize->add_section( 'wpwagon_new_section_color_accent' , array(
   		'title'      => 'Colors: Accent',
   		'description'=> '',
   		'priority'   => 105,
	) );
	
	$wp_customize->add_section( 'wpwagon_new_section_color_post_color' , array(
   		'title'      => 'Colors: Posts',
   		'description'=> '',
   		'priority'   => 104,
	) );
	
	$wp_customize->add_section( 'wpwagon_new_section_color_footer' , array(
   		'title'      => 'Colors: Footer',
   		'description'=> '',
   		'priority'   => 103,
	) );
	
	$wp_customize->add_section( 'wpwagon_new_section_color_sidebar' , array(
   		'title'      => 'Colors: Sidebar',
   		'description'=> '',
   		'priority'   => 102,
	) );
	
	$wp_customize->add_section( 'wpwagon_new_section_mobile' , array(
		'title'      => 'Colors: Mobile Menu',
		'description'=> '',
		'priority'   => 101,
	) );
	
	$wp_customize->add_section( 'wpwagon_new_section_color_topbar' , array(
   		'title'      => 'Colors: Top Bar',
   		'description'=> '',
   		'priority'   => 100,
	) );
	
	$wp_customize->add_section( 'wpwagon_new_section_footer' , array(
   		'title'      => 'Footer Settings',
   		'description'=> '',
   		'priority'   => 99,
	) );
	
	$wp_customize->add_section( 'wpwagon_new_section_social' , array(
   		'title'      => 'Social Media Settings',
   		'description'=> 'Enter your social media usernames. Icons will not show if left blank.',
   		'priority'   => 98,
	) );
	
	$wp_customize->add_section( 'wpwagon_new_section_page' , array(
   		'title'      => 'Page Settings',
   		'description'=> '',
   		'priority'   => 97,
	) );
	
	$wp_customize->add_section( 'wpwagon_new_section_post' , array(
   		'title'      => 'Post Settings',
   		'description'=> '',
   		'priority'   => 96,
	) );
	
	$wp_customize->add_section( 'wpwagon_new_section_promo' , array(
		'title'      => 'Promo Box Settings',
		'description'=> '',
		'priority'   => 95,
	) );
	
	$wp_customize->add_section( 'wpwagon_new_section_featured' , array(
		'title'      => 'Featured Area Settings',
		'description'=> '',
		'priority'   => 94,
	) );
	
	$wp_customize->add_section( 'wpwagon_new_section_topbar' , array(
		'title'      => 'Top Bar Settings',
		'description'=> '',
		'priority'   => 92,
	) );
	
	$wp_customize->add_section( 'wpwagon_new_section_logo_header' , array(
   		'title'      => 'Logo and Header Settings',
   		'description'=> '',
   		'priority'   => 91,
	) );
	
	$wp_customize->add_section( 'wpwagon_new_section_general' , array(
   		'title'      => 'General Settings',
   		'description'=> '',
   		'priority'   => 90,
	) );
	
	// Add Setting

		// General
		$wp_customize->add_setting(
			'ys_favicon'
		);
		
		$wp_customize->add_setting(
	        'ys_home_layout',
	        array(
	            'default'     => 'full'
	        )
	    );
		
		$wp_customize->add_setting(
	        'ys_archive_layout',
	        array(
	            'default'     => 'full'
	        )
	    );
		
		$wp_customize->add_setting(
	        'ys_sidebar_homepage',
	        array(
	            'default'     => false
	        )
	    );
		
		$wp_customize->add_setting(
	        'ys_sidebar_post',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'ys_sidebar_archive',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'ys_post_summary',
	        array(
	            'default'     => 'full'
	        )
	    );
		
		// Header & Logo
		$wp_customize->add_setting(
	        'ys_logo'
	    );
		$wp_customize->add_setting(
	        'ys_header_padding_top',
	        array(
	            'default'     => '56'
	        )
	    );
		$wp_customize->add_setting(
	        'ys_header_padding_bottom',
	        array(
	            'default'     => '56'
	        )
	    );
		
		// Top Bar
		$wp_customize->add_setting(
	        'ys_topbar_social_check',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'ys_topbar_search_check',
	        array(
	            'default'     => false
	        )
	    );
		
		// Featured area
		$wp_customize->add_setting(
	        'ys_featured_slider',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'ys_featured_cat'
	    );
		$wp_customize->add_setting(
	        'ys_featured_id',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'ys_featured_slider_slides',
	        array(
	            'default'     => '5'
	        )
	    );
		
		// Promo Boxes
		$wp_customize->add_setting(
	        'ys_promo',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'ys_promo1_title',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'ys_promo1_image'
	    );
		$wp_customize->add_setting(
	        'ys_promo1_url',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'ys_promo2_title',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'ys_promo2_image'
	    );
		$wp_customize->add_setting(
	        'ys_promo2_url',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'ys_promo3_title',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'ys_promo3_image'
	    );
		$wp_customize->add_setting(
	        'ys_promo3_url',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'ys_promo_border',
	        array(
	            'default'     => false
	        )
	    );
		
		// Post Settings
		$wp_customize->add_setting(
	        'ys_post_tags',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'ys_post_author',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'ys_post_related',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'ys_post_share',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'ys_post_share_author',
	        array(
	            'default'     => false
	        )
	    );
	    $wp_customize->add_setting(
	        'ys_post_share_author_avatar',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'ys_post_comment_link',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'ys_post_thumb',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'ys_post_date',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'ys_post_cat',
	        array(
	            'default'     => false
	        )
	    );
		
		// Page
		$wp_customize->add_setting(
	        'ys_page_share',
	        array(
	            'default'     => false
	        )
	    );
		
		// Social Media
		
		$wp_customize->add_setting(
	        'ys_facebook',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'ys_twitter',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'ys_instagram',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'ys_pinterest',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'ys_tumblr',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'ys_bloglovin',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'ys_tumblr',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'ys_google',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'ys_youtube',
	        array(
	            'default'     => ''
	        )
	    );
	    $wp_customize->add_setting(
	        'ys_dribbble',
	        array(
	            'default'     => ''
	        )
	    );
	    $wp_customize->add_setting(
	        'ys_soundcloud',
	        array(
	            'default'     => ''
	        )
	    );
	    $wp_customize->add_setting(
	        'ys_vimeo',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'ys_linkedin',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'ys_rss',
	        array(
	            'default'     => ''
	        )
	    );
		
		// Footer
		$wp_customize->add_setting(
	        'ys_footer_copyright',
	        array(
	            'default'     => '&copy; 2016 - wpWagon. All Rights Reserved. Designed & Developed by <a href="http://wpwagon.com">wpwagon.com</a>'
	        )
	    );
		$wp_customize->add_setting(
	        'ys_footer_share',
	        array(
	            'default'     => false
	        )
	    );
		
		// Colors
		
			// Top bar
			$wp_customize->add_setting(
				'ys_topbar_bg',
				array(
					'default'     => '#161616'
				)
			);

			$wp_customize->add_setting(
				'ys_topbar_nav_color',
				array(
					'default'     => '#ffffff'
				)
			);
			$wp_customize->add_setting(
				'ys_topbar_nav_color_hover',
				array(
					'default'     => '#999999'
				)
			);
			
			$wp_customize->add_setting(
				'ys_drop_bg',
				array(
					'default'     => '#161616'
				)
			);
			$wp_customize->add_setting(
				'ys_drop_border',
				array(
					'default'     => '#333333'
				)
			);
			$wp_customize->add_setting(
				'ys_drop_text_color',
				array(
					'default'     => '#999999'
				)
			);
			$wp_customize->add_setting(
				'ys_drop_text_hover_bg',
				array(
					'default'     => '#333333'
				)
			);
			$wp_customize->add_setting(
				'ys_drop_text_hover_color',
				array(
					'default'     => '#ffffff'
				)
			);
			
			$wp_customize->add_setting(
				'ys_topbar_social_color',
				array(
					'default'     => '#ffffff'
				)
			);
			$wp_customize->add_setting(
				'ys_topbar_social_color_hover',
				array(
					'default'     => '#C39F76'
				)
			);
			
			$wp_customize->add_setting(
				'ys_topbar_search_magnify',
				array(
					'default'     => '#888888'
				)
			);
			
			// Mobile Menu colors
			$wp_customize->add_setting(
				'ys_mobile_bg',
				array(
					'default'     => '#161616'
				)
			);
			$wp_customize->add_setting(
				'ys_mobile_text',
				array(
					'default'     => '#ffffff'
				)
			);
			$wp_customize->add_setting(
				'ys_mobile_icon',
				array(
					'default'     => '#ffffff'
				)
			);
			
			// Sidebar
			$wp_customize->add_setting(
				'ys_sidebar_title_bg',
				array(
					'default'     => '#161616'
				)
			);
			$wp_customize->add_setting(
				'ys_sidebar_title_arrow',
				array(
					'default'     => false
				)
			);
			$wp_customize->add_setting(
				'ys_sidebar_title_text',
				array(
					'default'     => '#ffffff'
				)
			);
			$wp_customize->add_setting(
				'ys_sidebar_social_icon',
				array(
					'default'     => '#000000'
				)
			);
			$wp_customize->add_setting(
				'ys_sidebar_social_icon_hover',
				array(
					'default'     => '#C39F76'
				)
			);
			$wp_customize->add_setting(
				'ys_sidebar_newsletter_bg',
				array(
					'default'     => '#f1f1f1'
				)
			);
			$wp_customize->add_setting(
				'ys_sidebar_newsletter_text',
				array(
					'default'     => '#444444'
				)
			);
			$wp_customize->add_setting(
				'ys_sidebar_newsletter_button_bg',
				array(
					'default'     => '#161616'
				)
			);
			$wp_customize->add_setting(
				'ys_sidebar_newsletter_button_text',
				array(
					'default'     => '#ffffff'
				)
			);
			$wp_customize->add_setting(
				'ys_sidebar_newsletter_button_bg_hover',
				array(
					'default'     => '#C39F76'
				)
			);
			$wp_customize->add_setting(
				'ys_sidebar_newsletter_button_text_hover',
				array(
					'default'     => '#ffffff'
				)
			);
			
			// Footer
			$wp_customize->add_setting(
				'ys_footer_bg',
				array(
					'default'     => '#161616'
				)
			);
			$wp_customize->add_setting(
				'ys_footer_social',
				array(
					'default'     => '#ffffff'
				)
			);
			$wp_customize->add_setting(
				'ys_footer_social_hover',
				array(
					'default'     => '#C39F76'
				)
			);
			$wp_customize->add_setting(
				'ys_footer_social_line',
				array(
					'default'     => '#313131'
				)
			);
			$wp_customize->add_setting(
				'ys_footer_copyright_color',
				array(
					'default'     => '#888888'
				)
			);
			$wp_customize->add_setting(
				'ys_footer_copyright_link',
				array(
					'default'     => '#ffffff'
				)
			);
			
			// Posts
			$wp_customize->add_setting(
				'ys_post_title',
				array(
					'default'     => '#000000'
				)
			);
			$wp_customize->add_setting(
				'ys_post_title_divider',
				array(
					'default'     => '#000000'
				)
			);
			$wp_customize->add_setting(
				'ys_post_text',
				array(
					'default'     => '#242424'
				)
			);
			$wp_customize->add_setting(
				'ys_post_h',
				array(
					'default'     => '#242424'
				)
			);
			$wp_customize->add_setting(
				'ys_post_readmore_text',
				array(
					'default'     => '#000000'
				)
			);
			$wp_customize->add_setting(
				'ys_post_readmore_text_hover',
				array(
					'default'     => '#C39F76'
				)
			);
			$wp_customize->add_setting(
				'ys_post_readmore_line',
				array(
					'default'     => '#C39F76'
				)
			);
			$wp_customize->add_setting(
				'ys_post_readmore_line_hover',
				array(
					'default'     => '#C39F76'
				)
			);
			$wp_customize->add_setting(
				'ys_post_share_color',
				array(
					'default'     => '#000000'
				)
			);
			$wp_customize->add_setting(
				'ys_post_share_color_hover',
				array(
					'default'     => '#C39F76'
				)
			);
			
			// accent
			$wp_customize->add_setting(
				'ys_accent_color',
				array(
					'default'     => '#C39F76'
				)
			);
			
			// Custom CSS
			$wp_customize->add_setting(
				'ys_custom_css'
			);
		
		
	// Add Control
	
		// General
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'upload_favicon',
				array(
					'label'      => 'Upload Favicon',
					'section'    => 'wpwagon_new_section_general',
					'settings'   => 'ys_favicon',
					'priority'	 => 1
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'home_layout',
				array(
					'label'          => 'Homepage Layout',
					'section'        => 'wpwagon_new_section_general',
					'settings'       => 'ys_home_layout',
					'type'           => 'radio',
					'priority'	 => 3,
					'choices'        => array(
						'full'   => 'Full Post Layout',
						'grid'  => 'Grid Post Layout',
						'full_grid'  => '1 Full Post then Grid Layout',
						'list'  => 'List Post Layout',
						'full_list'  => '1 Full Post then List Layout',
					)
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'archive_layout',
				array(
					'label'          => 'Archive Layout',
					'section'        => 'wpwagon_new_section_general',
					'settings'       => 'ys_archive_layout',
					'type'           => 'radio',
					'priority'	 => 3,
					'choices'        => array(
						'full'   => 'Full Post Layout',
						'grid'  => 'Grid Post Layout',
						'full_grid'  => '1 Full Post then Grid Layout',
						'list'  => 'List Post Layout',
						'full_list'  => '1 Full Post then List Layout',
					)
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sidebar_homepage',
				array(
					'label'      => 'Disable Sidebar on Homepage',
					'section'    => 'wpwagon_new_section_general',
					'settings'   => 'ys_sidebar_homepage',
					'type'		 => 'checkbox',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sidebar_post',
				array(
					'label'      => 'Disable Sidebar on Posts',
					'section'    => 'wpwagon_new_section_general',
					'settings'   => 'ys_sidebar_post',
					'type'		 => 'checkbox',
					'priority'	 => 5
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sidebar_archive',
				array(
					'label'      => 'Disable Sidebar on Archives',
					'section'    => 'wpwagon_new_section_general',
					'settings'   => 'ys_sidebar_archive',
					'type'		 => 'checkbox',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_summary',
				array(
					'label'          => 'Homepage/Archive Post Summary Type',
					'section'        => 'wpwagon_new_section_general',
					'settings'       => 'ys_post_summary',
					'type'           => 'radio',
					'priority'	 => 8,
					'choices'        => array(
						'full'   => 'Use Read More Tag',
						'excerpt'  => 'Use Excerpt',
					)
				)
			)
		);
		
		// Header and Logo
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'upload_logo',
				array(
					'label'      => 'Upload Logo',
					'section'    => 'wpwagon_new_section_logo_header',
					'settings'   => 'ys_logo',
					'priority'	 => 20
				)
			)
		);
		
		$wp_customize->add_control(
			new Customize_Number_Control(
				$wp_customize,
				'header_padding_top',
				array(
					'label'      => 'Top Header Padding',
					'section'    => 'wpwagon_new_section_logo_header',
					'settings'   => 'ys_header_padding_top',
					'type'		 => 'number',
					'priority'	 => 22
				)
			)
		);
		$wp_customize->add_control(
			new Customize_Number_Control(
				$wp_customize,
				'header_padding_bottom',
				array(
					'label'      => 'Bottom Header Padding',
					'section'    => 'wpwagon_new_section_logo_header',
					'settings'   => 'ys_header_padding_bottom',
					'type'		 => 'number',
					'priority'	 => 23
				)
			)
		);
		
		// Top Bar
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'topbar_social_check',
				array(
					'label'      => 'Disable Top Bar Social Icons',
					'section'    => 'wpwagon_new_section_topbar',
					'settings'   => 'ys_topbar_social_check',
					'type'		 => 'checkbox',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'topbar_search_check',
				array(
					'label'      => 'Disable Top Bar Search',
					'section'    => 'wpwagon_new_section_topbar',
					'settings'   => 'ys_topbar_search_check',
					'type'		 => 'checkbox',
					'priority'	 => 4
				)
			)
		);
		
		// Featured area
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'featured_slider',
				array(
					'label'      => 'Enable Featured Slider',
					'section'    => 'wpwagon_new_section_featured',
					'settings'   => 'ys_featured_slider',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Category_Control(
				$wp_customize,
				'featured_cat',
				array(
					'label'    => 'Select Featured Category',
					'settings' => 'ys_featured_cat',
					'section'  => 'wpwagon_new_section_featured',
					'priority'	 => 3
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'featured_id',
				array(
					'label'      => 'Select featured post/page IDs',
					'section'    => 'wpwagon_new_section_featured',
					'settings'   => 'ys_featured_id',
					'type'		 => 'text',
					'priority'	 => 4
				)
			)
		);
		
		$wp_customize->add_control(
			new Customize_Number_Control(
				$wp_customize,
				'featured_slider_slides',
				array(
					'label'      => 'Amount of Slides',
					'section'    => 'wpwagon_new_section_featured',
					'settings'   => 'ys_featured_slider_slides',
					'type'		 => 'number',
					'priority'	 => 5
				)
			)
		);
		
		// Promo Boxes
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo',
				array(
					'label'      => 'Enable Promo Boxes',
					'section'    => 'wpwagon_new_section_promo',
					'settings'   => 'ys_promo',
					'type'		 => 'checkbox',
					'priority'	 => 1
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo_border',
				array(
					'label'      => 'Hide White Border',
					'section'    => 'wpwagon_new_section_promo',
					'settings'   => 'ys_promo_border',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo1_title',
				array(
					'label'      => 'Promo Box #1 Title',
					'section'    => 'wpwagon_new_section_promo',
					'settings'   => 'ys_promo1_title',
					'type'		 => 'text',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'promo1_image',
				array(
					'label'      => 'Promo Box #1 Image',
					'section'    => 'wpwagon_new_section_promo',
					'settings'   => 'ys_promo1_image',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo1_url',
				array(
					'label'      => 'Promo Box #1 URL',
					'section'    => 'wpwagon_new_section_promo',
					'settings'   => 'ys_promo1_url',
					'type'		 => 'text',
					'priority'	 => 5
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo2_title',
				array(
					'label'      => 'Promo Box #2 Title',
					'section'    => 'wpwagon_new_section_promo',
					'settings'   => 'ys_promo2_title',
					'type'		 => 'text',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'promo2_image',
				array(
					'label'      => 'Promo Box #2 Image',
					'section'    => 'wpwagon_new_section_promo',
					'settings'   => 'ys_promo2_image',
					'priority'	 => 7
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo2_url',
				array(
					'label'      => 'Promo Box #2 URL',
					'section'    => 'wpwagon_new_section_promo',
					'settings'   => 'ys_promo2_url',
					'type'		 => 'text',
					'priority'	 => 8
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo3_title',
				array(
					'label'      => 'Promo Box #3 Title',
					'section'    => 'wpwagon_new_section_promo',
					'settings'   => 'ys_promo3_title',
					'type'		 => 'text',
					'priority'	 => 9
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'promo3_image',
				array(
					'label'      => 'Promo Box #3 Image',
					'section'    => 'wpwagon_new_section_promo',
					'settings'   => 'ys_promo3_image',
					'priority'	 => 10
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo3_url',
				array(
					'label'      => 'Promo Box #3 URL',
					'section'    => 'wpwagon_new_section_promo',
					'settings'   => 'ys_promo3_url',
					'type'		 => 'text',
					'priority'	 => 11
				)
			)
		);
		
		// Post Settings
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_thumb',
				array(
					'label'      => 'Hide Featured Image from top of Post',
					'section'    => 'wpwagon_new_section_post',
					'settings'   => 'ys_post_thumb',
					'type'		 => 'checkbox',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_cat',
				array(
					'label'      => 'Hide Category',
					'section'    => 'wpwagon_new_section_post',
					'settings'   => 'ys_post_cat',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_date',
				array(
					'label'      => 'Hide Date',
					'section'    => 'wpwagon_new_section_post',
					'settings'   => 'ys_post_date',
					'type'		 => 'checkbox',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_tags',
				array(
					'label'      => 'Hide Tags',
					'section'    => 'wpwagon_new_section_post',
					'settings'   => 'ys_post_tags',
					'type'		 => 'checkbox',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_share',
				array(
					'label'      => 'Hide Share Buttons',
					'section'    => 'wpwagon_new_section_post',
					'settings'   => 'ys_post_share',
					'type'		 => 'checkbox',
					'priority'	 => 5
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_share_author',
				array(
					'label'      => 'Hide Author Name',
					'section'    => 'wpwagon_new_section_post',
					'settings'   => 'ys_post_share_author',
					'type'		 => 'checkbox',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_share_author_avatar',
				array(
					'label'      => 'Hide Author Avatar',
					'section'    => 'wpwagon_new_section_post',
					'settings'   => 'ys_post_share_author_avatar',
					'type'		 => 'checkbox',
					'priority'	 => 7
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_comment_link',
				array(
					'label'      => 'Hide Comment Link',
					'section'    => 'wpwagon_new_section_post',
					'settings'   => 'ys_post_comment_link',
					'type'		 => 'checkbox',
					'priority'	 => 8
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_author',
				array(
					'label'      => 'Hide Author Box',
					'section'    => 'wpwagon_new_section_post',
					'settings'   => 'ys_post_author',
					'type'		 => 'checkbox',
					'priority'	 => 9
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_related',
				array(
					'label'      => 'Hide Related Posts Box',
					'section'    => 'wpwagon_new_section_post',
					'settings'   => 'ys_post_related',
					'type'		 => 'checkbox',
					'priority'	 => 10
				)
			)
		);
		
		// Page
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'page_share',
				array(
					'label'      => 'Hide Share Buttons',
					'section'    => 'wpwagon_new_section_page',
					'settings'   => 'ys_page_share',
					'type'		 => 'checkbox',
					'priority'	 => 1
				)
			)
		);
		
		// Social Media
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'facebook',
				array(
					'label'      => 'Facebook',
					'section'    => 'wpwagon_new_section_social',
					'settings'   => 'ys_facebook',
					'type'		 => 'text',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'twitter',
				array(
					'label'      => 'Twitter',
					'section'    => 'wpwagon_new_section_social',
					'settings'   => 'ys_twitter',
					'type'		 => 'text',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'instagram',
				array(
					'label'      => 'Instagram',
					'section'    => 'wpwagon_new_section_social',
					'settings'   => 'ys_instagram',
					'type'		 => 'text',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'pinterest',
				array(
					'label'      => 'Pinterest',
					'section'    => 'wpwagon_new_section_social',
					'settings'   => 'ys_pinterest',
					'type'		 => 'text',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'bloglovin',
				array(
					'label'      => 'Bloglovin',
					'section'    => 'wpwagon_new_section_social',
					'settings'   => 'ys_bloglovin',
					'type'		 => 'text',
					'priority'	 => 5
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'google',
				array(
					'label'      => 'Google Plus',
					'section'    => 'wpwagon_new_section_social',
					'settings'   => 'ys_google',
					'type'		 => 'text',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'tumblr',
				array(
					'label'      => 'Tumblr',
					'section'    => 'wpwagon_new_section_social',
					'settings'   => 'ys_tumblr',
					'type'		 => 'text',
					'priority'	 => 7
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'youtube',
				array(
					'label'      => 'Youtube',
					'section'    => 'wpwagon_new_section_social',
					'settings'   => 'ys_youtube',
					'type'		 => 'text',
					'priority'	 => 8
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'dribbble',
				array(
					'label'      => 'Dribbble',
					'section'    => 'wpwagon_new_section_social',
					'settings'   => 'ys_dribbble',
					'type'		 => 'text',
					'priority'	 => 9
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'soundcloud',
				array(
					'label'      => 'Soundcloud',
					'section'    => 'wpwagon_new_section_social',
					'settings'   => 'ys_soundcloud',
					'type'		 => 'text',
					'priority'	 => 10
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'vimeo',
				array(
					'label'      => 'Vimeo',
					'section'    => 'wpwagon_new_section_social',
					'settings'   => 'ys_vimeo',
					'type'		 => 'text',
					'priority'	 => 11
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'linkedin',
				array(
					'label'      => 'Linkedin (Use full URL to your Linkedin profile)',
					'section'    => 'wpwagon_new_section_social',
					'settings'   => 'ys_linkedin',
					'type'		 => 'text',
					'priority'	 => 12
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'rss',
				array(
					'label'      => 'RSS Link',
					'section'    => 'wpwagon_new_section_social',
					'settings'   => 'ys_rss',
					'type'		 => 'text',
					'priority'	 => 13
				)
			)
		);
		
		// Footer
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'footer_copyright',
				array(
					'label'      => 'Footer Copyright Text',
					'section'    => 'wpwagon_new_section_footer',
					'settings'   => 'ys_footer_copyright',
					'type'		 => 'text',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'footer_share',
				array(
					'label'      => 'Hide Footer Share Links',
					'section'    => 'wpwagon_new_section_footer',
					'settings'   => 'ys_footer_share',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		
		// Colors
			
			// Top bar Colors
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_bg',
					array(
						'label'      => 'Top Bar BG',
						'section'    => 'wpwagon_new_section_color_topbar',
						'settings'   => 'ys_topbar_bg',
						'priority'	 => 1
					)
				)
			);
			
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_nav_color',
					array(
						'label'      => 'Top Bar Menu Text Color',
						'section'    => 'wpwagon_new_section_color_topbar',
						'settings'   => 'ys_topbar_nav_color',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_nav_color_hover',
					array(
						'label'      => 'Top Bar Menu Text Hover Color',
						'section'    => 'wpwagon_new_section_color_topbar',
						'settings'   => 'ys_topbar_nav_color_hover',
						'priority'	 => 3
					)
				)
			);
			
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_bg',
					array(
						'label'      => 'Dropdown BG',
						'section'    => 'wpwagon_new_section_color_topbar',
						'settings'   => 'ys_drop_bg',
						'priority'	 => 4
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_border',
					array(
						'label'      => 'Dropdown Border Color',
						'section'    => 'wpwagon_new_section_color_topbar',
						'settings'   => 'ys_drop_border',
						'priority'	 => 5
					)
				)
			);
			
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_text_color',
					array(
						'label'      => 'Dropdown Text Color',
						'section'    => 'wpwagon_new_section_color_topbar',
						'settings'   => 'ys_drop_text_color',
						'priority'	 => 6
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_text_hover_bg',
					array(
						'label'      => 'Dropdown Text Hover BG',
						'section'    => 'wpwagon_new_section_color_topbar',
						'settings'   => 'ys_drop_text_hover_bg',
						'priority'	 => 7
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_text_hover_color',
					array(
						'label'      => 'Dropdown Text Hover Color',
						'section'    => 'wpwagon_new_section_color_topbar',
						'settings'   => 'ys_drop_text_hover_color',
						'priority'	 => 8
					)
				)
			);
			
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_social_color',
					array(
						'label'      => 'Top Bar Social Icons',
						'section'    => 'wpwagon_new_section_color_topbar',
						'settings'   => 'ys_topbar_social_color',
						'priority'	 => 9
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_social_color_hover',
					array(
						'label'      => 'Top Bar Social Icons Hover',
						'section'    => 'wpwagon_new_section_color_topbar',
						'settings'   => 'ys_topbar_social_color_hover',
						'priority'	 => 11
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_search_magnify',
					array(
						'label'      => 'Top Bar Search Magnify Color',
						'section'    => 'wpwagon_new_section_color_topbar',
						'settings'   => 'ys_topbar_search_magnify',
						'priority'	 => 13
					)
				)
			);
			
			// Mobile menu
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'mobile_bg',
					array(
						'label'      => 'Mobile Menu BG Color',
						'section'    => 'wpwagon_new_section_mobile',
						'settings'   => 'ys_mobile_bg',
						'priority'	 => 1
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'mobile_text',
					array(
						'label'      => 'Mobile Menu Link Color',
						'section'    => 'wpwagon_new_section_mobile',
						'settings'   => 'ys_mobile_text',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'mobile_icon',
					array(
						'label'      => 'Mobile Menu Toggle Icon Color',
						'section'    => 'wpwagon_new_section_mobile',
						'settings'   => 'ys_mobile_icon',
						'priority'	 => 3
					)
				)
			);
			
			// Sidebar
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_title_bg',
					array(
						'label'      => 'Sidebar Widget Title BG',
						'section'    => 'wpwagon_new_section_color_sidebar',
						'settings'   => 'ys_sidebar_title_bg',
						'priority'	 => 1
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'sidebar_title_arrow',
					array(
						'label'      => 'Hide Sidebar Title Arrow',
						'section'    => 'wpwagon_new_section_color_sidebar',
						'settings'   => 'ys_sidebar_title_arrow',
						'type'		 => 'checkbox',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_title_text',
					array(
						'label'      => 'Sidebar Widget Title Text Color',
						'section'    => 'wpwagon_new_section_color_sidebar',
						'settings'   => 'ys_sidebar_title_text',
						'priority'	 => 3
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_social_icon',
					array(
						'label'      => 'Sidebar Social Icon Color',
						'section'    => 'wpwagon_new_section_color_sidebar',
						'settings'   => 'ys_sidebar_social_icon',
						'priority'	 => 4
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_social_icon_hover',
					array(
						'label'      => 'Sidebar Social Icon Hover Color',
						'section'    => 'wpwagon_new_section_color_sidebar',
						'settings'   => 'ys_sidebar_social_icon_hover',
						'priority'	 => 5
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_newsletter_bg',
					array(
						'label'      => 'Mailchimp Widget BG Color',
						'section'    => 'wpwagon_new_section_color_sidebar',
						'settings'   => 'ys_sidebar_newsletter_bg',
						'priority'	 => 6
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_newsletter_text',
					array(
						'label'      => 'Mailchimp Widget Text Color',
						'section'    => 'wpwagon_new_section_color_sidebar',
						'settings'   => 'ys_sidebar_newsletter_text',
						'priority'	 => 7
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_newsletter_button_bg',
					array(
						'label'      => 'Mailchimp Widget Button BG Color',
						'section'    => 'wpwagon_new_section_color_sidebar',
						'settings'   => 'ys_sidebar_newsletter_button_bg',
						'priority'	 => 8
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_newsletter_button_text',
					array(
						'label'      => 'Mailchimp Widget Button Text Color',
						'section'    => 'wpwagon_new_section_color_sidebar',
						'settings'   => 'ys_sidebar_newsletter_button_text',
						'priority'	 => 9
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_newsletter_button_bg_hover',
					array(
						'label'      => 'Mailchimp Widget Button BG Hover Color',
						'section'    => 'wpwagon_new_section_color_sidebar',
						'settings'   => 'ys_sidebar_newsletter_button_bg_hover',
						'priority'	 => 10
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_newsletter_button_text_hover',
					array(
						'label'      => 'Mailchimp Widget Button Text Hover Color',
						'section'    => 'wpwagon_new_section_color_sidebar',
						'settings'   => 'ys_sidebar_newsletter_button_text_hover',
						'priority'	 => 11
					)
				)
			);
			
			// Footer
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_bg',
					array(
						'label'      => 'Footer BG Color',
						'section'    => 'wpwagon_new_section_color_footer',
						'settings'   => 'ys_footer_bg',
						'priority'	 => 1
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_social',
					array(
						'label'      => 'Footer Social Icon Color',
						'section'    => 'wpwagon_new_section_color_footer',
						'settings'   => 'ys_footer_social',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_social_hover',
					array(
						'label'      => 'Footer Social Icon Hover Color',
						'section'    => 'wpwagon_new_section_color_footer',
						'settings'   => 'ys_footer_social_hover',
						'priority'	 => 3
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_social_line',
					array(
						'label'      => 'Footer Social Separator Line',
						'section'    => 'wpwagon_new_section_color_footer',
						'settings'   => 'ys_footer_social_line',
						'priority'	 => 4
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_copyright_color',
					array(
						'label'      => 'Footer Copyright Text Color',
						'section'    => 'wpwagon_new_section_color_footer',
						'settings'   => 'ys_footer_copyright_color',
						'priority'	 => 5
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_copyright_link',
					array(
						'label'      => 'Footer Copyright Link Color',
						'section'    => 'wpwagon_new_section_color_footer',
						'settings'   => 'ys_footer_copyright_link',
						'priority'	 => 6
					)
				)
			);
			
			// Posts
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_title',
					array(
						'label'      => 'Post Title Color',
						'section'    => 'wpwagon_new_section_color_post_color',
						'settings'   => 'ys_post_title',
						'priority'	 => 1
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_title_divider',
					array(
						'label'      => 'Post Title Divider Color',
						'section'    => 'wpwagon_new_section_color_post_color',
						'settings'   => 'ys_post_title_divider',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_text',
					array(
						'label'      => 'Post Text Color',
						'section'    => 'wpwagon_new_section_color_post_color',
						'settings'   => 'ys_post_text',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_h',
					array(
						'label'      => 'Post H1-H6 Color',
						'section'    => 'wpwagon_new_section_color_post_color',
						'settings'   => 'ys_post_h',
						'priority'	 => 3
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_readmore_text',
					array(
						'label'      => 'Read More Text Color',
						'section'    => 'wpwagon_new_section_color_post_color',
						'settings'   => 'ys_post_readmore_text',
						'priority'	 => 4
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_readmore_text_hover',
					array(
						'label'      => 'Read More Text Hover Color',
						'section'    => 'wpwagon_new_section_color_post_color',
						'settings'   => 'ys_post_readmore_text_hover',
						'priority'	 => 6
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_readmore_line',
					array(
						'label'      => 'Read More Underline Color',
						'section'    => 'wpwagon_new_section_color_post_color',
						'settings'   => 'ys_post_readmore_line',
						'priority'	 => 6
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_readmore_line_hover',
					array(
						'label'      => 'Read More Underline Hover Color',
						'section'    => 'wpwagon_new_section_color_post_color',
						'settings'   => 'ys_post_readmore_line_hover',
						'priority'	 => 6
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_share_color',
					array(
						'label'      => 'Post Share Link Color',
						'section'    => 'wpwagon_new_section_color_post_color',
						'settings'   => 'ys_post_share_color',
						'priority'	 => 8
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_share_color_hover',
					array(
						'label'      => 'Post Share Link Hover Color',
						'section'    => 'wpwagon_new_section_color_post_color',
						'settings'   => 'ys_post_share_color_hover',
						'priority'	 => 9
					)
				)
			);
			
			// Accent
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'accent_color',
					array(
						'label'      => 'Accent Color',
						'section'    => 'wpwagon_new_section_color_accent',
						'settings'   => 'ys_accent_color',
						'priority'	 => 1
					)
				)
			);
			
			// Custom CSS
			$wp_customize->add_control(
				new Customize_CustomCss_Control(
					$wp_customize,
					'custom_css',
					array(
						'label'      => 'Custom CSS',
						'section'    => 'wpwagon_new_section_custom_css',
						'settings'   => 'ys_custom_css',
						'type'		 => 'custom_css',
						'priority'	 => 1
					)
				)
			);
	

	// Remove Sections
	$wp_customize->remove_section( 'title_tagline');
	$wp_customize->remove_section( 'nav');
	$wp_customize->remove_section( 'static_front_page');
	$wp_customize->remove_section( 'colors');
	$wp_customize->remove_section( 'background_image');
	
 
}
add_action( 'customize_register', 'wpwagon_register_theme_customizer' );
?>