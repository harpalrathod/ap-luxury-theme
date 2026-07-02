<?php
/**
 * Service highlight panels.
 *
 * @package AP_Luxury
 */
$highlights = array(
	array( 'Eyebrow Threading in Rockwall', 'Precision brow shaping for clean definition, natural balance, and a polished everyday look.' ),
	array( 'Facial Threading', 'Smooth facial hair removal for upper lip, chin, sides, and full face services with careful technique.' ),
	array( 'Waxing Services', 'Efficient waxing options for guests who want smooth skin and a refined salon experience.' ),
	array( 'Facial Care', 'Relaxing beauty treatments created to refresh the skin and support a soft, healthy-looking glow.' ),
);
?>
<section class="ap-section service-highlights-section">
	<div class="ap-container">
		<div class="section-heading centered">
			<p class="eyebrow">What We Do Best</p>
			<h2>Beauty services designed for confidence.</h2>
		</div>
		<div class="service-highlight-grid">
			<?php foreach ( $highlights as $highlight ) : ?>
				<article class="service-highlight-card reveal-up">
					<h3><?php echo esc_html( $highlight[0] ); ?></h3>
					<p><?php echo esc_html( $highlight[1] ); ?></p>
					<a href="<?php echo esc_url( ap_luxury_booking_url() ); ?>">Book Now</a>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
