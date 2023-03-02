<?php
/**
 * Single service template content
 */

if ( isset( $args ) ) {

	// Set default values for the arguments
	$args = wp_parse_args( $args, array(
		'the-slug'  => get_post_field( 'post_name', get_post() ),
		'the-title' => get_the_title( get_the_ID() ),
	) );
}
?>

<section id="<?php echo $args['the-slug']; ?>"
         class="<?php echo $args['the-slug']; ?>-section service-section element-spacing large">
    <div class="service-content-grid">
        <div class="service-description">
            <h2 class="section-title h3"><?php echo $args['the-title']; ?></h2>
			<?php
			// Service content description
			$content = get_the_content( get_the_ID() );
			if ( ! empty( $content ) ) {
				echo $content;
			} else {
				echo '<p>' . get_field( 'service_description', get_the_ID() ) . '</p>';
			}

			// CTA defaults
			$button_text      = 'Let\'s Work Together';
			$button_url       = home_url( '/contact/?type=work-together' );
			$button_classes   = array( 'button', 'purple' );
			$alt_link_text    = '';
			$alt_link_url     = '';
			$alt_link_classes = array( 'secondary-cta' );

			// Service type CTA overrides
			if ( 'plugin-integration' === $args['the-slug'] ) {
				$alt_link_text = 'Ask about your favorites.';
				$alt_link_url  = home_url( '/contact/?type=experience' );
			} else if ( 'theme-development' === $args['the-slug'] ) {
				$button_text = 'Start the Conversation';
			} else if ( 'custom-development' === $args['the-slug'] ) {
				$button_text = 'Let\'s Talk Details';
			}

			// The shared CTA
			crispydiv_button( array(
				'text'             => $button_text,
				'url'              => $button_url,
				'classes'          => $button_classes,
				'alt_link_text'    => $alt_link_text,
				'alt_link_url'     => $alt_link_url,
				'alt_link_classes' => $alt_link_classes,
			) );
			?>
        </div>
        <div class="service-aside">
			<?php
			/**
			 * Content by section
			 */
			if ( 'plugin-integration' === $args['the-slug'] ) {
				?>
                <h3 class="subdued-title">Some our favorite plugins and services</h3>
				<?php
				$customization_logos = get_customization_logos();
				if ( ! empty( $customization_logos ) ) {
					?>
                    <div class="customizations-service-grid">
						<?php foreach ( $customization_logos as $logo ) { ?>
                            <div class="customization-brand">
                                <div class="customization-brand-inner">
									<?php $logo_name = $logo['alias'] ?? $logo['name']; ?>
                                    <a class="brand-logo-link" href="<?php echo THEME_URI . '/' . $logo['id']; ?>" target="_blank"><img
                                                class="logo <?php echo str_replace( " ", "-", strtolower( $logo_name ) ); ?>-logo"
                                                src="<?php echo THEME_IMAGES . 'logos/' . $logo['image']; ?>"
                                                alt="<?php echo $logo['name'] . ' - ' . $logo['description']; ?>"
                                                aria-describedby="<?php echo $logo['description']; ?>"></a>
                                    <div class="brand-description"
                                         id="<?php echo $logo['description']; ?>"><?php echo $logo['description']; ?></div>
                                </div>
                            </div>
						<?php } ?>
                    </div>
					<?php
				}
			} else if ( 'theme-development' === $args['the-slug'] ) {
                ?>
                <h3 class="subdued-title">Proven Design Practices</h3>
                <?php
				get_template_part( 'template-parts/mock-browser' );
			} else if ( 'custom-development' === $args['the-slug'] ) {
				?>
                <div class="custom-development-accordion">
                    <span class="subdued-title">Custom Development Examples</span>
                    <div class="custom-development-example-accordion-items">
						<?php
						$custom_functionality = get_field( 'custom_development_example', get_the_ID() );
						if ( ! empty( $custom_functionality ) ) {
							foreach ( $custom_functionality as $functionality ) {
								?>
                                <div class="custom-development-example-accordion-item">
                                    <div class="custom-development-example-accordion-item-header">
                                        <span class="custom-development-example-accordion-item-title"><?php echo $functionality['title']; ?></span>
                                        <span class="custom-development-example-accordion-item-icon"><i
                                                    class="fa-solid fa-plus"></i></span>
                                    </div>
                                    <div class="custom-development-example-accordion-item-content">
										<?php echo $functionality['description']; ?>
                                    </div>
                                </div>
								<?php
							}
						}
						?>
                    </div>
                </div>
				<?php
			}
			?>
        </div>
    </div>
</section>