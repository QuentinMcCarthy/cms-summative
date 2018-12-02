<?php
	/* Table of Contents:
		1.0:- Header
			1.1:- Header Background
			1.2:- Header Text
			1.3:- Header Logo
			1.4:- Header Styles
		2.0:- Carousel
			2.1:- Carousel Height
			2.2:- Carousel Styles
		3.0:- Sidebar
			3.1:- Sidebar Background
			3.2:- Sidebar Styles
		4.0:- Footer
			4.1:- Footer Background
			4.2:- Footer Text
			4.3:- Footer Styles
	*/


	add_action( 'customize_register', function ( $wp_customize ) {
		$img_path = get_template_directory_uri().'/assets/img';

		// 1.0:- Header

		// 1.1:- Header Background
		$header_bg_color_setting_args = array(
			'default'   => '#343a40',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'header_bg_color_settings', $header_bg_color_setting_args);

		$header_bg_color_control_args = array(
			'label'    => __( 'Header Background Colour', 'cliveschemist' ),
			'section'  => 'colors',
			'settings' => 'header_bg_color_settings',
		);

		$header_bg_color_control = new WP_Customize_Color_Control( $wp_customize, 'header_bg_color_control', $header_bg_color_control_args );

		$wp_customize->add_control( $header_bg_color_control );


		// 1.2:- Header Text
		$header_text_color_setting_args = array(
			'default'   => '#ffffff',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'header_text_color_settings', $header_text_color_setting_args );

		$header_text_color_control_args = array(
			'label'   => __( 'Header Text Colour', 'cliveschemist' ),
			'section' => 'colors',
			'settings' => 'header_text_color_settings',
		);

		$header_text_color_control = new WP_Customize_Color_Control( $wp_customize, 'header_text_color_control', $header_text_color_control_args );

		$wp_customize->add_control( $header_text_color_control );


		// 1.3:- Header Logo
		$header_logo_setting_args = array(
			'default'   => $img_path.'/default-header-logo.png',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'header_logo_settings', $header_logo_setting_args );

		$header_logo_control_args = array(
			'label'    => __( 'Header Logo', 'cliveschemist' ),
			'section'  => 'title_tagline',
			'settings' => 'header_logo_settings',
		);

		$header_logo_control = new WP_Customize_Image_Control( $wp_customize, 'header_logo_control', $header_logo_control_args );

		$wp_customize->add_control( $header_logo_control );


		// 2.0:- Carousel
		$carousel_section_args = array(
			'title'    => __( 'Carousel', 'cliveschemist' ),
			'priority' => 20,
		);

		$wp_customize->add_section( 'custom_carousel', $carousel_section_args );


		// 2.1:- Carousel Height
		$carousel_height_setting_args = array(
			'default'   => '25',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'carousel_height_settings', $carousel_height_setting_args );

		$carousel_height_input_attrs = array(
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		);

		$carousel_height_control_args = array(
			'label'       => __( 'Carousel Height', 'cliveschemist' ),
			'section'     => 'custom_carousel',
			'settings'    => 'carousel_height_settings',
			'type'        => 'number',
			'input_attrs' => $carousel_height_input_attrs,
		);

		$carousel_height_control = new WP_Customize_Control( $wp_customize, 'carousel_height_control', $carousel_height_control_args );

		$wp_customize->add_control( $carousel_height_control );


		// 3.0:- Sidebar

		// 3.1:- Sidebar Background
		$sidebar_bg_color_setting_args = array(
			'default'   => '#afafaf',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'sidebar_bg_color_settings', $sidebar_bg_color_setting_args );

		$sidebar_bg_color_control_args = array(
			'label'    => __( 'Sidebar Background Colour', 'cliveschemist' ),
			'section'  => 'colors',
			'settings' => 'sidebar_bg_color_settings',
		);

		$sidebar_bg_color_control = new WP_Customize_Color_Control( $wp_customize, 'sidebar_bg_color_control', $sidebar_bg_color_control_args );

		$wp_customize->add_control( $sidebar_bg_color_control );


		// 4.0:- Footer

		// 4.1:- Footer Background
		$footer_bg_color_setting_args = array(
			'default'   => '#ffffff',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'footer_bg_color_settings', $footer_bg_color_setting_args );

		$footer_bg_color_control_args = array(
			'label'    => __( 'Footer Background Colour', 'cliveschemist' ),
			'section'  => 'colors',
			'settings' => 'footer_bg_color_settings',
		);

		$footer_bg_color_control = new WP_Customize_Color_Control( $wp_customize, 'footer_bg_color_control', $footer_bg_color_control_args );

		$wp_customize->add_control( $footer_bg_color_control );


		// 4.2:- Footer Text
		$footer_text_color_setting_args = array(
			'default'   => '#000000',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'footer_text_color_settings', $footer_text_color_setting_args );

		$footer_text_color_control_args = array(
			'label'    => __( 'Footer Text Colour', 'cliveschemist' ),
			'section'  => 'colors',
			'settings' => 'footer_text_color_settings',
		);

		$footer_text_color_control = new WP_Customize_Color_Control( $wp_customize, 'footer_text_color_control', $footer_text_color_control_args );

		$wp_customize->add_control( $footer_text_color_control );
	});


	add_action( 'wp_head', function() {
		$img_path = get_template_directory_uri().'/assets/img';
		?>
		<style type="text/css">
			/* 1.4:- Header Styles */
			.header-bg {
				background-color: <?php echo get_theme_mod( 'header_bg_color_settings', '#343a40' ); ?> !important;
			}

			.navbar-dark .navbar-nav .nav-link {
				color: <?php echo get_theme_mod( 'header_text_color_settings', '#ffffff' ); ?> !important;
				opacity: 0.5;
			}

			.navbar-dark .navbar-nav .active>.nav-link,
			.navbar-dark .navbar-nav .nav-link.active,
			.navbar-dark .navbar-nav .nav-link.show,
			.navbar-dark .navbar-nav .show>.nav-link {
				color: <?php echo get_theme_mod( 'header_text_color_settings', '#ffffff'); ?> !important;
				opacity: 0.9;
			}

			.navbar-brand-image {
				background-image: url(<?php echo get_theme_mod( 'header_logo_settings', $img_path.'/default-header-logo.png' ); ?>)
			}


			/* 2.2:- Carousel Styles */
			.carousel-image {
				padding-top: <?php echo get_theme_mod( 'carousel_height_settings', '25' ).'%'; ?> !important;
				width: 100%;
				background-repeat: no-repeat;
				background-position: center;
				background-size: contain;
			}


			/* 3.2:- Sidebar Styles */
			#sidebar-left,
			#sidebar-right {
				background-color: <?php echo get_theme_mod( 'sidebar_bg_color_settings', '#afafaf' ); ?> !important;
			}


			/* 4.3:- Footer Styles */
			#main-footer {
				background-color: <?php echo get_theme_mod( 'footer_bg_color_settings', '#ffffff' ); ?> !important;
				color: <?php echo get_theme_mod( 'footer_text_color_settings', '#000000' ); ?> !important;
			}
		</style>
		<?php
	});
