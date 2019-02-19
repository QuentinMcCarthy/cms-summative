<?php
	/* Table of Contents:
		1.0:- Theme Setup
		2.0:- Includes
		3.0:- Stylesheets and Scripts
		3.0:- Init
			3.1:- Menus
			3.2:- Custom Post Types
				3.2.1:- Carousel Images
			3.3:- Custom Background
			3.4:- Post Thumbnails
			3.5:- Post Formats
		5.0:- Widget Menus
	*/


	// 1.0:- Includes
	require_once get_template_directory().'/includes/class-wp-bootstrap-navwalker.php';

	require get_parent_theme_file_path( './includes/custom_customiser.php' );

	require get_parent_theme_file_path( './includes/educational_alert.php' );


	// 2.0:- Stylesheets and Scripts
	add_action( 'wp_enqueue_scripts', function() {
		$css_directory = get_template_directory_uri().'/assets/css/';
		$js_directory = get_template_directory_uri().'/assets/js/';

		// Stylesheets
		wp_enqueue_style( 'bootstrap', $css_directory.'bootstrap.min.css', array(), '4.1.3', 'all' );
		wp_enqueue_style( 'master', $css_directory.'master.css', array(), '0.0.6', 'all' );

		// Scripts
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'bootstrapjs', $js_directory.'bootstrap.min.js', array(), '4.1.3', true );
		wp_enqueue_script( 'theme-scripts', $js_directory.'theme-scripts.js', array(), '0.0.3', true );
	});


	// 3.0:- Init
	function custom_theme_init() {
		// 3.1:- Menus
		register_nav_menu( 'topnav', __( 'Navbar above Carousel, overrides Navbar below Carousel' ) );
		register_nav_menu( 'middlenav', __( 'Navbar below Carousel' ) );

		// 3.2:- Custom Post Types

		// 3.2.1:- Carousel Images
		$carousel_images_labels = array(
			'name'               => _x( 'Carousel', 'Post type name', '18wdwu02theme' ),
			'singular_name'      => _x( 'Carousel Image', 'Post type singular name', '18wdwu02theme' ),
			'add_new_item'       => _x( 'Add New Image', 'Adding new carousel image', '18wdwu02theme' ),
			'edit_item'          => _x( 'Edit Carousel Image', 'Editing carousel image', '18wdwu02theme' ),
			'new_item'           => _x( 'New Carousel Image', 'New carousel image', '18wdwu02theme' ),
			'view_item'          => _x( 'View Carousel Image', 'Viewing carousel image', '18wdwu02theme' ),
			'view_items'         => _x( 'View Carousel Images', 'Viewing carousel images', '18wdwu02theme' ),
			'search_items'       => _x( 'Search Carousel Images', 'Searching carousel images', '18wdwu02theme' ),
			'not_found'          => _x( 'No Carousel Images found', 'No carousel images found', '18wdwu02theme' ),
			'not_found_in_trash' => _x( 'No Carousel Images found in Trash', 'No Carousel Images found in Trash', '18wdwu02theme' ),
			'all_items'          => _x( 'All Carousel Images', 'All carousel images', '18wdwu02theme' ),
		);

		$carousel_images_supports = array(
			'title',
			'thumbnail',
		);

		$carousel_images_args = array(
			'labels'              => $carousel_images_labels,
			'description'         => 'Carousel images for the front-page carousel',
			'public'              => true,
			'hierarchical'        => true,
			'exclude_from_search' => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => false,
			'menu_position'       => 25,
			'menu_icon'           => 'dashicons-images-alt2',
			'supports'            => $carousel_images_supports,
			'query_var'           => true,
		);

		register_post_type( 'carousel', $carousel_images_args );


		// 3.3:- Custom Background
		$background_args = array(
			'default-color'          => 'ffffff',
			'default-image'          => '',
			'default-repeat'         => 'repeat',
			'default-position-x'     => 'left',
	        'default-position-y'     => 'top',
	        'default-size'           => 'auto',
			'default-attachment'     => 'fixed',
		);

		add_theme_support( 'custom-background', $background_args );


		// 3.4:- Post Thumbnails
		add_theme_support( 'post-thumbnails' );


		// 3.5:- Post Formats
		$post_formats = array(
			'aside',
			'gallery',
			'image',
			'video',
		);

		add_theme_support( 'post-formats', $post_formats );
	}

	add_action( 'init', 'custom_theme_init' );


	// 4.0:- Widget Menus
	add_action( 'widgets_init', function() {
		register_sidebar(array(
			'id'            => 'sidebar',
			'name'          => __( 'Sidebar', 'theme-slug' ),
			'description'   => __( 'Sidebar appears on the right side of all pages', 'theme-slug' ),
			'before_widget' => '<div id="%1$s" class="sidebar-widget p-2 border-bottom border-dark  %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));

		register_sidebar(array(
			'id'            => 'main-footer',
			'name'          => __( 'Main Footer', 'theme-slug' ),
			'description'   => __( 'Main footer appears at the bottom of all pages', 'theme-slug' ),
			'before_widget' => '<div id="%1$s" class="footer-widget p-2 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));
	});
