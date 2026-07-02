<?php
/**
 * Starter content for AP Luxury.
 *
 * @package AP_Luxury
 */

function ap_luxury_starter_content() {
	return array(
		'posts' => array(
			'home' => array(
				'post_type'    => 'page',
				'post_title'   => 'Home',
				'post_content' => 'Welcome to AP\'s Thread Salon.',
			),
			'about' => array(
				'post_type'    => 'page',
				'post_title'   => 'About',
				'post_content' => 'Luxury threading and beauty care in Rockwall, TX.',
			),
			'services' => array(
				'post_type'    => 'page',
				'post_title'   => 'Services',
				'post_content' => 'Eyebrow threading, facial threading, waxing, facials, and beauty services.',
			),
			'booking' => array(
				'post_type'    => 'page',
				'post_title'   => 'Booking',
				'post_content' => 'Book your appointment at AP\'s Thread Salon.',
			),
			'contact' => array(
				'post_type'    => 'page',
				'post_title'   => 'Contact',
				'post_content' => 'Visit AP\'s Thread Salon in Rockwall, TX.',
			),
		),
		'options' => array(
			'show_on_front'  => 'page',
			'page_on_front'  => '{{home}}',
			'page_for_posts' => '{{blog}}',
		),
		'nav_menus' => array(
			'primary' => array(
				'name'  => 'Primary Menu',
				'items' => array(
					'link_home',
					'page_about',
					'page_services',
					'page_booking',
					'page_contact',
				),
			),
		),
	);
}
