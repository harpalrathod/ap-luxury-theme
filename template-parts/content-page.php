<?php
/**
 * Reusable page content template.
 *
 * @package AP_Luxury
 */
?>
<article <?php post_class( 'luxury-page-content' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="featured-image"><?php the_post_thumbnail( 'large' ); ?></div>
	<?php endif; ?>
	<div class="entry-content luxury-content">
		<?php the_content(); ?>
	</div>
</article>
