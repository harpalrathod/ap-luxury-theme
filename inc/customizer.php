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

	$fields = array(
		'ap_luxury_phone'       => array( 'Phone Number', '+1 000 000 0000' ),
		'ap_luxury_address'     => array( 'Address', 'Rockwall, TX' ),
		'ap_luxury_hours'       => array( 'Business Hours', 'Monday - Saturday: 10 AM - 7 PM' ),
		'ap_luxury_booking'     => array( 'Booking URL', home_url( '/booking/' ) ),
		'ap_luxury_instagram'   => array( 'Instagram URL', '#' ),
		'ap_luxury_map_embed'   => array( 'Google Map Embed Text', 'Google Map Embed' ),
	);

	foreach ( $fields as $key => $data ) {
		$wp_customize->add_setting( $key, array(
			'default'           => $data[1],
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( $key, array(
			'label'   => __( $data[0], 'ap-luxury' ),
			'section' => 'ap_luxury_business',
			'type'    => 'text',
		) );
	}
}
add_action( 'customize_register', 'ap_luxury_customize_register' );

function ap_luxury_get_option( $key, $fallback = '' ) {
	$value = get_theme_mod( $key, $fallback );
	return $value ? $value : $fallback;
}
