<?php
/**
 * Courses archive page
 */

get_header();
crispydiv_page_header( array(
	'bg-color' => 'background-purple',
    'corner-accent-color' => 'white-orange',
	'title' => get_field( get_queried_object()->name . 's_title', 'options' ) ?: get_queried_object()->name . 's',
	'description' => get_field( get_queried_object()->name . 's_description', 'options' ),
) );

echo get_crispydiv_courses_grid();

get_footer();