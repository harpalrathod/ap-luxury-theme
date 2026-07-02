<?php
/**
 * Template Name: Testimonials & Reviews
 *
 * @package AP_Luxury
 */
get_header();
$reviews = array(
	array( 'Beautiful work every time.', 'My eyebrows always look clean and natural. The salon feels calm and professional.' ),
	array( 'Precise, quick, and gentle.', 'I appreciate the attention to detail and the clean service experience.' ),
	array( 'My favorite threading salon.', 'The stylists listen carefully and shape my brows exactly how I like them.' ),
);
?>
<section class="ap-section page-hero small-hero">
	<div class="ap-container content-narrow centered">
		<p class="eyebrow">Reviews</p>
		<h1>Client trust is our best beauty mark.</h1>
		<p>Use this page for selected testimonials and a live reviews plugin area.</p>
	</div>
</section>
<section class="ap-section">
	<div class="ap-container review-grid">
		<?php foreach ( $reviews as $review ) : ?>
			<article class="review-card reveal-up"><h2><?php echo esc_html( $review[0] ); ?></h2><p><?php echo esc_html( $review[1] ); ?></p></article>
		<?php endforeach; ?>
	</div>
</section>
<?php get_template_part( 'template-parts/reviews-widget' ); ?>
<?php get_template_part( 'template-parts/cta-booking' ); ?>
<?php get_footer();
