<?php

add_action( 'init', function() {

	// Service
	register_post_type( 'service',
		array(
			'labels' => array(
				'name' => 'Service',
				'singular_name' => 'Service',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New Service',
				'edit' => 'Edit',
				'edit_item' => 'Edit Service',
				'new_item' => 'New Service',
				'view' => 'View',
				'view_item' => 'View Service',
				'search_items' => 'Search Services',
				'not_found' => 'No Services found',
				'not_found_in_trash' => 'No Services found in Trash',
				'parent' => 'Parent Service',
				'menu_name' => 'Services'
			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_rest' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'services' ),
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_icon' => 'dashicons-money-alt',
			'menu_position' => null,
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
			// 'taxonomies' => array( 'wordpress_plugin', 'wordpress_theme', 'custom_development' ),
		)
	);

	// Course
	register_post_type( 'course', array(
		'labels' => array(
			'name' => 'Course',
			'singular_name' => 'Course',
			'add_new' => 'Add New',
			'add_new_item' => 'Add New Course',
			'edit_item' => 'Edit Course',
			'new_item' => 'New Course',
			'view_item' => 'View Course',
			'search_items' => 'Search Courses',
			'not_found' => 'No courses found',
			'not_found_in_trash' => 'No courses found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Courses'
		),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_rest' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'courses' ),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_icon' => 'dashicons-feedback',
		'menu_position' => null,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	) );
} );
