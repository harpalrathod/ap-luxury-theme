<?php
/**
 * Customizer settings for AP Luxury.
 *
 * @package AP_Luxury
 */

function ap_luxury_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'ap_luxury_business', array(
		'title'       => __( 'AP Luxury Business Info', 'ap-luxury' ),
		'priority'    => 30,
		'description' => __( 'Update salon contact details, booking link, and local SEO information.', 'ap-luxury' ),
	) );

	$wp_customize->add_section( 'ap_luxury_homepage', array(
		'title'       => __( 'AP Luxury Homepage', 'ap-luxury' ),
		'priority'    => 31,
		'description' => __( 'Update hero copy, offer text, and homepage marketing lines.', 'ap-luxury' ),
	) );

	$business_fields = array(
		'ap_luxury_phone'       => array( 'Phone Number', '+1 469 769 1055' ),
		'ap_luxury_address'     => array( 'Address', '577 East Interstate 30, Rockwall, TX 75087' ),
		'ap_luxury_hours'       => array( 'Business Hours', 'Monday - Saturday: 9:30 AM - 7:00 PM | Sunday: 12:00 PM - 5:00 PM' ),
		'ap_luxury_booking'     => array( 'Booking URL', home_url( '/booking/' ) ),
		'ap_luxury_instagram'   => array( 'Instagram URL', '#' ),
		'ap_luxury_map_embed'   => array( 'Google Map Embed Text', 'Google Map Embed' ),
	);

	$homepage_fields = array(
		'ap_luxury_hero_kicker' => array( 'Hero Kicker', "Rockwall's Boutique Threading Studio" ),
		'ap_luxury_hero_title'  => array( 'Hero Title', 'Beautiful Brows. Timeless Confidence.' ),
		'ap_luxury_hero_text'   => array( 'Hero Text', 'Precision eyebrow threading, facial threading, waxing, and glow-focused beauty care in a calm luxury setting.' ),
		'ap_luxury_offer'       => array( 'First Visit Offer', 'Join the AP beauty list for first-visit offers and beauty updates.' ),
	);

	foreach ( $business_fields as $key => $data ) {
		$wp_customize->add_setting( $key, array( 'default' => $data[1], 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control( $key, array( 'label' => __( $data[0], 'ap-luxury' ), 'section' => 'ap_luxury_business', 'type' => 'text' ) );
	}

	foreach ( $homepage_fields as $key => $data ) {
		$wp_customize->add_setting( $key, array( 'default' => $data[1], 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control( $key, array( 'label' => __( $data[0], 'ap-luxury' ), 'section' => 'ap_luxury_homepage', 'type' => 'text' ) );
	}
}
add_action( 'customize_register', 'ap_luxury_customize_register' );

function ap_luxury_get_option( $key, $fallback = '' ) {
	$value = get_theme_mod( $key, $fallback );
	return $value ? $value : $fallback;
}
