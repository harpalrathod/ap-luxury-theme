<?php
/**
 * Template Name: Service Area
 *
 * @package AP_Luxury
 */
get_header();
$areas = array( 'Rockwall', 'Heath', 'Fate', 'Rowlett', 'Royse City', 'Wylie' );
$services = array( 'Eyebrow Threading', 'Facial Threading', 'Waxing', 'Facials' );
?>
<section class="ap-section page-hero small-hero">
	<div class="ap-container content-narrow centered">
		<p class="eyebrow">Service Area</p>
		<h1>Luxury beauty care near Rockwall.</h1>
		<p>AP Salon welcomes guests from Rockwall and nearby communities for polished brows, smooth skin, and confident beauty care.</p>
	</div>
</section>
<section class="ap-section">
	<div class="ap-container two-column align-center">
		<div>
			<p class="eyebrow">Nearby Cities</p>
			<h2>Serving beauty clients across the area.</h2>
			<p>This page supports local search for brow shaping, facial hair removal, waxing services, and salon appointments.</p>
		</div>
		<div class="area-list">
			<?php foreach ( $areas as $area ) : ?>
				<span><?php echo esc_html( $area ); ?></span>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<section class="ap-section">
	<div class="ap-container service-area-grid">
		<?php foreach ( $services as $service ) : ?>
			<article class="faq-card reveal-up">
				<h2><?php echo esc_html( $service ); ?></h2>
				<p>Book this service at AP Salon for a clean, comfortable, and polished salon experience.</p>
			</article>
		<?php endforeach; ?>
	</div>
</section>
<?php get_template_part( 'template-parts/cta-booking' ); ?>
<?php get_footer();
