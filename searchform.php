<?php // Theme search form ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field" placeholder="Ex. ACF Integration" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
</form>

