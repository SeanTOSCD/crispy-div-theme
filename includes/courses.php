<?php

/**
 * Courses grid output
 *
 * @return false|string
 */
function get_crispydiv_courses_grid() {

	$courses = new WP_Query( array(
		'post_type' => 'course',
		'post_status' => 'publish',
		'posts_per_page' => -1,
	) );

	ob_start();

	if ( $courses->have_posts() ) :
		?>
		<div class="courses-grid general-grid large background-white">
			<?php while ( $courses->have_posts() ) : $courses->the_post(); ?>
				<div class="grid-item">
					<div class="grid-item-content">
						<h3 class="archive-item-title grid-item-title"><a class="course-title-anchor" href="<?php echo get_the_permalink( get_the_ID() ) ?>"><?php echo get_the_title( get_the_ID() ); ?></a></h3>
						<div class="grid-item-description">
							<p><?php echo get_the_excerpt( get_the_ID() ); ?></p>
						</div>
						<div class="cta">
							<?php
							crispydiv_button( array(
								'text' => 'Get Started',
								'url' => get_the_permalink( get_the_ID() ),
								'classes' => array( 'button', 'purple' ),
							) );
							?>
						</div>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	<?php
	endif;
	return ob_get_clean();
}