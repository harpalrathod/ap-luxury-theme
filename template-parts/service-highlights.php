<?php
/**
 * Service highlight panels.
 *
 * @package AP_Luxury
 */
$highlights = ap_luxury_service_highlights_data();
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
