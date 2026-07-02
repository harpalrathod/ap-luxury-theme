<?php
/**
 * Template Name: Promotions & Membership
 *
 * @package AP_Luxury
 */
get_header();
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
		<article class="promo-card reveal-up"><p class="eyebrow">New Clients</p><h2>First Visit Glow</h2><p>A refined welcome offer for first-time guests booking threading, waxing, or facial care.</p><a class="btn btn-gold" href="<?php echo esc_url( ap_luxury_booking_url() ); ?>">Claim Offer</a></article>
		<article class="promo-card reveal-up"><p class="eyebrow">Referral</p><h2>Share the AP Look</h2><p>Refer a friend and receive a thank-you reward after their first visit.</p><a class="btn btn-outline dark" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Ask Us</a></article>
		<article class="promo-card reveal-up"><p class="eyebrow">Gift Cards</p><h2>Give Beautiful Brows</h2><p>Promote seasonal gift card offers for birthdays, holidays, and self-care surprises.</p><a class="btn btn-outline dark" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Gift Details</a></article>
		<article class="promo-card reveal-up"><p class="eyebrow">Membership</p><h2>Monthly Brow Care</h2><p>Build a regular beauty routine with priority maintenance and special savings.</p><a class="btn btn-outline dark" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Learn More</a></article>
	</div>
</section>
<?php get_template_part( 'template-parts/newsletter' ); ?>
<?php get_template_part( 'template-parts/cta-booking' ); ?>
<?php get_footer();
