# Page Management Guide

This theme is set up so you can add, delete, edit, or modify pages without rebuilding the whole theme.

## Best Way To Add A New Page

Use WordPress Admin:

1. Go to Pages → Add New.
2. Add the page title.
3. Add your page content in the editor.
4. In the page template setting, choose `Flexible Custom Page`.
5. Publish the page.
6. Go to Appearance → Menus and add the new page to the menu.

Use this method for pages like:

- Careers
- New Location
- Bridal Services
- Membership
- Gift Cards
- Skin Care Tips
- Special Event Services

## Best Way To Delete A Page

Use WordPress Admin:

1. Go to Pages.
2. Trash the page you no longer want.
3. Go to Appearance → Menus.
4. Remove that page from the menu.
5. Clear your cache.

## Best Way To Rename A Page

Use WordPress Admin:

1. Go to Pages.
2. Open the page.
3. Change the title.
4. Update the page slug if needed.
5. Update the menu label under Appearance → Menus.

## When To Edit Files

Only edit theme files when you want to change layout or repeated data.

Repeated content is controlled in:

`inc/site-content.php`

Business information is controlled in:

`inc/customizer.php`

General new pages can use:

`page-flex.php`

## When To Create A New Template File

Create a new page template only when the page needs a special layout. Copy `page-flex.php`, rename it, and change the template name at the top.

Example:

- Copy `page-flex.php`
- Rename to `page-bridal.php`
- Change `Template Name: Flexible Custom Page` to `Template Name: Bridal Services`
- Add your custom layout
- Select the new template in WordPress Admin

## Important Menu Rule

Deleting a theme file does not delete a WordPress page. WordPress pages are managed in WordPress Admin. The menu must also be updated after adding or deleting pages.
