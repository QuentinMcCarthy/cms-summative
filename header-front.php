<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '-', true, 'right'); bloginfo( 'name' ); ?></title>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php if ( has_nav_menu( 'topnav' ) ): ?>
			<nav class="navbar navbar-expand-lg navbar-dark header-bg">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#default-nav-container" aria-controls="default-nav-container" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="<?php echo esc_url( get_home_url() ); ?>"><div class="navbar-brand-image"></div></a>
				<?php
					wp_nav_menu(array(
						'theme_location'  => 'topnav',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'top-nav-container',
						'menu_class'      => 'navbar-nav mr-auto',
						'menu_id'         => 'top-nav-menu',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
					));
				?>
			</nav>
		<?php endif; ?>

		<div class="row mx-0">
			<div class="col px-0">
				<?php if ( have_posts() ): ?>
					<?php get_template_part( 'template-carousel', 'Carousel' ); ?>
				<?php endif; ?>
			</div>
		</div>

		<?php if ( has_nav_menu( 'middlenav' ) ): ?>
			<nav class="navbar navbar-expand-lg navbar-dark header-bg">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#default-nav-container" aria-controls="default-nav-container" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="<?php echo esc_url( get_home_url() ); ?>"><div class="navbar-brand-image"></div></a>
				<?php
					wp_nav_menu(array(
						'theme_location'  => 'middlenav',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'middle-nav-container',
						'menu_class'      => 'navbar-nav mr-auto',
						'menu_id'         => 'middle-nav-menu',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
					));
				?>
			</nav>
		<?php endif; ?>
