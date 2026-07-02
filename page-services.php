<?php
/**
 * Template Name: Services & Pricing
 *
 * @package AP_Luxury
 */
get_header();
$groups   = ap_luxury_services_data();
$ap_phone = ap_luxury_get_option( 'ap_luxury_phone', '+1 469 769 1055' );
$tel_link = preg_replace( '/[^0-9+]/', '', $ap_phone );
?>
<section class="ap-section page-hero small-hero">
	<div class="ap-container content-narrow centered">
		<p class="eyebrow">Services & Pricing</p>
		<h1>Refined beauty services, clearly priced.</h1>
		<p>Choose your service and call with confidence. Pricing may vary based on final service selection.</p>
	</div>
</section>
<?php get_template_part( 'template-parts/service-highlights' ); ?>
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
							<a href="tel:<?php echo esc_attr( $tel_link ); ?>">Call Now</a>
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
