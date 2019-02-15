<?php
	/* Template Name: Left Sidebar */
?>

<?php if ( is_active_sidebar( 'sidebar-left' ) ): ?>
	<div class="col-4 px-0">
		<div id="sidebar-left" class="border-bottom border-dark">
			<?php dynamic_sidebar( 'sidebar-left' ); ?>
		</div>
	</div>
<?php endif; ?>
