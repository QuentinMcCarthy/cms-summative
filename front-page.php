<?php get_header( 'front' ); ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<div class="row">
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
										<?php the_excerpt(); ?>
										<a class="btn btn-primary" href="<?php echo esc_url( get_permalink() ); ?>">Read More</a>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>

					<?php get_template_part( 'template-sidebar', 'Sidebar' ); ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
