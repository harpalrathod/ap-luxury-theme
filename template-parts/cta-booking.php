<?php
/**
 * Reusable booking CTA.
 *
 * @package AP_Luxury
 */
$ap_phone = ap_luxury_get_option( 'ap_luxury_phone', '+1 469 769 1055' );
$tel_link = preg_replace( '/[^0-9+]/', '', $ap_phone );
?>
<section class="ap-section cta-booking">
	<div class="ap-container cta-panel centered">
		<p class="eyebrow">Ready for your AP look?</p>
		<h2>Call AP's Thread Salon today.</h2>
		<p>Call us for service questions and appointment help.</p>
		<a class="btn btn-gold" href="tel:<?php echo esc_attr( $tel_link ); ?>">Call <?php echo esc_html( $ap_phone ); ?></a>
	</div>
</section>
