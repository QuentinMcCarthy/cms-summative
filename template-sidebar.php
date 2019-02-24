<?php
	/* Template Name: Right Sidebar */
?>

<?php if ( is_active_sidebar( 'sidebar' ) ): ?>
	<div class="col-12 col-md-5 col-lg-4 col-xl-3 px-0 border-left">
		<div id="sidebar" class="border-bottom border-dark">
			<?php dynamic_sidebar( 'sidebar' ); ?>
		</div>
	</div>
<?php endif; ?>
