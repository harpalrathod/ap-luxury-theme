<?php
/**
 * Template Name: Theme Setup Guide
 *
 * @package AP_Luxury
 */
get_header();
$items = array(
	array( 'Customize Business Info', 'Update phone, address, hours, booking link, Instagram, and map details under Appearance and Customize.' ),
	array( 'Create Main Pages', 'Create Home, About, Services, Gallery, Booking, Promotions, Testimonials, FAQ, and Contact pages.' ),
	array( 'Assign Templates', 'Choose the matching AP Luxury template from the page settings panel for each important page.' ),
	array( 'Connect Booking', 'Paste your booking provider shortcode or iframe on the Booking page.' ),
	array( 'Connect Reviews', 'Paste your reviews plugin shortcode on the Testimonials page widget area.' ),
	array( 'Replace Placeholders', 'Upload real salon photos, final service prices, the official logo, and real social links.' ),
);
?>
<section class="ap-section page-hero small-hero">
	<div class="ap-container content-narrow centered">
		<p class="eyebrow">Theme Setup</p>
		<h1>Launch AP Luxury with confidence.</h1>
		<p>A simple setup guide for finishing the AP's Thread Salon website inside WordPress.</p>
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
