<?php
/**
 * Body classes for AP Luxury.
 *
 * @package AP_Luxury
 */

function ap_luxury_body_classes( $classes ) {
	if ( ! is_front_page() ) {
		$classes[] = 'body-not-home';
	}
	return $classes;
}
add_filter( 'body_class', 'ap_luxury_body_classes' );
