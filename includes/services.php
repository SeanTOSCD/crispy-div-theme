<?php

/**
 * Services grid output
 *
 * @return false|string
 */
function get_crispydiv_services_grid( $full = false, $with_cta = false, $classes = array() ) {

	$services = new WP_Query( array(
		'post_type' => 'service',
		'post_status' => 'publish',
		'posts_per_page' => -1,
	) );

	ob_start();

	if ( $services->have_posts() ) :
		?>
		<div class="services-grid general-grid <?php echo implode( ' ', $classes ); ?>">
			<?php while ( $services->have_posts() ) : $services->the_post(); ?>
				<div class="grid-item">
					<div class="grid-item-content">
						<span class="grid-item-icon element-lead-icon colored"><?php echo get_field( 'font_awesome_icon', get_the_ID() ); ?></span>
                        <h3 class="archive-item-title grid-item-title"><a class="course-title-anchor" href="<?php echo get_the_permalink( get_the_ID() ) ?>"><?php echo get_the_title( get_the_ID() ); ?></a></h3>
                        <div class="grid-item-description">
                            <p><?php echo get_field( 'service_description', get_the_ID() ); ?></p>
	                        <?php if ( $full && have_rows( 'features_list' ) ) { ?>
                                <ul>
			                        <?php while ( have_rows( 'features_list' ) ) { the_row(); ?>
                                        <li><?php echo get_sub_field( 'feature_title' ); ?></li>
			                        <?php } ?>
                                </ul>
	                        <?php } ?>
                        </div>
						<?php if ( $with_cta ) {
							$the_slug = get_post_field( 'post_name', get_the_ID() );
							?>
                            <div class="cta">
                                <?php
                                crispydiv_button( array(
	                                'text' => get_field( 'service_cta_text' ),
	                                'url' => home_url( 'services' ) . '#' . $the_slug,
	                                'classes' => array( 'button', 'small', 'outline' ),
                                ) );
                                ?>
                            </div>
						<?php } ?>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	<?php
	endif;
	return ob_get_clean();
}