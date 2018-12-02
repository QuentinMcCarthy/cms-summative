<?php get_header(); ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<div class="row">
					<?php get_template_part( 'template-sidebar-left', 'Left Sidebar' ); ?>

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

					<?php get_template_part( 'template-sidebar-right', 'Right Sidebar' ); ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
