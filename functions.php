<?php
/**
 * Colony Suppliers functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Colony_Suppliers
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function colony_suppliers_setup() {
	load_theme_textdomain( 'colony_suppliers', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'colony_suppliers' ),
		)
	);

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

	add_theme_support(
		'custom-background',
		apply_filters(
			'colony_suppliers_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'colony_suppliers_setup' );

/**
 * Set the content width in pixels.
 */
function colony_suppliers_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'colony_suppliers_content_width', 640 );
}
add_action( 'after_setup_theme', 'colony_suppliers_content_width', 0 );

/**
 * Register widget area.
 */
function colony_suppliers_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'colony_suppliers' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'colony_suppliers' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'colony_suppliers_widgets_init' );

/**
 * Enqueue default scripts and styles.
 */
function colony_suppliers_scripts() {
	wp_enqueue_style( 'colony_suppliers-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'colony_suppliers-style', 'rtl', 'replace' );

	wp_enqueue_script( 'colony_suppliers-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'colony_suppliers_scripts' );

/**
 * Include additional files.
 */
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Custom theme Tailwind + JS/CSS assets.
 */
function theme_stylescript() {
	$theme_uri = get_template_directory_uri();

	// Enqueue Tailwind-compiled stylesheet
	wp_enqueue_style( 'colony_css', $theme_uri . '/assets/css/theme.css', array(), '1.0.0' );

	// Deregister default WordPress jQuery
	wp_deregister_script( 'jquery' );

	// Register and enqueue custom jQuery
	wp_register_script( 'jquery', $theme_uri . '/assets/js/jquery.min.js', array(), null, true );
	wp_enqueue_script( 'jquery' );

	// Optional: Tailwind browser utilities (CDN-based)
	wp_enqueue_script( 'tailwind_browser', 'https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4', array(), null, true );

	// Theme custom JS
	wp_enqueue_script( 'theme_js', $theme_uri . '/assets/js/theme.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_stylescript' );
