<?php
/**
 * Main template file.
 *
 * @package AP_Luxury
 */

get_header();
?>
<section class="ap-section page-section">
	<div class="ap-container content-narrow">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class( 'post-card' ); ?>>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<div class="entry-summary"><?php the_excerpt(); ?></div>
				</article>
			<?php endwhile; ?>
			<?php the_posts_pagination(); ?>
		<?php else : ?>
			<h1><?php esc_html_e( 'Nothing Found', 'ap-luxury' ); ?></h1>
			<p><?php esc_html_e( 'Please check back soon.', 'ap-luxury' ); ?></p>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();
