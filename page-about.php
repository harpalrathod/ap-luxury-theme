<?php
/**
 * Template Name: About
 *
 * @package AP_Luxury
 */
get_header();
?>
<section class="ap-section page-hero small-hero">
	<div class="ap-container two-column align-center">
		<div>
			<p class="eyebrow">Our Story</p>
			<h1>Luxury is in the details.</h1>
		</div>
		<p>AP's Thread Salon brings precision threading, polished beauty care, and a calm boutique experience to Rockwall, Texas.</p>
	</div>
</section>
<section class="ap-section about-story">
	<div class="ap-container two-column">
		<div class="portrait-card"></div>
		<div>
			<p class="eyebrow">Philosophy</p>
			<h2>Every brow is shaped with intention.</h2>
			<p>We believe beauty should feel personal, clean, and confidence-building. Our team focuses on careful technique, client comfort, and results that complement your natural features.</p>
			<p>With three full-time stylists, AP's Thread Salon offers consistent service and attentive care for everyday maintenance, special occasions, and long-term beauty routines.</p>
		</div>
	</div>
</section>
<section class="ap-section team-section">
	<div class="ap-container">
		<div class="section-heading centered"><p class="eyebrow">Meet the Team</p><h2>Your brow artists</h2></div>
		<div class="team-grid">
			<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
				<article class="team-card reveal-up"><div class="team-photo"></div><h3>Stylist <?php echo esc_html( $i ); ?></h3><p>Threading, facial hair removal, waxing, and personalized beauty care.</p></article>
			<?php endfor; ?>
		</div>
	</div>
</section>
<?php get_footer();
