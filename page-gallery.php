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
		<h1>Photo Gallery</h1>
		<p>Browse AP's Thread Salon photos and beauty inspiration.</p>
	</div>
</section>
<section class="ap-section gallery-page-section">
	<div class="ap-container luxury-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</div>
</section>
<?php get_footer();
