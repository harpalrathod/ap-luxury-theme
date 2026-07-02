<?php
/**
 * Archive template.
 *
 * @package AP_Luxury
 */
get_header();
?>
<section class="ap-section page-hero small-hero">
	<div class="ap-container content-narrow centered">
		<p class="eyebrow">Beauty Journal</p>
		<h1><?php post_type_archive_title(); ?></h1>
	</div>
</section>
<section class="ap-section">
	<div class="ap-container blog-grid">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class( 'post-card' ); ?>>
					<p class="eyebrow"><?php echo esc_html( get_the_date() ); ?></p>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
				</article>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<div class="ap-container"><?php the_posts_pagination(); ?></div>
</section>
<?php get_footer();
