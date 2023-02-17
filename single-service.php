<?php
/**
 * The template for displaying all single services
 */

get_header();
crispydiv_page_header( array(
	'bg-color'            => 'background-pink',
	'corner-accent-color' => 'white-white',
	'title-label'         => 'Service:',
	'description'         => get_field( 'service_description', get_the_ID() ),
) );
$the_slug = get_post_field( 'post_name', get_post() );

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

		$the_slug    = get_post_field( 'post_name', get_post() );
		$the_title   = get_the_title( get_the_ID() );
		$wp_services = array( 'plugin-integration', 'theme-development', 'custom-development' );

		if ( in_array( $the_slug, $wp_services ) ) {
			$the_title = '<span class="wp-title-prefix">WordPress</span>' . $the_title;
		}

		get_template_part( 'template-parts/content', 'service', array(
			'the-slug'  => $the_slug,
			'the-title' => $the_title,
		) );
	}
}
get_footer();
