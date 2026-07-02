<?php
/**
 * First visit offer popup.
 *
 * @package AP_Luxury
 */
?>
<div class="ap-offer-popup" data-offer-popup aria-hidden="true">
	<div class="ap-offer-backdrop" data-offer-close></div>
	<div class="ap-offer-card" role="dialog" aria-modal="true" aria-labelledby="ap-offer-title">
		<button class="ap-offer-close" type="button" data-offer-close aria-label="Close offer">&times;</button>
		<p class="eyebrow">First Visit Offer</p>
		<h2 id="ap-offer-title">Enjoy a little luxury on your first appointment.</h2>
		<p>Join the AP's Thread Salon beauty list for threading, waxing, facial care updates, and special salon offers.</p>
		<form class="ap-offer-form" action="#" method="post">
			<label class="screen-reader-text" for="ap-offer-email">Email address</label>
			<input id="ap-offer-email" type="email" name="email" placeholder="Enter your email" required>
			<button type="submit">Get Offer</button>
		</form>
		<small>No spam. Just polished beauty updates from AP's Thread Salon.</small>
	</div>
</div>
