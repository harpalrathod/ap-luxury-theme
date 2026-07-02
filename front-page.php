<?php
/**
 * Luxury front page template.
 *
 * @package AP_Luxury
 */

get_header();
$hero_kicker = ap_luxury_get_option( 'ap_luxury_hero_kicker', "Rockwall's Boutique Threading Studio" );
$hero_title  = ap_luxury_get_option( 'ap_luxury_hero_title', 'Beautiful Brows. Timeless Confidence.' );
$hero_text   = ap_luxury_get_option( 'ap_luxury_hero_text', 'Precision eyebrow threading, facial threading, waxing, and glow-focused beauty care in a calm luxury setting.' );
$ap_map      = ap_luxury_get_option( 'ap_luxury_map_embed', 'Google Map Embed' );
?>
<section class="hero hero-luxury">
	<div class="hero-bg" aria-hidden="true"></div>
	<div class="ap-container hero-inner reveal-up">
		<p class="eyebrow"><?php echo esc_html( $hero_kicker ); ?></p>
		<h1><?php echo esc_html( $hero_title ); ?></h1>
		<p class="hero-copy"><?php echo esc_html( $hero_text ); ?></p>
		<div class="hero-actions">
			<a class="btn btn-gold" href="<?php echo esc_url( ap_luxury_booking_url() ); ?>">Book Appointment</a>
			<a class="btn btn-outline" href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Explore Services</a>
		</div>
	</div>
</section>

<section class="ap-section intro-section">
	<div class="ap-container two-column">
		<div class="section-kicker">Welcome</div>
		<div>
			<h2>Beauty shaped with precision, care, and quiet elegance.</h2>
			<p>At AP's Thread Salon, every appointment is designed around the details: clean shaping, comfortable technique, refined results, and a relaxing client experience.</p>
		</div>
	</div>
</section>

<section class="ap-section services-preview">
	<div class="ap-container">
		<div class="section-heading centered">
			<p class="eyebrow">Signature Services</p>
			<h2>Focused beauty essentials</h2>
		</div>
		<div class="service-grid">
			<?php
			$services = array(
				array( 'Eyebrow Threading', 'Clean, balanced shaping designed to frame your natural features.', 'From $12' ),
				array( 'Facial Threading', 'Gentle hair removal for a smooth, polished finish.', 'From $10' ),
				array( 'Waxing', 'Efficient, hygienic waxing services for silky skin.', 'From $15' ),
				array( 'Facials', 'Relaxing treatments to refresh and restore your glow.', 'From $45' ),
			);
			foreach ( $services as $service ) :
				?>
				<article class="service-card reveal-up">
					<div class="service-image"></div>
					<div class="service-content">
						<h3><?php echo esc_html( $service[0] ); ?></h3>
						<p><?php echo esc_html( $service[1] ); ?></p>
						<span><?php echo esc_html( $service[2] ); ?></span>
						<a href="<?php echo esc_url( ap_luxury_booking_url() ); ?>">Book This Service</a>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="ap-section why-section">
	<div class="ap-container">
		<div class="luxury-panel">
			<p class="eyebrow">Why Choose Us</p>
			<h2>Three full-time stylists. One refined standard.</h2>
			<div class="feature-grid">
				<div><strong>Precision</strong><p>Detail-focused shaping for naturally polished brows.</p></div>
				<div><strong>Hygiene</strong><p>Clean tools, fresh thread, and thoughtful care every visit.</p></div>
				<div><strong>Experience</strong><p>Consistent technique from skilled beauty professionals.</p></div>
				<div><strong>Atmosphere</strong><p>A calm boutique environment made for comfort.</p></div>
			</div>
		</div>
	</div>
</section>

<section class="ap-section gallery-strip">
	<div class="ap-container">
		<div class="section-heading centered">
			<p class="eyebrow">The AP Look</p>
			<h2>Soft, clean, beautifully defined</h2>
		</div>
		<div class="image-strip">
			<div></div><div></div><div></div><div></div>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/instagram-feed' ); ?>

<section class="ap-section testimonials-section">
	<div class="ap-container content-narrow centered">
		<p class="eyebrow">Client Love</p>
		<h2>Trusted for polished brows and thoughtful service.</h2>
		<blockquote>“The attention to detail makes every visit feel special. My brows always look clean, natural, and beautifully shaped.”</blockquote>
		<a class="btn btn-outline dark" href="<?php echo esc_url( home_url( '/testimonials/' ) ); ?>">Read Reviews</a>
	</div>
</section>

<?php get_template_part( 'template-parts/newsletter' ); ?>

<section class="ap-section location-section">
	<div class="ap-container two-column align-center">
		<div>
			<p class="eyebrow">Visit Us</p>
			<h2>AP's Thread Salon in Rockwall, TX</h2>
			<p>Book your next threading, waxing, or facial appointment and experience beauty care with a premium boutique touch.</p>
			<a class="btn btn-gold" href="<?php echo esc_url( ap_luxury_booking_url() ); ?>">Book Now</a>
		</div>
		<div class="map-card"><?php echo esc_html( $ap_map ); ?></div>
	</div>
</section>
<?php
get_footer();
