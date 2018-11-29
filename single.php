<?php get_header(); ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<div class="row">
					<?php if ( is_active_sidebar( 'sidebar-left' ) ): ?>
						<div class="col-4 px-0">
							<div id="sidebar-left">
								<?php dynamic_sidebar( 'sidebar-left' ); ?>
							</div>
						</div>
					<?php endif; ?>

					<div class="col">
						<?php if ( have_posts() ): ?>
							<?php while ( have_posts() ): the_post(); ?>
								<div class="row p-1">
									<div class="col">
										<?php if ( has_post_thumbnail() ): ?>
											<div id="single-post-image" class="d-inline-block mr-2 float-left" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
										<?php endif; ?>

										<h2><?php the_title(); ?></h2>
										<?php the_content(); ?>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>

					<?php if ( is_active_sidebar( 'sidebar-right' ) ): ?>
						<div class="col-4 px-0">
							<div id="sidebar-right">
								<?php dynamic_sidebar( 'sidebar-right' ); ?>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
