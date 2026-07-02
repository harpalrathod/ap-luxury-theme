<?php
/**
 * Template Name: Terms of Service
 *
 * @package AP_Luxury
 */
get_header();
$items = array(
	array( 'Appointments', 'Appointment times are subject to availability. Please arrive on time so the salon can serve every guest smoothly.' ),
	array( 'Cancellations', 'Please contact the salon as early as possible if you need to cancel or reschedule your visit.' ),
	array( 'Service Results', 'Beauty results can vary based on skin type, hair growth, personal preferences, and aftercare.' ),
	array( 'Health and Skin Concerns', 'Guests should tell the stylist about sensitive skin, retinol use, recent procedures, allergies, or concerns before service.' ),
	array( 'Prices and Promotions', 'Service prices, promotions, and membership offers may change. Confirm current details before booking.' ),
	array( 'Website Use', 'Website content is provided for general salon information and should not replace professional medical or legal advice.' ),
);
?>
<section class="ap-section page-hero small-hero">
	<div class="ap-container content-narrow centered">
		<p class="eyebrow">Terms</p>
		<h1>Terms of Service</h1>
		<p>A simple terms template for AP Salon. Review this with a qualified professional before publishing.</p>
	</div>
</section>
<section class="ap-section faq-section">
	<div class="ap-container content-narrow">
		<?php foreach ( $items as $item ) : ?>
			<article class="faq-card reveal-up">
				<h2><?php echo esc_html( $item[0] ); ?></h2>
				<p><?php echo esc_html( $item[1] ); ?></p>
			</article>
		<?php endforeach; ?>
	</div>
</section>
<?php get_footer();
