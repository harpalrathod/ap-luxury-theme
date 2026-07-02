<?php
/**
 * Simple salon shortcodes.
 *
 * @package AP_Luxury
 */

function ap_luxury_booking_button_shortcode() {
	return '<a class="btn btn-gold" href="' . esc_url( ap_luxury_booking_url() ) . '">Book Appointment</a>';
}
add_shortcode( 'ap_booking_button', 'ap_luxury_booking_button_shortcode' );

function ap_luxury_phone_shortcode() {
	$phone = ap_luxury_get_option( 'ap_luxury_phone', '+1 000 000 0000' );
	$tel   = preg_replace( '/[^0-9+]/', '', $phone );
	return '<a href="tel:' . esc_attr( $tel ) . '">' . esc_html( $phone ) . '</a>';
}
add_shortcode( 'ap_phone', 'ap_luxury_phone_shortcode' );

function ap_luxury_address_shortcode() {
	return esc_html( ap_luxury_get_option( 'ap_luxury_address', 'Rockwall, TX' ) );
}
add_shortcode( 'ap_address', 'ap_luxury_address_shortcode' );

function ap_luxury_offer_shortcode() {
	return esc_html( ap_luxury_get_option( 'ap_luxury_offer', 'Join the AP beauty list for first-visit offers and beauty updates.' ) );
}
add_shortcode( 'ap_offer', 'ap_luxury_offer_shortcode' );
