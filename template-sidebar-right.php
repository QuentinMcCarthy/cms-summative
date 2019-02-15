<?php
	/* Template Name: Right Sidebar */
?>

<?php if ( is_active_sidebar( 'sidebar-right' ) ): ?>
	<div class="col-4 px-0">
		<div id="sidebar-right" class="border-bottom border-dark">
			<?php dynamic_sidebar( 'sidebar-right' ); ?>
		</div>
	</div>
<?php endif; ?>
