<form method="get" id="searchform" class="form-inline search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div role="search">
		<input id="s" class="form-control mr-sm-2" type="text" name="s" placeholder="Search" value="<?php echo get_search_query(); ?>">
		<input id="searchsubmit" class="btn btn-primary" type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>">
	</div>
</form>
