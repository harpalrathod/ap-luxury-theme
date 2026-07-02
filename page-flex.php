<?php
/**
 * Template Name: Flexible Custom Page
 *
 * Use this template for any new page you add later.
 * Add or edit page content in WordPress Admin.
 *
 * @package AP_Luxury
 */
get_header();
?>
<?php while ( have_posts() ) : the_post(); ?>
	<section class="ap-section page-hero small-hero">
		<div class="ap-container content-narrow centered">
			<p class="eyebrow">AP's Thread Salon</p>
			<h1><?php the_title(); ?></h1>
			<p>Premium threading, waxing, facial care, and beauty services in Rockwall, Texas.</p>
		</div>
	</section>
	<section class="ap-section page-section">
		<div class="ap-container content-narrow luxury-content">
			<?php the_content(); ?>
		</div>
	</section>
<?php endwhile; ?>
<?php get_template_part( 'template-parts/cta-booking' ); ?>
<?php get_footer();
