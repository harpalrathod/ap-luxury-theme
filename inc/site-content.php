<?php
/**
 * Editable content data for AP Luxury.
 *
 * Update these arrays to edit, delete, or add repeated website content.
 * Keep each item inside array( ... ) and use plain text.
 *
 * @package AP_Luxury
 */

function ap_luxury_services_data() {
	return array(
		'Haircut' => array(
			array( 'Hair Cut', 'Fresh haircut and salon shaping.', '$24.00 & up' ),
			array( 'Dandruff Treatment', 'Scalp-focused treatment for a cleaner, refreshed feel.', '$30.00 & up' ),
			array( 'Long Layer', 'Layered haircut service for longer hair.', '$25.00 & up' ),
			array( 'Blow-dry / Style', 'Polished blow-dry and styling finish.', '$25.00 & up' ),
			array( 'Hair Straightening', 'Smooth styling service for a straight, finished look.', '$30.00 & up' ),
		),
		'Hair Color' => array(
			array( 'Root Touch-up', 'Color refresh for root regrowth.', '$50.00 & up' ),
			array( 'Full Hair Color', 'Full color service. Appointment only.', '$79.00 & up' ),
			array( 'Hair Color for Men', 'Hair color service for men.', '$25.00 & up' ),
			array( 'Full Highlights', 'Full highlight service for brighter dimension.', '$70.00 & up' ),
			array( 'Partial Highlights', 'Partial highlight service for soft dimension.', '$35.00 & up' ),
			array( 'Deep Conditioning', 'Conditioning treatment for softer, refreshed hair.', '$35.00 & up' ),
			array( 'Hair Wash', 'Simple hair wash service.', '$15.00' ),
		),
		'Massages' => array(
			array( 'Hot Oil Head Massage', 'Relaxing hot oil head massage service.', '$35.00 & up' ),
			array( 'Herbal Hair Mask', 'Herbal hair mask treatment for refreshed hair care.', '$40.00' ),
			array( 'Herbal Henna for Hair', 'Herbal henna service for hair.', '$50.00 & up' ),
		),
		'Eyebrow Threading' => array(
			array( 'Eyebrow Threading', 'Signature brow shaping with clean definition.', '$12+' ),
			array( 'Eyebrow Cleanup', 'Maintenance for already-shaped brows.', '$10+' ),
			array( 'Eyebrow + Upper Lip', 'A polished everyday pairing.', '$18+' ),
		),
		'Facial Threading' => array(
			array( 'Upper Lip', 'Gentle, precise hair removal.', '$7+' ),
			array( 'Chin', 'Clean finish for the lower face.', '$8+' ),
			array( 'Full Face Threading', 'Smooth, refined facial finish.', '$35+' ),
		),
		'Waxing' => array(
			array( 'Underarms', 'Quick, hygienic waxing service.', '$15+' ),
			array( 'Arms', 'Smooth finish for arms.', '$30+' ),
			array( 'Legs', 'Comfortable waxing with clean results.', '$45+' ),
		),
		'Tinting & Add-ons' => array(
			array( 'Eyebrow Tinting', 'Soft color enhancement for fuller-looking brows.', '$20+' ),
			array( 'Facial Add-on', 'Refresh your service with extra glow care.', '$15+' ),
		),
	);
}

function ap_luxury_service_highlights_data() {
	return array(
		array( 'Haircut and Styling', 'Fresh haircuts, long layers, blow-dry styling, straightening, and scalp-focused care.' ),
		array( 'Hair Color Services', 'Root touch-ups, full color, highlights, men\'s color, deep conditioning, and hair wash services.' ),
		array( 'Massage and Herbal Hair Care', 'Hot oil head massage, herbal hair mask, and herbal henna services for a refreshed salon experience.' ),
		array( 'Eyebrow Threading in Rockwall', 'Precision brow shaping for clean definition, natural balance, and a polished everyday look.' ),
	);
}

function ap_luxury_promotions_data() {
	return array(
		array( 'New Clients', 'First Visit Glow', 'A refined welcome offer for first-time guests booking threading, waxing, or facial care.', 'Claim Offer' ),
		array( 'Referral', 'Share the AP Look', 'Refer a friend and receive a thank-you reward after their first visit.', 'Ask Us' ),
		array( 'Gift Cards', 'Give Beautiful Brows', 'Promote seasonal gift card offers for birthdays, holidays, and self-care surprises.', 'Gift Details' ),
		array( 'Membership', 'Monthly Brow Care', 'Build a regular beauty routine with priority maintenance and special savings.', 'Learn More' ),
	);
}

function ap_luxury_faqs_data() {
	return array(
		array( 'Do I need an appointment?', 'Appointments are recommended for the smoothest experience, but walk-ins may be accepted when availability allows.' ),
		array( 'Do you offer haircuts?', 'Yes. AP\'s Thread Salon offers haircut and styling services including hair cut, long layer, blow-dry, straightening, and dandruff treatment.' ),
		array( 'Do you offer hair color?', 'Yes. AP\'s Thread Salon offers root touch-up, full hair color, men\'s hair color, highlights, deep conditioning, and hair wash services.' ),
		array( 'Do you offer massage and herbal hair care?', 'Yes. AP\'s Thread Salon offers hot oil head massage, herbal hair mask, and herbal henna for hair.' ),
		array( 'Is eyebrow threading good for sensitive skin?', 'Threading is a precise hair removal method that does not require hot wax on the brow area, making it a popular option for many guests with sensitive skin.' ),
		array( 'How often should I thread my eyebrows?', 'Most clients return every two to four weeks, depending on hair growth and the desired brow shape.' ),
		array( 'Do you offer facial threading?', 'Yes. AP\'s Thread Salon offers targeted facial threading services such as upper lip, chin, sides, and full face threading.' ),
		array( 'Do you offer waxing?', 'Yes. Waxing services are available for selected areas. Visit the Services page or call for details.' ),
		array( 'Where are you located?', ap_luxury_get_option( 'ap_luxury_address', '577 East Interstate 30, Rockwall, TX 75087' ) ),
	);
}

function ap_luxury_aftercare_data() {
	return array(
		array( 'Threading Aftercare', 'Keep the area clean, avoid touching freshly threaded skin, and skip heavy makeup for a few hours when possible.' ),
		array( 'Waxing Aftercare', 'Avoid heat, sweating, fragrance, and exfoliation for the first day after waxing to help skin stay calm.' ),
		array( 'Facial Aftercare', 'Use gentle products, avoid harsh exfoliation, and protect your skin from strong sun exposure after a facial.' ),
		array( 'Before Your Brow Visit', 'Arrive with clean skin when possible and tell your stylist about sensitivity, retinol use, or recent skin treatments.' ),
		array( 'When To Return', 'Most brow guests return every two to four weeks depending on hair growth and preferred shape.' ),
		array( 'Ask Your Stylist', 'For sensitive skin or special events, ask the salon team for timing and aftercare suggestions before booking.' ),
	);
}
