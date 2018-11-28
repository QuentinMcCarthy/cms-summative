<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="row">
					<div class="col">
						<?php if ( have_posts() ): ?>
							<?php get_template_part( 'carousel', 'Carousel' ); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
