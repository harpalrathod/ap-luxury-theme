<?php
/**
 * The header for AP Luxury.
 *
 * @package AP_Luxury
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ap-luxury' ); ?></a>
<header class="site-header" data-site-header>
	<div class="ap-container header-inner">
		<a class="site-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php bloginfo( 'name' ); ?>">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<span class="brand-mark">AP</span>
				<span class="brand-text">AP's Thread Salon</span>
			<?php endif; ?>
		</a>

		<button class="menu-toggle" type="button" aria-controls="primary-menu" aria-expanded="false" data-menu-toggle>
			<span></span><span></span><span></span>
			<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'ap-luxury' ); ?></span>
		</button>

		<nav class="main-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'ap-luxury' ); ?>" data-main-nav>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_id'        => 'primary-menu',
				'container'      => false,
				'fallback_cb'    => 'ap_luxury_fallback_menu',
			) );
			?>
		</nav>

		<a class="header-cta" href="<?php echo esc_url( ap_luxury_booking_url() ); ?>"><?php esc_html_e( 'Book Now', 'ap-luxury' ); ?></a>
	</div>
</header>
<main id="primary" class="site-main">
