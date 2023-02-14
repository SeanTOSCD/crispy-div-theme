<?php
/**
 * Services archive page
 */

get_header();
crispydiv_page_header( array(
    'bg-color' => 'background-pink',
    'corner-accent-color' => 'white-white',
) );
?>

<div class="services-wrap">
    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            $the_slug = get_post_field( 'post_name', get_post() );

            if ( 'courses-software' === $the_slug ) {
                continue;
            }

            $bg_color = 'background-white';
            if ( 'theme-development' === $the_slug ) {
                $bg_color = 'background-gray';
            }

            $the_title = get_the_title( get_the_ID() );
            $wp_services = array( 'plugin-integration', 'theme-development', 'custom-development' );
            if ( in_array( $the_slug, $wp_services ) ) {
                $the_title = '<span class="wp-title-prefix">WordPress</span>' . $the_title;
            }
            ?>
            <section id="<?php echo $the_slug; ?>" class="<?php echo $the_slug; ?>-section service-section element-spacing large <?php echo $bg_color; ?>">
                <div class="service-content-grid">
                    <div class="service-description">
                        <h2 class="section-title h3"><?php echo $the_title; ?></h2>
                        <?php
                        // Service content description
                        $content = get_the_content( get_the_ID() );
                        if ( ! empty( $content ) ) {
                            echo $content;
                        } else {
                            echo '<p>' . get_field( 'service_description', get_the_ID() ) . '</p>';
                        }

                        // CTA defaults
                        $button_text = 'Let\'s Work Together';
                        $button_url = home_url( '/contact/?type=work-together' );
                        $button_classes = array( 'button', 'purple' );
                        $alt_link_text = '';
                        $alt_link_url = '';
                        $alt_link_classes = array( 'secondary-cta' );

                        // Service type CTA overrides
                        if ( 'plugin-integration' === $the_slug ) {
	                        $alt_link_text = 'Ask about your favorites.';
	                        $alt_link_url = home_url( '/contact/?type=experience' );
                        } else if ( 'theme-development' === $the_slug ) {
	                        $button_text = 'Start the Conversation';
                        } else if ( 'custom-development' === $the_slug ) {
	                        $button_text = 'Let\'s Talk Details';
                        }

                        // The shared CTA
                        crispydiv_button( array(
                            'text' => $button_text,
                            'url' => $button_url,
                            'classes' => $button_classes,
                            'alt_link_text' => $alt_link_text,
                            'alt_link_url' => $alt_link_url,
                            'alt_link_classes' => $alt_link_classes,
                        ) );
                        ?>
                    </div>
                    <div class="service-aside">
                        <?php
                        /**
                         * Content by section
                         */
                        if ( 'plugin-integration' === $the_slug ) {
                            ?>
                            <h3 class="subdued-title">Some our favorite plugins and services...</h3>
                            <?php
                            $customization_logos = get_customization_logos();
                            if ( ! empty( $customization_logos ) ) {
                                ?>
                                <div class="customizations-service-grid">
                                    <?php foreach ( $customization_logos as $logo ) { ?>
                                        <div class="customization-brand">
                                            <div class="customization-brand-inner">
	                                            <?php $logo_name = $logo['alias'] ?? $logo['name']; ?>
                                                <a class="brand-logo-link" href="<?php echo $logo['url']; ?>" target="_blank"><img class="logo <?php echo str_replace( " ", "-", strtolower( $logo_name ) ); ?>-logo" src="<?php echo THEME_IMAGES . 'logos/' . $logo['image']; ?>" alt="<?php echo $logo['name'] . ' - ' . $logo['description']; ?>" aria-describedby="<?php echo $logo['description']; ?>"></a>
                                                <div class="brand-description" id="<?php echo $logo['description']; ?>"><?php echo $logo['description']; ?></div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <?php
                            }
                        } else if ( 'theme-development' === $the_slug ) {
                            get_template_part( 'template-parts/mock-browser' );
                        } else if ( 'custom-development' === $the_slug ) {
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
                                                    <span class="custom-development-example-accordion-item-icon"><i class="fa-solid fa-plus"></i></span>
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
            <?php
        }
    }
    ?>
</div>

<?php
get_footer();