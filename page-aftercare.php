<?php
/**
 * Template Name: Aftercare Guide
 *
 * @package AP_Luxury
 */
get_header();
$guides = array(
	array( 'Threading Aftercare', 'Keep the area clean, avoid touching freshly threaded skin, and skip heavy makeup for a few hours when possible.' ),
	array( 'Waxing Aftercare', 'Avoid heat, sweating, fragrance, and exfoliation for the first day after waxing to help skin stay calm.' ),
	array( 'Facial Aftercare', 'Use gentle products, avoid harsh exfoliation, and protect your skin from strong sun exposure after a facial.' ),
	array( 'Before Your Brow Visit', 'Arrive with clean skin when possible and tell your stylist about sensitivity, retinol use, or recent skin treatments.' ),
	array( 'When To Return', 'Most brow guests return every two to four weeks depending on hair growth and preferred shape.' ),
	array( 'Ask Your Stylist', 'For sensitive skin or special events, ask the salon team for timing and aftercare suggestions before booking.' ),
);
?>
<section class="ap-section page-hero small-hero">
	<div class="ap-container content-narrow centered">
		<p class="eyebrow">Aftercare</p>
		<h1>Keep your glow polished after every visit.</h1>
		<p>Simple care tips for threading, waxing, and facial services at AP's Thread Salon.</p>
	</div>
</section>
<section class="ap-section aftercare-section">
	<div class="ap-container aftercare-grid">
		<?php foreach ( $guides as $guide ) : ?>
			<article class="aftercare-card reveal-up">
				<span>AP</span>
				<h2><?php echo esc_html( $guide[0] ); ?></h2>
				<p><?php echo esc_html( $guide[1] ); ?></p>
			</article>
		<?php endforeach; ?>
	</div>
</section>
<section class="ap-section aftercare-note-section">
	<div class="ap-container content-narrow centered aftercare-note">
		<p class="eyebrow">Helpful Reminder</p>
		<h2>Beautiful results continue with gentle care.</h2>
		<p>For personalized guidance, ask your AP stylist during your appointment.</p>
		<a class="btn btn-gold" href="<?php echo esc_url( ap_luxury_booking_url() ); ?>">Book Your Visit</a>
	</div>
</section>
<?php get_template_part( 'template-parts/newsletter' ); ?>
<?php get_footer();
