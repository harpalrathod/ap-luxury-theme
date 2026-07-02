<?php
/**
 * 404 template.
 *
 * @package AP_Luxury
 */
get_header();
?>
<section class="ap-section page-hero small-hero">
	<div class="ap-container content-narrow centered">
		<p class="eyebrow">404</p>
		<h1>That page has moved.</h1>
		<p>Let us guide you back to polished brows and beauty care.</p>
		<a class="btn btn-gold" href="<?php echo esc_url( home_url( '/' ) ); ?>">Return Home</a>
	</div>
</section>
<?php get_footer();
