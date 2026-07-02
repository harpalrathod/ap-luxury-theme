<?php
/**
 * Template Name: Booking
 *
 * @package AP_Luxury
 */
get_header();
$ap_phone = ap_luxury_get_option( 'ap_luxury_phone', '+1 469 769 1055' );
$tel_link = preg_replace( '/[^0-9+]/', '', $ap_phone );
?>
<section class="ap-section page-hero small-hero">
	<div class="ap-container two-column align-center">
		<div>
			<p class="eyebrow">Call Now</p>
			<h1>Your next polished look starts with a call.</h1>
		</div>
		<p>For appointments, service questions, availability, and pricing help, please call AP's Thread Salon directly.</p>
	</div>
</section>
<section class="ap-section booking-section">
	<div class="ap-container booking-layout">
		<div class="booking-widget">
			<h2>Call For Appointment</h2>
			<p>Call now for threading, waxing, facials, hair services, massage, henna, and special service appointments.</p>
			<a class="btn btn-gold" href="tel:<?php echo esc_attr( $tel_link ); ?>">Call <?php echo esc_html( $ap_phone ); ?></a>
		</div>
		<aside class="booking-sidebar">
			<h3>Before You Arrive</h3>
			<ul>
				<li>Arrive with clean skin when possible.</li>
				<li>Ask about appointment-only services before visiting.</li>
				<li>Tell your stylist about sensitive skin or retinol use.</li>
				<li>For quick help, call <a href="tel:<?php echo esc_attr( $tel_link ); ?>"><?php echo esc_html( $ap_phone ); ?></a>.</li>
			</ul>
		</aside>
	</div>
</section>
<?php get_template_part( 'template-parts/newsletter' ); ?>
<?php get_footer();
