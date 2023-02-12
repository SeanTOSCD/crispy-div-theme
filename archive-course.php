<?php
/**
 * Courses archive page
 */

get_header();
crispydiv_page_header( array(
	'bg-color' => 'background-purple',
    'corner-accent-color' => 'white-orange',
) );

echo get_crispydiv_courses_grid();

get_footer();