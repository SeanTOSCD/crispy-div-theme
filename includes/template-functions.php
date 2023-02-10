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

    if ( is_front_page() || is_post_type_archive( 'course' ) ) {
        $classes[] = 'has-purple-header';
    } else if ( is_post_type_archive( 'service' ) ) {
	    $classes[] = 'has-pink-header';
    } else {
        $classes[] = 'has-light-header';
    }

	return $classes;
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
