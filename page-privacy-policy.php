<?php
/**
 * Template Name: Privacy Policy
 *
 * @package AP_Luxury
 */
get_header();
$items = array(
	array( 'Information We Collect', 'We may collect your name, phone number, email address, appointment details, and messages you send through forms or booking tools.' ),
	array( 'How We Use Information', 'We use information to schedule appointments, answer questions, send salon updates, improve service, and manage customer care.' ),
	array( 'Booking and Form Tools', 'Third-party booking, form, email, review, analytics, or payment tools may process information according to their own policies.' ),
	array( 'Marketing Messages', 'Guests can unsubscribe from promotional emails or request removal from marketing lists at any time.' ),
	array( 'Data Protection', 'We use reasonable care to protect salon customer information and only keep details needed for business purposes.' ),
	array( 'Contact', 'Contact AP Salon directly with questions about privacy, customer information, or marketing preferences.' ),
);
?>
<section class="ap-section page-hero small-hero">
	<div class="ap-container content-narrow centered">
		<p class="eyebrow">Privacy</p>
		<h1>Privacy Policy</h1>
		<p>A simple privacy policy template for AP Salon. Review this with a qualified professional before publishing.</p>
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
