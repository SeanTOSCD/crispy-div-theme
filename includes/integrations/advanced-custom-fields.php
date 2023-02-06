<?php

if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page( array(
		'page_title' => 'Crispy Div',
		'menu_title' => 'Crispy Div',
		'menu_slug'  => 'crispy-div',
		'capability' => 'edit_posts',
	) );
}

if ( function_exists( 'acf_add_options_sub_page' ) ) {

	acf_add_options_sub_page( array(
		'page_title'  => 'Archive Settings',
		'menu_title'  => 'Archive Settings',
		'parent_slug' => 'crispy-div',
	) );
}
