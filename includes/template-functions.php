<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Crispy_Div
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
add_filter( 'body_class', function( $classes ) {
	global $post;

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of page-{slug} for every page.
	if ( isset( $post ) ) {
		$classes[] = 'page-' . $post->post_name;

		if ( is_front_page() ) {
			$classes[] = 'page-front';
		}
	}

	if ( get_crispydiv_logo_by_color() ) {
		$classes[] = 'has-dark-header';
	}

    // Conditionally add header color classes
    if ( is_front_page() || is_home() || is_singular( 'post' ) || is_post_type_archive( 'course' ) || is_singular( 'course' ) ) {
        $classes[] = 'has-purple-header';
    } else if ( is_post_type_archive( 'service' ) || is_singular( 'service' ) ) {
	    $classes[] = 'has-pink-header';
    } else {
	    $classes[] = 'has-gray-header';
    }

	return $classes;
} );

/**
 * Pre get posts
 *
 * @param $query
 *
 * @return void
 */
add_action( 'pre_get_posts', function( $query ) {
	if ( is_search() && $query->is_main_query() && ! is_admin() ) {
		$query->set( 'post_type', 'post' );
	}
} );

/**
 * Excerpt adjustments
 *
 * @param $length
 *
 * @return int
 */
add_filter( 'excerpt_length', function( $length ) {
	return 20;
}, 999 );
add_filter( 'excerpt_more', function( $more ) {
	return '...';
} );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
add_action( 'wp_head', function() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
} );

/**
 * Add Font Awesome to the theme
 */
add_action( 'wp_head', function() {
    ?>
    <script src="https://kit.fontawesome.com/6a74fc38c5.js" crossorigin="anonymous"></script>
    <?php
} );

/**
 * Add a class to the body if the header is dark
 *
 * @param $classes
 *
 * @return array
 */
add_action( 'wp_footer', function() {
	?>
    <!-- ... other HTML ... -->

    <!-- Load React. -->
    <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>  <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <!-- Load our React component. -->
    <script src="like_button.js"></script>
	<?php
} );

/**
 * Add icon to the last menu item (Members)
 * @param $items
 * @param $args
 *
 * @return mixed|string
 */
add_filter( 'wp_nav_menu_items', function( $items, $args ) {

	$query = new WP_Query( array(
		'post_type' => 'course',
		'post_status' => 'publish',
		'posts_per_page' => 1,
		'fields' => 'ids'
	) );

	if ( $query->have_posts() ) {
		if ( $args->theme_location == 'primary-menu' ) {
			$items .= '<li class="menu-item members-menu-item"><a href="' . home_url( '/members/' ) . '"><i class="fa-solid fa-circle-user"></i> Members</a></li>';
		}
		wp_reset_postdata();
		return $items;
	}

	return $items;

}, 10, 2 );

