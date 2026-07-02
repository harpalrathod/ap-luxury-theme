<?php
/**
 * Template Name: Contact
 *
 * @package AP_Luxury
 */
get_header();
$ap_phone     = ap_luxury_get_option( 'ap_luxury_phone', '+1 000 000 0000' );
$ap_address   = ap_luxury_get_option( 'ap_luxury_address', 'Rockwall, TX' );
$ap_hours     = ap_luxury_get_option( 'ap_luxury_hours', 'Monday - Saturday: 10 AM - 7 PM' );
$ap_instagram = ap_luxury_get_option( 'ap_luxury_instagram', '#' );
$ap_map       = ap_luxury_get_option( 'ap_luxury_map_embed', 'Google Map Embed' );
$tel_link     = preg_replace( '/[^0-9+]/', '', $ap_phone );
?>
<section class="ap-section page-hero small-hero">
	<div class="ap-container content-narrow centered">
		<p class="eyebrow">Contact</p>
		<h1>Visit AP's Thread Salon in Rockwall.</h1>
		<p>Questions, bookings, and beauty care guidance are always welcome.</p>
	</div>
</section>
<section class="ap-section contact-section">
	<div class="ap-container contact-grid">
		<div class="contact-card">
			<h2>Salon Details</h2>
			<p><strong>Location</strong><br><?php echo esc_html( $ap_address ); ?></p>
			<p><strong>Phone</strong><br><a href="tel:<?php echo esc_attr( $tel_link ); ?>"><?php echo esc_html( $ap_phone ); ?></a></p>
			<p><strong>Instagram</strong><br><a href="<?php echo esc_url( $ap_instagram ); ?>">Follow AP's Thread Salon</a></p>
		</div>
		<div class="contact-card">
			<h2>Hours</h2>
			<p><?php echo esc_html( $ap_hours ); ?></p>
			<a class="btn btn-gold" href="<?php echo esc_url( ap_luxury_booking_url() ); ?>">Book Now</a>
		</div>
		<div class="map-card contact-map"><?php echo esc_html( $ap_map ); ?></div>
	</div>
</section>
<?php get_footer();
