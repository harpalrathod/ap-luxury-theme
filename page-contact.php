<?php
/**
 * Template Name: Contact
 *
 * @package AP_Luxury
 */
get_header();
$ap_phone   = ap_luxury_get_option( 'ap_luxury_phone', '+1 469 769 1055' );
$ap_address = ap_luxury_get_option( 'ap_luxury_address', '577 East Interstate 30, Rockwall, TX 75087' );
$ap_hours   = ap_luxury_get_option( 'ap_luxury_hours', 'Monday - Saturday: 9:30 AM - 7:00 PM | Sunday: 12:00 PM - 5:00 PM' );
$tel_link   = preg_replace( '/[^0-9+]/', '', $ap_phone );
$instagram  = 'https://www.instagram.com/apthreadsaon/';
$facebook   = 'https://www.facebook.com/search/pages/?q=ap%27s%20thread%20salon';
$map_link   = 'https://www.google.com/maps/dir/?api=1&destination=' . rawurlencode( $ap_address );
?>
<section class="ap-section page-hero small-hero">
	<div class="ap-container content-narrow centered">
		<p class="eyebrow">Contact</p>
		<h1>Visit AP's Thread Salon in Rockwall.</h1>
		<p>Questions, appointments, and beauty care guidance are always welcome.</p>
	</div>
</section>
<section class="ap-section contact-section">
	<div class="ap-container contact-grid">
		<div class="contact-card">
			<h2>Salon Details</h2>
			<p><strong>Location</strong><br><?php echo esc_html( $ap_address ); ?></p>
			<p><strong>Phone</strong><br><a href="tel:<?php echo esc_attr( $tel_link ); ?>"><?php echo esc_html( $ap_phone ); ?></a></p>
			<p><strong>Facebook</strong><br><a href="<?php echo esc_url( $facebook ); ?>" target="_blank" rel="noopener">AP's Thread Salon</a></p>
			<p><strong>Instagram</strong><br><a href="<?php echo esc_url( $instagram ); ?>" target="_blank" rel="noopener">@apthreadsaon</a></p>
		</div>
		<div class="contact-card">
			<h2>Hours</h2>
			<p><?php echo esc_html( $ap_hours ); ?></p>
			<a class="btn btn-gold" href="tel:<?php echo esc_attr( $tel_link ); ?>">Call Now</a>
		</div>
		<a class="map-card contact-map" href="<?php echo esc_url( $map_link ); ?>" target="_blank" rel="noopener">Open Google Map Directions</a>
	</div>
</section>
<?php get_template_part( 'template-parts/contact-form' ); ?>
<?php get_footer();
