<?php
/**
 * Template Name: Services & Pricing
 *
 * @package AP_Luxury
 */
get_header();
$groups = array(
	'Eyebrow Threading' => array(
		array( 'Eyebrow Threading', 'Signature brow shaping with clean definition.', '$12+' ),
		array( 'Eyebrow Cleanup', 'Maintenance for already-shaped brows.', '$10+' ),
		array( 'Eyebrow + Upper Lip', 'A polished everyday pairing.', '$18+' ),
	),
	'Facial Threading' => array(
		array( 'Upper Lip', 'Gentle, precise hair removal.', '$7+' ),
		array( 'Chin', 'Clean finish for the lower face.', '$8+' ),
		array( 'Full Face Threading', 'Smooth, refined facial finish.', '$35+' ),
	),
	'Waxing' => array(
		array( 'Underarms', 'Quick, hygienic waxing service.', '$15+' ),
		array( 'Arms', 'Smooth finish for arms.', '$30+' ),
		array( 'Legs', 'Comfortable waxing with clean results.', '$45+' ),
	),
	'Tinting & Add-ons' => array(
		array( 'Eyebrow Tinting', 'Soft color enhancement for fuller-looking brows.', '$20+' ),
		array( 'Facial Add-on', 'Refresh your service with extra glow care.', '$15+' ),
	),
);
?>
<section class="ap-section page-hero small-hero">
	<div class="ap-container content-narrow centered">
		<p class="eyebrow">Services & Pricing</p>
		<h1>Refined beauty services, clearly priced.</h1>
		<p>Choose your service and book with confidence. Pricing may vary based on final service selection.</p>
	</div>
</section>
<section class="ap-section pricing-section">
	<div class="ap-container">
		<?php foreach ( $groups as $group => $items ) : ?>
			<div class="pricing-group reveal-up">
				<h2><?php echo esc_html( $group ); ?></h2>
				<div class="pricing-list">
					<?php foreach ( $items as $item ) : ?>
						<div class="pricing-row">
							<div><h3><?php echo esc_html( $item[0] ); ?></h3><p><?php echo esc_html( $item[1] ); ?></p></div>
							<strong><?php echo esc_html( $item[2] ); ?></strong>
							<a href="<?php echo esc_url( ap_luxury_booking_url() ); ?>">Book</a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</section>
<?php get_template_part( 'template-parts/newsletter' ); ?>
<?php get_template_part( 'template-parts/cta-booking' ); ?>
<?php get_footer();
