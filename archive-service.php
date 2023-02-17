<?php
/**
 * Services archive page
 */

get_header();
crispydiv_page_header( array(
	'bg-color'            => 'background-pink',
	'corner-accent-color' => 'white-white',
	'title'               => get_field( get_queried_object()->name . 's_title', 'options' ) ?: get_queried_object()->name . 's',
	'description'         => get_field( get_queried_object()->name . 's_description', 'options' ),
) );
?>

    <div class="services-wrap">
		<?php
		$services = new WP_Query( array(
			'post_type'      => 'service',
			'post_status'    => 'publish',
			'posts_per_page' => - 1,
		) );

		if ( $services->have_posts() ) {
			while ( $services->have_posts() ) {
				$services->the_post();

				$the_slug  = get_post_field( 'post_name', get_post() );
				$the_title = get_the_title( get_the_ID() );

				$wp_services = array(
					'plugin-integration',
					'theme-development',
					'custom-development'
				);

				if ( in_array( $the_slug, $wp_services ) ) {
					$the_title = '<span class="wp-title-prefix">WordPress</span>' . $the_title;
				}

				get_template_part( 'template-parts/content', 'service', array(
					'the-slug'  => $the_slug,
					'the-title' => $the_title,
				) );
			}
		}
		?>
    </div>

<?php
get_footer();