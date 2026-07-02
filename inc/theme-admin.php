<?php
/**
 * Admin welcome page for AP Luxury.
 *
 * @package AP_Luxury
 */

function ap_luxury_admin_menu() {
	add_theme_page(
		'AP Luxury Setup',
		'AP Luxury Setup',
		'edit_theme_options',
		'ap-luxury-setup',
		'ap_luxury_admin_page'
	);
}
add_action( 'admin_menu', 'ap_luxury_admin_menu' );

function ap_luxury_admin_page() {
	?>
	<div class="wrap ap-luxury-admin">
		<h1>AP Luxury Theme Setup</h1>
		<p>Use this quick guide to finish setting up the AP's Thread Salon website.</p>
		<div class="card">
			<h2>1. Customize Business Info</h2>
			<p>Go to Appearance, then Customize, then AP Luxury Business Info. Add phone, address, hours, booking link, Instagram, and map details.</p>
		</div>
		<div class="card">
			<h2>2. Create Main Pages</h2>
			<p>Create Home, About, Services, Gallery, Booking, Promotions, Testimonials, FAQ, and Contact pages. Assign the matching templates where available.</p>
		</div>
		<div class="card">
			<h2>3. Connect Booking and Reviews</h2>
			<p>Add your booking widget on the Booking page and your reviews plugin shortcode on the Testimonials page.</p>
		</div>
		<div class="card">
			<h2>4. Replace Placeholders</h2>
			<p>Upload real salon photos, final service prices, the official logo, and real customer review links.</p>
		</div>
	</div>
	<?php
}
