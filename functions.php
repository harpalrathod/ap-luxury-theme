<?php
/**
 * AP Luxury theme functions.
 *
 * @package AP_Luxury
 */

if ( ! defined( 'AP_LUXURY_VERSION' ) ) {
	define( 'AP_LUXURY_VERSION', '1.0.0' );
}

require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/schema.php';
require_once get_template_directory() . '/inc/starter-content.php';
require_once get_template_directory() . '/inc/performance.php';
require_once get_template_directory() . '/inc/shortcodes.php';
require_once get_template_directory() . '/inc/body-classes.php';

function ap_luxury_setup() {
	load_theme_textdomain( 'ap-luxury', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo', array( 'height' => 120, 'width' => 360, 'flex-height' => true, 'flex-width' => true ) );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/editor.css' );
	add_theme_support( 'starter-content', ap_luxury_starter_content() );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	register_nav_menus( array( 'primary' => esc_html__( 'Primary Menu', 'ap-luxury' ), 'footer' => esc_html__( 'Footer Menu', 'ap-luxury' ) ) );
}
add_action( 'after_setup_theme', 'ap_luxury_setup' );

function ap_luxury_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ap_luxury_content_width', 1280 );
}
add_action( 'after_setup_theme', 'ap_luxury_content_width', 0 );

function ap_luxury_scripts() {
	wp_enqueue_style( 'ap-luxury-style', get_template_directory_uri() . '/assets/css/theme.css', array(), AP_LUXURY_VERSION );
	wp_enqueue_style( 'ap-luxury-pages', get_template_directory_uri() . '/assets/css/pages.css', array( 'ap-luxury-style' ), AP_LUXURY_VERSION );
	wp_enqueue_style( 'ap-luxury-accessibility', get_template_directory_uri() . '/assets/css/accessibility.css', array( 'ap-luxury-style' ), AP_LUXURY_VERSION );
	wp_enqueue_style( 'ap-luxury-print', get_template_directory_uri() . '/assets/css/print.css', array( 'ap-luxury-style' ), AP_LUXURY_VERSION, 'print' );
	wp_enqueue_style( 'ap-luxury-woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css', array( 'ap-luxury-style' ), AP_LUXURY_VERSION );
	wp_enqueue_script( 'ap-luxury-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), AP_LUXURY_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'ap_luxury_scripts' );

function ap_luxury_excerpt_length( $length ) { return 24; }
add_filter( 'excerpt_length', 'ap_luxury_excerpt_length' );

function ap_luxury_excerpt_more( $more ) { return '...'; }
add_filter( 'excerpt_more', 'ap_luxury_excerpt_more' );

function ap_luxury_booking_url() {
	return apply_filters( 'ap_luxury_booking_url', ap_luxury_get_option( 'ap_luxury_booking', home_url( '/booking/' ) ) );
}

function ap_luxury_fallback_menu() {
	wp_page_menu( array( 'menu_id' => 'primary-menu', 'show_home' => true ) );
}
