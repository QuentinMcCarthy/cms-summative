<?php
	/* Table of Contents:
		1.0:- Customizer Settings
			1.1:- Header Styles Section
			1.2:- Header Background
			1.3:- Header Text
			1.4:- Header Logo
			1.5:- Carousel Section
			1.6:- Carousel Height
			1.7:- Sidebar Section
			1.8:- Sidebar Background
			1.9:- Footer Section
			1.10:- Footer Background
			1.11:- Footer Text Colour
		2.0:- Customizer Styles
			2.1:- Header Background Styles
			2.2:- Header Text Styles
			3.3:- Header Logo Styles
			2.4:- Carousel Height Styles
			2.5:- Sidebar Background Styles
			2.6:- Footer Background Styles
			2.7:- Footer Text Colour Styles
	*/


	// 1.0:- Customizeer Settings
	function custom_theme_customizer( $wp_customize ) {
		// 1.1:- Header Styles Section
		$header_styles_section_args = array(
			'title'    => __( 'Header Styles', 'cliveschemist' ),
			'priority' => 20,
		);

		$wp_customize->add_section( 'custom_theme_header_info', $header_styles_section_args );


		// 1.2:- Header Background
		$header_background_colour_setting_args = array(
			'default'   => '#343a40',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'header_background_colour_setting', $header_background_colour_setting_args);

		$header_background_colour_control_args = array(
			'label'    => __( 'Header Background Colour', 'cliveschemist' ),
			'section'  => 'custom_theme_header_info',
			'settings' => 'header_background_colour_setting',
		);

		$header_background_colour_control = new WP_Customize_Color_Control( $wp_customize, 'header_background_colour_control', $header_background_colour_control_args );

		$wp_customize->add_control( $header_background_colour_control );


		// 1.3:- Header Text
		$header_text_colour_setting_args = array(
			'default'   => '#ffffff',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'header_text_colour_setting', $header_text_colour_setting_args );

		$header_text_colour_control_args = array(
			'label'   => __( 'Header Text Colour', 'cliveschemist' ),
			'section' => 'custom_theme_header_info',
			'settings' => 'header_text_colour_setting',
		);

		$header_text_colour_control = new WP_Customize_Color_Control( $wp_customize, 'header_text_colour_control', $header_text_colour_control_args );

		$wp_customize->add_control( $header_text_colour_control );


		// 1.4:- Header Logo
		$header_logo_setting_args = array(
			'default'   => get_template_directory_uri().'/assets/img/default-header-logo.png',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'header_logo_setting', $header_logo_setting_args );

		$header_logo_control_args = array(
			'label'    => __( 'Header Logo', 'cliveschemist' ),
			'section'  => 'custom_theme_header_info',
			'settings' => 'header_logo_setting',
		);

		$header_logo_control = new WP_Customize_Image_Control( $wp_customize, 'header_logo_control', $header_logo_control_args );

		$wp_customize->add_control( $header_logo_control );


		// 1.5:- Carousel Section
		$carousel_styles_section_args = array(
			'title'    => __( 'Carousel Styles', 'cliveschemist' ),
			'priority' => 20,
		);

		$wp_customize->add_section( 'custom_theme_carousel_info', $carousel_styles_section_args );


		// 1.6:- Carousel Height
		$carousel_height_setting_args = array(
			'default'   => '25',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'carousel_height_setting', $carousel_height_setting_args );

		$carousel_number_input_attrs = array(
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		);

		$carousel_height_control_args = array(
			'label'       => __( 'Carousel Height', 'cliveschemist' ),
			'section'     => 'custom_theme_carousel_info',
			'settings'    => 'carousel_height_setting',
			'type'        => 'number',
			'input_attrs' => $carousel_number_input_attrs,
		);

		$carousel_height_control = new WP_Customize_Control( $wp_customize, 'carousel_height_control', $carousel_height_control_args );

		$wp_customize->add_control( $carousel_height_control );


		// 1.7:- Sidebar Section
		$sidebar_styles_section_args = array(
			'title'    => __( 'Sidebar Styles', 'cliveschemist' ),
			'priority' => 20,
		);

		$wp_customize->add_section( 'custom_theme_sidebar_info', $sidebar_styles_section_args );


		// 1.8:- Sidebar Background
		$sidebar_background_colour_setting_args = array(
			'default'   => '#afafaf',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'sidebar_background_colour_setting', $sidebar_background_colour_setting_args );

		$sidebar_background_colour_control_args = array(
			'label'    => __( 'Sidebar Background Colour', 'cliveschemist' ),
			'section'  => 'custom_theme_sidebar_info',
			'settings' => 'sidebar_background_colour_setting',
		);

		$sidebar_background_colour_control = new WP_Customize_Color_Control( $wp_customize, 'sidebar_background_colour_control', $sidebar_background_colour_control_args );

		$wp_customize->add_control( $sidebar_background_colour_control );


		// 1.9:- Footer Section
		$footer_styles_section_args = array(
			'title'    => __( 'Footer Styles', 'cliveschemist' ),
			'priority' => 20,
		);

		$wp_customize->add_section( 'custom_theme_footer_info', $footer_styles_section_args );


		// 1.10:- Footer Background
		$footer_background_colour_setting_args = array(
			'default'   => '#ffffff',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'footer_background_colour_setting', $footer_background_colour_setting_args );

		$footer_background_colour_control_args = array(
			'label'    => __( 'Footer Background Colour', 'cliveschemist' ),
			'section'  => 'custom_theme_footer_info',
			'settings' => 'footer_background_colour_setting',
		);

		$footer_background_colour_control = new WP_Customize_Color_Control( $wp_customize, 'footer_background_colour_control', $footer_background_colour_control_args );

		$wp_customize->add_control( $footer_background_colour_control );


		// 1.11:- Footer Text Colour
		$footer_text_colour_setting_args = array(
			'default'   => '#000000',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'footer_text_colour_setting', $footer_text_colour_setting_args );

		$footer_text_colour_control_args = array(
			'label'    => __( 'Footer Text Colour', 'cliveschemist' ),
			'section'  => 'custom_theme_footer_info',
			'settings' => 'footer_text_colour_setting',
		);

		$footer_text_colour_control = new WP_Customize_Color_Control( $wp_customize, 'footer_text_colour_control', $footer_text_colour_control_args );

		$wp_customize->add_control( $footer_text_colour_control );
	}

	add_action( 'customize_register', 'custom_theme_customizer' );


	// 2.0:- Customizer Styles
	function custom_theme_customizer_styles() {
		?>
		<style type="text/css">
			/* 2.1:- Header Background Styles */
			.header-bg {
				background-color: <?php echo get_theme_mod( 'header_background_colour_setting', '#343a40' ); ?> !important;
			}


			/* 2.2:- Header Text Styles */
			.navbar-dark .navbar-nav .nav-link {
				color: <?php echo get_theme_mod( 'header_text_colour_setting', '#ffffff' ); ?> !important;
				opacity: 0.5;
			}

			.navbar-dark .navbar-nav .active>.nav-link,
			.navbar-dark .navbar-nav .nav-link.active,
			.navbar-dark .navbar-nav .nav-link.show,
			.navbar-dark .navbar-nav .show>.nav-link {
				color: <?php echo get_theme_mod( 'header_text_colour_setting', '#ffffff'); ?> !important;
				opacity: 0.9;
			}


			/* 2.3:- Header Logo Styles */
			.navbar-brand-image {
				background-image: url(<?php echo get_theme_mod( 'header_logo_setting', get_template_directory_uri().'/assets/img/default-header-logo.png' ); ?>)
			}


			/* 2.4:- Carousel Height Styles */
			.carousel-image {
				padding-top: <?php echo get_theme_mod( 'carousel_height_setting', '25' ).'%'; ?> !important;
				width: 100%;
				background-repeat: no-repeat;
				background-position: center;
				background-size: contain;
			}


			/* 2.5:- Sidebar Background Styles */
			#sidebar-left,
			#sidebar-right {
				background-color: <?php echo get_theme_mod( 'sidebar_background_colour_setting', '#afafaf' ); ?> !important;
			}


			/* 2.6:- Footer Background Styles */
			#main-footer {
				background-color: <?php echo get_theme_mod( 'footer_background_colour_setting', '#ffffff' ); ?> !important;
			}


			/* 2.7:- Footer Text Colour Styles */
			#main-footer {
				color: <?php echo get_theme_mod( 'footer_text_colour_setting', '#000000' ); ?> !important;
			}
		</style>
		<?php
	}

	add_action( 'wp_head', 'custom_theme_customizer_styles' );
