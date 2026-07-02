<?php
/**
 * Template Name: Aftercare Guide
 *
 * @package AP_Luxury
 */
get_header();
$guides = ap_luxury_aftercare_data();
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
