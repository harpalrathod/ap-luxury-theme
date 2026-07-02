<?php
/**
 * Template Name: Booking
 *
 * @package AP_Luxury
 */
get_header();
?>
<section class="ap-section page-hero small-hero">
	<div class="ap-container two-column align-center">
		<div>
			<p class="eyebrow">Book Appointment</p>
			<h1>Your next polished look starts here.</h1>
		</div>
		<p>Select your service, stylist, and preferred time using your booking provider embed. This area is ready for Vagaro, Square Appointments, Fresha, Booksy, or another widget.</p>
	</div>
</section>
<section class="ap-section booking-section">
	<div class="ap-container booking-layout">
		<div class="booking-widget">
			<h2>Booking Widget</h2>
			<p>Paste your booking iframe or shortcode here in WordPress.</p>
			<div class="booking-placeholder">[booking widget]</div>
		</div>
		<aside class="booking-sidebar">
			<h3>Before You Arrive</h3>
			<ul>
				<li>Arrive with clean skin when possible.</li>
				<li>Avoid exfoliating right before threading.</li>
				<li>Tell your stylist about sensitive skin or retinol use.</li>
			</ul>
		</aside>
	</div>
</section>
<?php get_footer();
