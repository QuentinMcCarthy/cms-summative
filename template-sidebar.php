<?php
	/* Template Name: Right Sidebar */
?>

<?php if ( is_active_sidebar( 'sidebar' ) ): ?>
	<div class="col-12 col-md-6 col-lg-5 px-0">
		<div id="sidebar" class="border-bottom border-dark">
			<?php dynamic_sidebar( 'sidebar' ); ?>
		</div>
	</div>
<?php endif; ?>
