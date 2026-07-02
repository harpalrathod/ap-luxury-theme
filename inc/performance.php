<?php
/**
 * Performance helpers for AP Luxury.
 *
 * @package AP_Luxury
 */

function ap_luxury_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.googleapis.com',
			'crossorigin' => 'anonymous',
		);
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin' => 'anonymous',
		);
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'ap_luxury_resource_hints', 10, 2 );

function ap_luxury_image_attributes( $attr ) {
	$attr['loading'] = 'lazy';
	$attr['decoding'] = 'async';
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'ap_luxury_image_attributes' );

function ap_luxury_cleanup_head() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'ap_luxury_cleanup_head' );
