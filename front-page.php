<?php get_header( 'front' ); ?>
	<div class="row">
		<div class="col">
			<div class="row">
				<?php if ( is_active_sidebar( 'sidebar-left' ) ): ?>
					<div class="col-4">
						<div id="sidebar-left">
							<?php dynamic_sidebar( 'sidebar-left' ); ?>
						</div>
					</div>
				<?php endif; ?>

				<div class="col">

				</div>

				<?php if ( is_active_sidebar( 'sidebar-right' ) ): ?>
					<div class="col-4">
						<div id="sidebar-right">
							<?php dynamic_sidebar( 'sidebar-right' ); ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
