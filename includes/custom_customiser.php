<?php
	/* Table of Contents:
		1.0:- Globals
			1.1:- Link Text Color
			1.2:- Globals Styles
		2.0:- Header
			2.1:- Header Background Color
			2.2:- Header Text Color
			2.3:- Header Logo
			2.4:- Header Styles
		3.0:- Carousel
			3.1:- Carousel Height
			3.2:- Carousel Image Size
			3.3:- Carousel Styles
		4.0:- Sidebar
			4.1:- Sidebar Background Color
			4.2:- Sidebar Text Color
			4.3:- Sidebar Styles
		5.0:- Footer
			5.1:- Footer Background Color
			5.2:- Footer Text Color
			5.3:- Footer Styles
	*/


	add_action( 'customize_register', function ( $wp_customize ) {
		$img_path = get_template_directory_uri().'/assets/img';

		// 1.0:- Globals

		// 1.1:- Link Text Color
		$link_text_color_setting_args = array(
			'default'   => '#007bff',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'link_text_color_setting', $link_text_color_setting_args );

		$link_text_color_control_args = array(
			'label'    => __( 'Link Text Colour', 'cliveschemist' ),
			'section'  => 'colors',
			'settings' => 'link_text_color_setting',
		);

		$link_text_color_control = new WP_Customize_Color_Control( $wp_customize, 'link_text_color_control', $link_text_color_control_args );

		$wp_customize->add_control( $link_text_color_control );

		// 2.0:- Header

		// 2.1:- Header Background Color
		$header_bg_color_setting_args = array(
			'default'   => '#00b6f0',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'header_bg_color_setting', $header_bg_color_setting_args);

		$header_bg_color_control_args = array(
			'label'    => __( 'Header Background Colour', 'cliveschemist' ),
			'section'  => 'colors',
			'settings' => 'header_bg_color_setting',
		);

		$header_bg_color_control = new WP_Customize_Color_Control( $wp_customize, 'header_bg_color_control', $header_bg_color_control_args );

		$wp_customize->add_control( $header_bg_color_control );


		// 2.2:- Header Text Color
		$header_text_color_setting_args = array(
			'default'   => '#ffffff',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'header_text_color_setting', $header_text_color_setting_args );

		$header_text_color_control_args = array(
			'label'    => __( 'Header Text Colour', 'cliveschemist' ),
			'section'  => 'colors',
			'settings' => 'header_text_color_setting',
		);

		$header_text_color_control = new WP_Customize_Color_Control( $wp_customize, 'header_text_color_control', $header_text_color_control_args );

		$wp_customize->add_control( $header_text_color_control );


		// 2.3:- Header Logo
		$header_logo_setting_args = array(
			'default'   => $img_path.'/default-header-logo.png',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'header_logo_setting', $header_logo_setting_args );

		$header_logo_control_args = array(
			'label'    => __( 'Header Logo', 'cliveschemist' ),
			'section'  => 'title_tagline',
			'settings' => 'header_logo_setting',
		);

		$header_logo_control = new WP_Customize_Image_Control( $wp_customize, 'header_logo_control', $header_logo_control_args );

		$wp_customize->add_control( $header_logo_control );


		// 3.0:- Carousel
		$carousel_section_args = array(
			'title'       => __( 'Carousel', 'cliveschemist' ),
			'description' => 'Customisation options for the carousel, which only appears on the front page.',
			'priority'    => 20,
		);

		$wp_customize->add_section( 'custom_carousel', $carousel_section_args );


		// 3.1:- Carousel Height
		$carousel_height_setting_args = array(
			'default'   => '30',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'carousel_height_setting', $carousel_height_setting_args );

		$carousel_height_input_attrs = array(
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		);

		$carousel_height_control_args = array(
			'label'       => __( 'Carousel Height', 'cliveschemist' ),
			'description' => 'The carousel\'s height is a percentage of the browser window\'s height.',
			'section'     => 'custom_carousel',
			'settings'    => 'carousel_height_setting',
			'type'        => 'number',
			'input_attrs' => $carousel_height_input_attrs,
		);

		$carousel_height_control = new WP_Customize_Control( $wp_customize, 'carousel_height_control', $carousel_height_control_args );

		$wp_customize->add_control( $carousel_height_control );


		// 3.2:- Carousel Image Size
		$carousel_imagesize_setting_args = array(
			'default'   => 'contain',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'carousel_imagesize_setting', $carousel_imagesize_setting_args );

		$carousel_imagesize_input_choices = array(
			'cover'   => 'Cover',
			'contain' => 'Contain',
		);

		$carousel_imagesize_control_args = array(
			'label'       => __( 'Carousel Image Size', 'cliveschemist' ),
			'description' => 'The image size is how the images fit into the carousel.<br /><br />\'Contain\' has the images fit entirely into the carousel, but can leave some white space as a result, while \'Cover\' will resize images to fit into the Carousel.<br /><br /><b>Be aware</b> when using the Cover option, as it will resize the image to fit the carousel, and if the image is too small it may become blurry/pixellated. If the image is taller than it is wide, or vice versa, then some of the image will not be visible.',
			'section'     => 'custom_carousel',
			'settings'    => 'carousel_imagesize_setting',
			'type'        => 'select',
			'choices'     => $carousel_imagesize_input_choices,
		);

		$carousel_imagesize_control = new WP_Customize_Control( $wp_customize, 'carousel_imagesize_control', $carousel_imagesize_control_args );

		$wp_customize->add_control( $carousel_imagesize_control );


		// 4.0:- Sidebar

		// 4.1:- Sidebar Background Color
		$sidebar_bg_color_setting_args = array(
			'default'   => '#afafaf',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'sidebar_bg_color_setting', $sidebar_bg_color_setting_args );

		$sidebar_bg_color_control_args = array(
			'label'    => __( 'Sidebar Background Colour', 'cliveschemist' ),
			'section'  => 'colors',
			'settings' => 'sidebar_bg_color_setting',
		);

		$sidebar_bg_color_control = new WP_Customize_Color_Control( $wp_customize, 'sidebar_bg_color_control', $sidebar_bg_color_control_args );

		$wp_customize->add_control( $sidebar_bg_color_control );


		// 4.2:- Sidebar Text Color
		$sidebar_text_color_setting_args = array(
			'default'   => '#000000',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'sidebar_text_color_setting', $sidebar_text_color_setting_args );

		$sidebar_text_color_control_args = array(
			'label'    => __( 'Sidebar Text Colour', 'cliveschemist' ),
			'section'  => 'colors',
			'settings' => 'sidebar_text_color_setting',
		);

		$sidebar_text_color_control = new WP_Customize_Color_Control( $wp_customize, 'sidebar_text_color_control', $sidebar_text_color_control_args );

		$wp_customize->add_control( $sidebar_text_color_control );


		// 5.0:- Footer

		// 5.1:- Footer Background Color
		$footer_bg_color_setting_args = array(
			'default'   => '#ffffff',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'footer_bg_color_setting', $footer_bg_color_setting_args );

		$footer_bg_color_control_args = array(
			'label'    => __( 'Footer Background Colour', 'cliveschemist' ),
			'section'  => 'colors',
			'settings' => 'footer_bg_color_setting',
		);

		$footer_bg_color_control = new WP_Customize_Color_Control( $wp_customize, 'footer_bg_color_control', $footer_bg_color_control_args );

		$wp_customize->add_control( $footer_bg_color_control );


		// 5.2:- Footer Text Color
		$footer_text_color_setting_args = array(
			'default'   => '#000000',
			'transport' => 'refresh',
		);

		$wp_customize->add_setting( 'footer_text_color_setting', $footer_text_color_setting_args );

		$footer_text_color_control_args = array(
			'label'    => __( 'Footer Text Colour', 'cliveschemist' ),
			'section'  => 'colors',
			'settings' => 'footer_text_color_setting',
		);

		$footer_text_color_control = new WP_Customize_Color_Control( $wp_customize, 'footer_text_color_control', $footer_text_color_control_args );

		$wp_customize->add_control( $footer_text_color_control );
	});


	add_action( 'wp_head', function() {
		$img_path = get_template_directory_uri().'/assets/img';
		?>
		<style type="text/css">
			/* 1.2:- Globals Styles */
			a:not(.ab-item):not(.btn) {
				color: <?php echo get_theme_mod( 'link_text_color_setting', '#007bff' ); ?> !important;
			}

			/* 2.4:- Header Styles */
			.header-bg {
				background-color: <?php echo get_theme_mod( 'header_bg_color_setting', '#00b6f0' ); ?> !important;
			}

			.navbar-dark .navbar-nav .nav-link {
				color: <?php echo get_theme_mod( 'header_text_color_setting', '#ffffff' ); ?> !important;
				opacity: 0.5;
			}

			.navbar-dark .navbar-nav .active>.nav-link,
			.navbar-dark .navbar-nav .nav-link.active,
			.navbar-dark .navbar-nav .nav-link.show,
			.navbar-dark .navbar-nav .show>.nav-link {
				color: <?php echo get_theme_mod( 'header_text_color_setting', '#ffffff'); ?> !important;
				opacity: 0.9;
			}

			.navbar-brand-image {
				background-image: url(<?php echo esc_url( get_theme_mod( 'header_logo_setting', $img_path.'/default-header-logo.png' ) ); ?>) !important;
			}


			/* 3.3:- Carousel Styles */
			.carousel-image {
				padding-top: <?php echo get_theme_mod( 'carousel_height_setting', '30' ).'%'; ?> !important;
				width: 100%;
				background-repeat: no-repeat;
				background-position: center;
				background-size: <?php echo get_theme_mod( 'carousel_imagesize_setting', 'contain' ) ?> !important;
			}


			/* 4.3:- Sidebar Styles */
			#sidebar {
				background-color: <?php echo get_theme_mod( 'sidebar_bg_color_setting', '#afafaf' ); ?> !important;
				color: <?php echo get_theme_mod( 'sidebar_text_color_setting', '#000000' ); ?> !important;
			}


			/* 5.3:- Footer Styles */
			#main-footer {
				background-color: <?php echo get_theme_mod( 'footer_bg_color_setting', '#ffffff' ); ?> !important;
				color: <?php echo get_theme_mod( 'footer_text_color_setting', '#000000' ); ?> !important;
			}
		</style>
		<?php
	});
