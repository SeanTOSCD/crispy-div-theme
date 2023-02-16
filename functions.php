<?php
/**
 * Crispy Div functions and definitions
 */

const THEME_VERSION = '1.0.12';

define( 'THEME_URI', get_home_url() );
define( 'THEME_NAME', get_bloginfo( 'name' ) );
define( 'THEME_TEMPLATE_DIR', get_template_directory() );
define( 'THEME_TEMPLATE_DIR_URI', get_template_directory_uri() );
define( 'THEME_STYLESHEET', get_stylesheet_uri() );
define( 'THEME_STYLESHEET_DIR', get_stylesheet_directory_uri() );
const THEME_ASSETS = THEME_STYLESHEET_DIR . '/assets/';
const THEME_IMAGES = THEME_ASSETS . 'images/';
const THEME_INCLUDES = THEME_TEMPLATE_DIR . '/includes';

/**
 * Sets up WordPress features
 */
add_action( 'after_setup_theme', function() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// wp_nav_menu() used in one location.
	register_nav_menus(
		array(
			'primary-menu' => 'Primary',
		)
	);

	// HTML5 support
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for core custom logo.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
} );

// Set the content width in pixels
add_action( 'after_setup_theme', function() {
	$GLOBALS['content_width'] = apply_filters( 'crispydiv_content_width', 640 );
}, 0 );

// Register sidebar area.
add_action( 'widgets_init', function() {
	register_sidebar(
		array(
			'name'          => 'Post Sidebar',
			'id'            => 'sidebar-post',
			'description'   => 'Add widgets here.',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title h5">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => 'Post Footer',
			'id'            => 'post-footer',
			'description'   => 'Add widgets here.',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title h5">',
			'after_title'   => '</h2>',
		)
	);
} );

// Enqueue scripts and styles.
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'crispydiv-style', get_stylesheet_uri(), array(), THEME_VERSION );
	wp_enqueue_script( 'crispydiv-navigation', get_template_directory_uri() . '/assets/js/scripts.js', array(), THEME_VERSION, true );
} );

// Theme functions
require THEME_INCLUDES . '/custom-post-types.php';
require THEME_INCLUDES . '/template-functions.php';
require THEME_INCLUDES . '/template-tags.php';
require THEME_INCLUDES . '/customizer.php';
require THEME_INCLUDES . '/services.php';
require THEME_INCLUDES . '/courses.php';

// Integrations
if ( class_exists( 'acf' ) ) {
	require THEME_INCLUDES . '/integrations/advanced-custom-fields.php';
}

if ( class_exists( 'GF_Form' ) ) {
	require THEME_INCLUDES . '/integrations/gravity-forms.php';
}

