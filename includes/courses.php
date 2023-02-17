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

	if ( $courses->have_posts() ) :
		ob_start();
		?>
		<div class="courses-grid general-grid large background-white">
			<?php
            while ( $courses->have_posts() ) :
                $courses->the_post();
	            get_template_part( 'template-parts/content', 'grid-item', array(
		            'is-courses' => true,
	            ) );
            endwhile;
            wp_reset_postdata();
            ?>
		</div>
	    <?php
		return ob_get_clean();
    else :
        return false;
	endif;
}