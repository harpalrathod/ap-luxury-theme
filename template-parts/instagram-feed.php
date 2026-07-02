<?php
/**
 * Instagram feed placeholder.
 *
 * @package AP_Luxury
 */
$ap_instagram = ap_luxury_get_option( 'ap_luxury_instagram', '#' );
?>
<section class="ap-section instagram-section">
	<div class="ap-container">
		<div class="section-heading centered">
			<p class="eyebrow">Follow The Glow</p>
			<h2>See the latest AP looks on Instagram.</h2>
			<p>Connect an Instagram feed plugin here, or replace these placeholders with recent salon posts.</p>
		</div>
		<div class="instagram-grid" aria-label="Instagram preview placeholders">
			<div></div><div></div><div></div><div></div>
		</div>
		<div class="centered instagram-action">
			<a class="btn btn-outline dark" href="<?php echo esc_url( $ap_instagram ); ?>">Follow AP's Thread Salon</a>
		</div>
	</div>
</section>
