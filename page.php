<?php
/**
 * Page template.
 *
 * @package AP_Luxury
 */
get_header();
?>
<section class="ap-section page-section">
	<div class="ap-container content-narrow">
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?>>
				<header class="page-header">
					<p class="eyebrow">AP Salon</p>
					<h1><?php the_title(); ?></h1>
				</header>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="featured-image"><?php the_post_thumbnail( 'large' ); ?></div>
				<?php endif; ?>
				<div class="entry-content luxury-content"><?php the_content(); ?></div>
			</article>
		<?php endwhile; ?>
	</div>
</section>
<?php get_footer();
