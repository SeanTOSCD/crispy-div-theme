<?php
if ( ! function_exists( 'crispydiv_post_thumbnail' ) ) :

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
endif;

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