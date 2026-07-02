<?php
/**
 * Template Name: FAQ
 *
 * @package AP_Luxury
 */
get_header();
$faqs = array(
	array( 'Do I need an appointment?', 'Appointments are recommended for the smoothest experience, but walk-ins may be accepted when availability allows.' ),
	array( 'Is eyebrow threading good for sensitive skin?', 'Threading is a precise hair removal method that does not require hot wax on the brow area, making it a popular option for many guests with sensitive skin.' ),
	array( 'How often should I thread my eyebrows?', 'Most clients return every two to four weeks, depending on hair growth and the desired brow shape.' ),
	array( 'Do you offer facial threading?', 'Yes. AP\'s Thread Salon offers targeted facial threading services such as upper lip, chin, sides, and full face threading.' ),
	array( 'Do you offer waxing?', 'Yes. Waxing services are available for selected areas. Visit the Services page or book an appointment for details.' ),
	array( 'Where are you located?', ap_luxury_get_option( 'ap_luxury_address', 'Rockwall, TX' ) ),
);
?>
<section class="ap-section page-hero small-hero">
	<div class="ap-container content-narrow centered">
		<p class="eyebrow">Questions</p>
		<h1>Beauty care answers before you book.</h1>
		<p>Helpful answers about threading, waxing, appointments, and visiting AP's Thread Salon.</p>
	</div>
</section>
<section class="ap-section faq-section">
	<div class="ap-container content-narrow">
		<?php foreach ( $faqs as $faq ) : ?>
			<article class="faq-card reveal-up">
				<h2><?php echo esc_html( $faq[0] ); ?></h2>
				<p><?php echo esc_html( $faq[1] ); ?></p>
			</article>
		<?php endforeach; ?>
	</div>
</section>
<?php get_template_part( 'template-parts/cta-booking' ); ?>
<?php get_footer();
