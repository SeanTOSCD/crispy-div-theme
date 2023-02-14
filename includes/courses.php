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
			<?php
            while ( $courses->have_posts() ) :
                $courses->the_post();
	            get_template_part( 'template-parts/content', get_post_type(), array(
		            'is-courses' => true,
	            ) );
            endwhile;
            wp_reset_postdata();
            ?>
		</div>
	<?php
	endif;
	return ob_get_clean();
}