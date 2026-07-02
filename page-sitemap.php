<?php
/**
 * Template Name: Sitemap
 *
 * @package AP_Luxury
 */
get_header();
$links = array(
	array( 'Home', '/' ),
	array( 'About', '/about/' ),
	array( 'Services', '/services/' ),
	array( 'Gallery', '/gallery/' ),
	array( 'Booking', '/booking/' ),
	array( 'Promotions', '/promotions/' ),
	array( 'Testimonials', '/testimonials/' ),
	array( 'FAQ', '/faq/' ),
	array( 'Service Area', '/service-area/' ),
	array( 'Contact', '/contact/' ),
	array( 'Privacy Policy', '/privacy-policy/' ),
	array( 'Terms of Service', '/terms/' ),
);
?>
<section class="ap-section page-hero small-hero">
	<div class="ap-container content-narrow centered">
		<p class="eyebrow">Sitemap</p>
		<h1>Find every important AP Salon page.</h1>
		<p>A simple customer-friendly sitemap for navigation and search visibility.</p>
	</div>
</section>
<section class="ap-section">
	<div class="ap-container service-area-grid">
		<?php foreach ( $links as $link ) : ?>
			<article class="faq-card reveal-up">
				<h2><?php echo esc_html( $link[0] ); ?></h2>
				<p><a href="<?php echo esc_url( home_url( $link[1] ) ); ?>">Visit page</a></p>
			</article>
		<?php endforeach; ?>
	</div>
</section>
<?php get_footer();
