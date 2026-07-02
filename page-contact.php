<?php
/**
 * Template Name: Contact
 *
 * @package AP_Luxury
 */
get_header();
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
			<p><strong>Location</strong><br>Rockwall, TX</p>
			<p><strong>Phone</strong><br><a href="tel:+10000000000">Call to Book</a></p>
			<p><strong>Social</strong><br>Instagram · Facebook · TikTok</p>
		</div>
		<div class="contact-card">
			<h2>Hours</h2>
			<p>Monday – Saturday: 10:00 AM – 7:00 PM<br>Sunday: By appointment / update as needed</p>
			<a class="btn btn-gold" href="<?php echo esc_url( ap_luxury_booking_url() ); ?>">Book Now</a>
		</div>
		<div class="map-card contact-map">Google Map Embed</div>
	</div>
</section>
<?php get_footer();
