<?php
/**
 * Schema helpers for AP Luxury.
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

function ap_luxury_faq_schema() {
	if ( ! is_page_template( 'page-faq.php' ) ) {
		return;
	}
	$schema = array(
		'@context' => 'https://schema.org',
		'@type' => 'FAQPage',
		'mainEntity' => array(
			array( '@type' => 'Question', 'name' => 'Do I need an appointment?', 'acceptedAnswer' => array( '@type' => 'Answer', 'text' => 'Appointments are recommended for the smoothest experience, but walk-ins may be accepted when availability allows.' ) ),
			array( '@type' => 'Question', 'name' => 'Is eyebrow threading good for sensitive skin?', 'acceptedAnswer' => array( '@type' => 'Answer', 'text' => 'Threading is a precise hair removal method that does not require hot wax on the brow area, making it a popular option for many guests with sensitive skin.' ) ),
			array( '@type' => 'Question', 'name' => 'How often should I thread my eyebrows?', 'acceptedAnswer' => array( '@type' => 'Answer', 'text' => 'Most clients return every two to four weeks, depending on hair growth and the desired brow shape.' ) ),
		),
	);
	echo '<script type="application/ld+json">' . wp_json_encode( $schema ) . '</script>';
}
add_action( 'wp_head', 'ap_luxury_faq_schema' );
