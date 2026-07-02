<?php
/**
 * Template Name: Booking
 *
 * @package AP_Luxury
 */
get_header();
$ap_phone = ap_luxury_get_option( 'ap_luxury_phone', '+1 000 000 0000' );
$tel_link = preg_replace( '/[^0-9+]/', '', $ap_phone );
?>
<section class="ap-section page-hero small-hero">
	<div class="ap-container two-column align-center">
		<div>
			<p class="eyebrow">Book Appointment</p>
			<h1>Your next polished look starts here.</h1>
		</div>
		<p>Select your service, stylist, and preferred time. This page is ready for your live booking widget, shortcode, or appointment iframe.</p>
	</div>
</section>
<section class="ap-section booking-section">
	<div class="ap-container booking-layout">
		<div class="booking-widget">
			<h2>Reserve Your Visit</h2>
			<p>Paste the live booking iframe or shortcode in this page content area after connecting your booking provider.</p>
			<div class="booking-placeholder">[booking widget]</div>
			<a class="btn btn-gold" href="<?php echo esc_url( ap_luxury_booking_url() ); ?>">Open Booking Link</a>
		</div>
		<aside class="booking-sidebar">
			<h3>Before You Arrive</h3>
			<ul>
				<li>Arrive with clean skin when possible.</li>
				<li>Avoid exfoliating right before threading.</li>
				<li>Tell your stylist about sensitive skin or retinol use.</li>
				<li>For quick help, call <a href="tel:<?php echo esc_attr( $tel_link ); ?>"><?php echo esc_html( $ap_phone ); ?></a>.</li>
			</ul>
		</aside>
	</div>
</section>
<?php get_template_part( 'template-parts/newsletter' ); ?>
<?php get_footer();
