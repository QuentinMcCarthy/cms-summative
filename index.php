<?php get_header(); ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<div class="row">
					<?php get_template_part( 'sidebar-left', 'Left Sidebar' ); ?>

					<div class="col">
						<?php if ( have_posts() ): ?>
							<?php while ( have_posts() ): the_post(); ?>
								<div class="row p-1 border-bottom border-dark">
									<?php if ( has_post_thumbnail() ): ?>
										<div class="col-2">
											<div class="post-image" style="background-image: url('<?php esc_url( the_post_thumbnail_url() ); ?>')"></div>
										</div>
									<?php endif; ?>

									<div class="col">
										<h2><?php the_title(); ?></h2>
										<?php the_content(); ?>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>

					<?php get_template_part( 'sidebar-right', 'Right Sidebar' ); ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
