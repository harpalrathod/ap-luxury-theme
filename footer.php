<?php
/**
 * The footer for AP Luxury.
 *
 * @package AP_Luxury
 */
?>
</main>
<footer class="site-footer">
	<div class="ap-container footer-grid">
		<div class="footer-brand">
			<div class="brand-mark footer-mark">AP</div>
			<p><?php esc_html_e( "Premium eyebrow threading, waxing, facials, and beauty care in Rockwall, Texas.", 'ap-luxury' ); ?></p>
		</div>
		<div>
			<h2><?php esc_html_e( 'Explore', 'ap-luxury' ); ?></h2>
			<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'fallback_cb' => false ) ); ?>
		</div>
		<div>
			<h2><?php esc_html_e( 'Services', 'ap-luxury' ); ?></h2>
			<ul>
				<li><?php esc_html_e( 'Eyebrow Threading', 'ap-luxury' ); ?></li>
				<li><?php esc_html_e( 'Facial Threading', 'ap-luxury' ); ?></li>
				<li><?php esc_html_e( 'Waxing', 'ap-luxury' ); ?></li>
				<li><?php esc_html_e( 'Facials', 'ap-luxury' ); ?></li>
			</ul>
		</div>
		<div>
			<h2><?php esc_html_e( 'Visit', 'ap-luxury' ); ?></h2>
			<p>Rockwall, TX<br><a href="tel:+10000000000"><?php esc_html_e( 'Call to Book', 'ap-luxury' ); ?></a></p>
			<a class="footer-book" href="<?php echo esc_url( ap_luxury_booking_url() ); ?>"><?php esc_html_e( 'Book Appointment', 'ap-luxury' ); ?></a>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="ap-container">
			<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'ap-luxury' ); ?></p>
		</div>
	</div>
</footer>
<a class="floating-book" href="<?php echo esc_url( ap_luxury_booking_url() ); ?>"><?php esc_html_e( 'Book Now', 'ap-luxury' ); ?></a>
<?php wp_footer(); ?>
</body>
</html>
