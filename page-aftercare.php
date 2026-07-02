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
		<p>Simple care tips for threading, waxing, and facial services at AP Salon.</p>
	</div>
</section>
<section class="ap-section faq-section">
	<div class="ap-container content-narrow">
		<?php foreach ( $guides as $guide ) : ?>
			<article class="faq-card reveal-up">
				<h2><?php echo esc_html( $guide[0] ); ?></h2>
				<p><?php echo esc_html( $guide[1] ); ?></p>
			</article>
		<?php endforeach; ?>
	</div>
</section>
<?php get_template_part( 'template-parts/cta-booking' ); ?>
<?php get_footer();
