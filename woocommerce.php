<?php
/**
 * WooCommerce template wrapper.
 *
 * @package AP_Luxury
 */
get_header();
?>
<section class="ap-section page-section shop-section">
	<div class="ap-container">
		<header class="page-header content-narrow centered">
			<p class="eyebrow">AP Boutique</p>
			<h1><?php woocommerce_page_title(); ?></h1>
		</header>
		<div class="shop-shell">
			<?php woocommerce_content(); ?>
		</div>
	</div>
</section>
<?php get_footer();
