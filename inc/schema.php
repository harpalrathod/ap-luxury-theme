<?php
/**
 * Local business schema for AP Luxury.
 *
 * @package AP_Luxury
 */

function ap_luxury_schema() {
	$schema = array(
		'@context' => 'https://schema.org',
		'@type'    => 'BeautySalon',
		'name'     => get_bloginfo( 'name' ),
		'address'  => ap_luxury_get_option( 'ap_luxury_address', 'Rockwall, TX' ),
		'telephone'=> ap_luxury_get_option( 'ap_luxury_phone', '+1 000 000 0000' ),
		'url'      => home_url( '/' ),
		'priceRange' => '$$',
		'areaServed' => 'Rockwall, TX',
		'sameAs' => array( ap_luxury_get_option( 'ap_luxury_instagram', '#' ) ),
		'makesOffer' => array(
			array( '@type' => 'Offer', 'itemOffered' => array( '@type' => 'Service', 'name' => 'Eyebrow Threading' ) ),
			array( '@type' => 'Offer', 'itemOffered' => array( '@type' => 'Service', 'name' => 'Facial Threading' ) ),
			array( '@type' => 'Offer', 'itemOffered' => array( '@type' => 'Service', 'name' => 'Waxing' ) ),
		),
	);
	echo '<script type="application/ld+json">' . wp_json_encode( $schema ) . '</script>';
}
add_action( 'wp_head', 'ap_luxury_schema' );
