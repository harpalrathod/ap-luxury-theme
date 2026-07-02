<?php
/**
 * Search results template.
 *
 * @package AP_Luxury
 */
get_header();
?>
<section class="ap-section page-hero small-hero">
	<div class="ap-container content-narrow centered">
		<p class="eyebrow">Search</p>
		<h1>Search Results</h1>
	</div>
</section>
<section class="ap-section">
	<div class="ap-container content-narrow">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class( 'post-card' ); ?>>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
				</article>
			<?php endwhile; ?>
			<?php the_posts_pagination(); ?>
		<?php else : ?>
			<h2>No results found.</h2>
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div>
</section>
<?php get_footer();
