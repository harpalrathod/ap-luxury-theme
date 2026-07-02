<?php
/**
 * The footer for AP Luxury.
 *
 * @package AP_Luxury
 */
$ap_phone   = ap_luxury_get_option( 'ap_luxury_phone', '+1 000 000 0000' );
$ap_address = ap_luxury_get_option( 'ap_luxury_address', 'Rockwall, TX' );
$ap_hours   = ap_luxury_get_option( 'ap_luxury_hours', 'Monday - Saturday: 10 AM - 7 PM' );
$tel_link   = preg_replace( '/[^0-9+]/', '', $ap_phone );
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
			<p><?php echo esc_html( $ap_address ); ?><br><a href="tel:<?php echo esc_attr( $tel_link ); ?>"><?php echo esc_html( $ap_phone ); ?></a><br><?php echo esc_html( $ap_hours ); ?></p>
			<a class="footer-book" href="<?php echo esc_url( ap_luxury_booking_url() ); ?>"><?php esc_html_e( 'Book Appointment', 'ap-luxury' ); ?></a>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="ap-container">
			<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'ap-luxury' ); ?></p>
			<p class="footer-legal"><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a> <span>|</span> <a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">Terms of Service</a></p>
		</div>
	</div>
</footer>
<?php get_template_part( 'template-parts/popup-offer' ); ?>
<a class="floating-book" href="<?php echo esc_url( ap_luxury_booking_url() ); ?>"><?php esc_html_e( 'Book Now', 'ap-luxury' ); ?></a>
<?php wp_footer(); ?>
</body>
</html>
