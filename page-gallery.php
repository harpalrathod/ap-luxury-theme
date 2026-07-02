<?php
/**
 * Template Name: Gallery
 *
 * @package AP_Luxury
 */
get_header();
?>
<section class="ap-section page-hero small-hero">
	<div class="ap-container content-narrow centered">
		<p class="eyebrow">Gallery</p>
		<h1>Clean lines, soft finishes, beautiful brows.</h1>
		<p>A visual preview of the AP Luxury look. Replace placeholders with your salon and before/after images.</p>
	</div>
</section>
<section class="ap-section">
	<div class="ap-container gallery-grid">
		<?php for ( $i = 1; $i <= 9; $i++ ) : ?>
			<a class="gallery-item reveal-up" href="<?php echo esc_url( home_url( '/booking/' ) ); ?>" aria-label="<?php esc_attr_e( 'Book an appointment', 'ap-luxury' ); ?>"></a>
		<?php endfor; ?>
	</div>
</section>
<?php get_footer();
