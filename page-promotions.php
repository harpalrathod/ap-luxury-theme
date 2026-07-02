<?php
/**
 * Template Name: Promotions & Membership
 *
 * @package AP_Luxury
 */
get_header();
$promotions = ap_luxury_promotions_data();
?>
<section class="ap-section page-hero small-hero">
	<div class="ap-container content-narrow centered">
		<p class="eyebrow">Promotions</p>
		<h1>Beauty rituals worth repeating.</h1>
		<p>Use this page for first-visit offers, referral rewards, gift cards, loyalty packages, and seasonal specials.</p>
	</div>
</section>
<section class="ap-section">
	<div class="ap-container promo-grid">
		<?php foreach ( $promotions as $promo ) : ?>
			<article class="promo-card reveal-up"><p class="eyebrow"><?php echo esc_html( $promo[0] ); ?></p><h2><?php echo esc_html( $promo[1] ); ?></h2><p><?php echo esc_html( $promo[2] ); ?></p><a class="btn btn-gold" href="<?php echo esc_url( ap_luxury_booking_url() ); ?>"><?php echo esc_html( $promo[3] ); ?></a></article>
		<?php endforeach; ?>
	</div>
</section>
<?php get_template_part( 'template-parts/newsletter' ); ?>
<?php get_template_part( 'template-parts/cta-booking' ); ?>
<?php get_footer();
