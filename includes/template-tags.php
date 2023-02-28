<?php


/**
 * Prints HTML with meta information for the current post-date/time.
 */
function crispydiv_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf(
		$time_string,
		esc_attr( get_the_date( DATE_W3C ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( DATE_W3C ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( 'Posted on %s', 'post date', 'crispydiv' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);
	echo '<span class="posted-on">' . $posted_on . '</span>';
}


/**
 * Prints HTML with meta information for the current author.
 */
function crispydiv_posted_by() {
	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', 'crispydiv' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);
	echo '<span class="byline"> ' . $byline . '</span>';
}


/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function crispydiv_post_categories_tags() {

	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'crispydiv' ) );
		if ( $categories_list ) {
			/* translators: 1: list of categories. */
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'crispydiv' ) . '</span>', $categories_list );
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'crispydiv' ) );
		if ( $tags_list ) {
			/* translators: 1: list of tags. */
			printf( '<span class="tags-links"> with an emphasis on ' . esc_html__( '%1$s.', 'crispydiv' ) . '</span>', $tags_list );
		}
	}
}


/**
 * Displays an optional post thumbnail.
 */
function crispydiv_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	if ( is_singular() ) :
		?>

        <div class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
        </div>

	<?php else : ?>

        <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
			the_post_thumbnail(
				'post-thumbnail',
				array(
					'alt' => the_title_attribute(
						array(
							'echo' => false,
						)
					),
				)
			);
			?>
        </a>

	<?php
	endif;
}


if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;


/**
 * Main site tagline output
 *
 * @return false|string
 */
function get_crispydiv_tagline() {
    return 'Bespoke Design & Development for WordPress<span class="highlight-text">.</span>';
}


/**
 * Social media link grid
 *
 * @return void
 */
function crispydiv_social_links() {
	?>
    <div class="socials-flex">
        <a href="https://twitter.com/crispydiv" class="social-icon twitter" target="_blank"><i class="fa-brands fa-twitter"></i> Twitter</a>
        <a href="https://instagram.com/crispydivdesigns" class="social-icon instagram" target="_blank"><i class="fa-brands fa-instagram"></i> Instagram</a>
    </div>
	<?php
}


/**
 * Get array of company logos for customizations
 */
function get_customization_logos( $exclusions = array() ) {

	$logos = array(
		'advanced-custom-fields' => array(
			'name' => 'Advanced Custom Fields',
			'description' => 'Custom Fields Management for WordPress',
			'image' => 'advanced-custom-fields-logo.png',
			'type' => array( 'Plugin', 'Custom Fields Management' ),
			'url' => 'https://www.advancedcustomfields.com/',
		),
		'facetwp' => array(
			'name' => 'FacetWP',
			'description' => 'Advanced Content Filtering for WordPress',
			'image' => 'facetwp-logo.png',
			'type' => array( 'Plugin', 'Filtering Tool' ),
			'url' => 'https://facetwp.com/',
		),
		'gravity-forms' => array(
			'name' => 'Gravity Forms',
			'description' => 'Drag & Drop Form Builder for WordPress',
			'image' => 'gravity-forms-logo.svg',
			'type' => array( 'Plugin', 'Form Builder' ),
			'url' => 'https://www.gravityforms.com',
		),
		'elementor' => array(
			'name' => 'Elementor',
			'description' => 'Drag & Drop Page Builder for WordPress',
			'image' => 'elementor-logo.svg',
            'type' => array( 'Plugin', 'Page Builder' ),
            'url' => 'https://elementor.com/',
		),
		'mailchimp' => array(
			'name' => 'Mailchimp',
			'description' => 'Email Marketing & Automations Service',
			'image' => 'mailchimp-logo.svg',
			'type' => array( 'Plugin', 'Online Service' ),
			'url' => 'https://mailchimp.com/',
		),
		'stripe' => array(
			'name' => 'Stripe',
			'description' => 'Payment Processing Service for the Internet',
			'image' => 'stripe-logo.svg',
			'type' => array( 'Plugin', 'Online Payments' ),
			'url' => 'https://stripe.com/',
		),
		'tailwindcss' => array(
			'name' => 'Tailwind CSS',
			'alias' => 'TailwindCSS',
			'description' => 'CSS Framework for Modern Web Development',
			'image' => 'tailwindcss-logo.svg',
			'type' => array( 'Plugin', 'Front-end Framework' ),
			'url' => 'https://tailwindcss.com/',
		),
		'affiliatewp' => array(
			'name' => 'AffiliateWP',
			'description' => 'WordPress Affiliate Program Management',
			'image' => 'affiliatewp-logo.svg',
			'type' => array( 'Plugin', 'Affiliate Management' ),
			'url' => 'https://affiliatewp.com/',
		),
		'woocommerce' => array(
			'name' => 'WooCommerce',
			'description' => 'E-commerce Functionality for WordPress',
			'image' => 'woocommerce-logo.svg',
			'type' => array( 'Plugin', 'E-commerce' ),
			'url' => 'https://woocommerce.com/',
		),
		'zapier' => array(
			'name' => 'Zapier',
			'description' => 'Automate Integrations for Various Web Services',
			'image' => 'zapier-logo.svg',
			'type' => array( 'Plugin', 'Online Service' ),
			'url' => 'https://zapier.com/',
		),
		'bootstrap' => array(
			'name' => 'Bootstrap',
			'description' => 'Front-end Web Development Framework',
			'image' => 'bootstrap-logo.svg',
			'type' => array( 'Plugin', 'Front-end Framework' ),
			'url' => 'https://getbootstrap.com/',
		),
		'searchwp' => array(
			'name' => 'SearchWP',
			'description' => 'Advanced Search Engine for WordPress',
			'image' => 'searchwp-logo.png',
			'type' => array( 'Plugin', 'Search Tool' ),
			'url' => 'https://searchwp.com/',
		),
		'easy-digital-downloads' => array(
			'name' => 'Easy Digital Downloads',
			'description' => 'E-commerce Functionality for WordPress',
			'image' => 'easy-digital-downloads-logo.svg',
			'type' => array( 'Plugin', 'E-commerce' ),
			'url' => 'https://easydigitaldownloads.com/',
		),
		'beaver-builder' => array(
			'name' => 'Beaver Builder',
			'description' => 'Drag & Drop Page Builder for WordPress',
			'image' => 'beaver-builder-logo.png',
			'type' => array( 'Plugin', 'Page Builder' ),
			'url' => 'https://www.wpbeaverbuilder.com/',
		),
	);

    // Remove exclusions from array
    if ( ! empty( $exclusions ) ) {
        foreach ( $exclusions as $exclusion ) {
            unset( $logos[ $exclusion ] );
        }
    }

    return $logos;
}


/**
 * Custom page header
 *
 * @param $args array
 *
 * @return void
 */
function crispydiv_page_header( $args = array() ) {
    get_template_part( 'template-parts/section', 'page-header', $args );
}


/**
 * Custom page header
 *
 * @return bool
 */
function get_crispydiv_logo_by_color() {

    if (
            is_front_page()
            || is_home()
            || is_singular( 'post' )
            || is_post_type_archive( 'service' )
            || is_post_type_archive( 'course' )
            || is_singular( 'course' )
            || is_singular( 'service' )
    ) {
        return true;
    }

    return false;
}


/**
 * Button
 *
 * @param $args array
 *
 * @return void
 */
function crispydiv_button( $args = array() ) {
    get_template_part( 'template-parts/button', null, $args );
}