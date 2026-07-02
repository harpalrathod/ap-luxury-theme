<?php
/**
 * Template Name: Loyalty Program
 *
 * @package AP_Luxury
 */
get_header();
$ap_phone = ap_luxury_get_option( 'ap_luxury_phone', '+1 469 769 1055' );
$tel_link = preg_replace( '/[^0-9+]/', '', $ap_phone );
?>
<section class="ap-section page-hero small-hero">
	<div class="ap-container content-narrow centered">
		<p class="eyebrow">Loyalty Program</p>
		<h1>Earn rewards with AP's Thread Salon.</h1>
		<p>AP's Thread Salon uses Fivestars, now part of SumUp, for customer loyalty rewards.</p>
	</div>
</section>
<section class="ap-section">
	<div class="ap-container promo-grid">
		<article class="promo-card reveal-up">
			<p class="eyebrow">Join In Store</p>
			<h2>Sign up during your visit.</h2>
			<p>Ask our team about joining the AP's Thread Salon loyalty program when you check out.</p>
			<a class="btn btn-gold" href="tel:<?php echo esc_attr( $tel_link ); ?>">Call Now</a>
		</article>
		<article class="promo-card reveal-up">
			<p class="eyebrow">Earn Rewards</p>
			<h2>Get rewarded for coming back.</h2>
			<p>Earn loyalty benefits on eligible salon visits and stay updated on special offers.</p>
			<a class="btn btn-outline dark" href="<?php echo esc_url( home_url( '/services/' ) ); ?>">View Services</a>
		</article>
		<article class="promo-card reveal-up">
			<p class="eyebrow">Fivestars by SumUp</p>
			<h2>Easy customer rewards.</h2>
			<p>Use your loyalty profile at checkout so visits and eligible rewards can be tracked.</p>
			<a class="btn btn-gold" href="tel:<?php echo esc_attr( $tel_link ); ?>">Ask About Rewards</a>
		</article>
	</div>
</section>
<?php get_template_part( 'template-parts/cta-booking' ); ?>
<?php get_footer();
