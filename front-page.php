<?php get_header( 'front' ); ?>
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
								<div class="row p-1 border-bottom border-dark">
									<?php if ( has_post_thumbnail() ): ?>
										<div class="col-2">
											<div class="post-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
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
