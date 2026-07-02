<?php
/**
 * Template Name: FAQ
 *
 * @package AP_Luxury
 */
get_header();
$faqs = ap_luxury_faqs_data();
?>
<section class="ap-section page-hero small-hero">
	<div class="ap-container content-narrow centered">
		<p class="eyebrow">Questions</p>
		<h1>Beauty care answers before you book.</h1>
		<p>Helpful answers about threading, waxing, appointments, and visiting AP's Thread Salon.</p>
	</div>
</section>
<section class="ap-section faq-section">
	<div class="ap-container content-narrow">
		<?php foreach ( $faqs as $faq ) : ?>
			<article class="faq-card reveal-up">
				<h2><?php echo esc_html( $faq[0] ); ?></h2>
				<p><?php echo esc_html( $faq[1] ); ?></p>
			</article>
		<?php endforeach; ?>
	</div>
</section>
<?php get_template_part( 'template-parts/cta-booking' ); ?>
<?php get_footer();
