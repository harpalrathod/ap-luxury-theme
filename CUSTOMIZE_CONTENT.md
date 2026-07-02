# Customize Content Guide

Most repeated website content is now controlled from this file:

`inc/site-content.php`

Use that file to edit services, prices, promotions, FAQ items, service highlight cards, and aftercare tips.

## Main Editable Areas

### Services and Prices

Edit this function:

`ap_luxury_services_data()`

Service item format:

`array( 'Service Name', 'Short description.', '$Price+' ),`

### Service Highlight Cards

Edit this function:

`ap_luxury_service_highlights_data()`

Card format:

`array( 'Card Title', 'Card description.' ),`

### Promotions

Edit this function:

`ap_luxury_promotions_data()`

Promotion format:

`array( 'Small Label', 'Main Title', 'Description', 'Button Text' ),`

### FAQ

Edit this function:

`ap_luxury_faqs_data()`

FAQ format:

`array( 'Question?', 'Answer text.' ),`

### Aftercare Tips

Edit this function:

`ap_luxury_aftercare_data()`

Tip format:

`array( 'Tip Title', 'Tip description.' ),`

## Business Details

Phone, address, hours, booking link, Instagram, and map defaults are in:

`inc/customizer.php`

These can also be updated in WordPress Admin:

Appearance → Customize → AP Luxury Business Info

## Page Layout Files

Use these files when changing layout:

- `front-page.php`
- `page-services.php`
- `page-booking.php`
- `page-contact.php`
- `page-promotions.php`
- `page-faq.php`
- `page-aftercare.php`

Keep the same quote, comma, and parenthesis format when editing PHP arrays.
