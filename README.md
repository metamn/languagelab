# Languagelab

## Setup / Settings

- Wordpress 3.2.1 (See features and requirements at http://codex.wordpress.org/Version_3.2)
- $table_prefix  = 'wp_ll44_';  (in wp-config.php)

## Theme

- based on Wordpress default theme Twenty Eleven
- the HTML structure and semantics (element names and classes) is left unchanged
- only CSS / styling is changed
- where possible all original theme files are kept unchanged. Exceptions are documented below.


## Main Menu

- it is built upon Pages
- the menu structure (main and submenus) is defined in Admin > Appearance > Menus
- the order is defined in Admin > Pages by setting the `order` attribute of each Page
- Home menu is added via code in functions.php


## Sidebar Menu

- it is built upon Pages
- Brochure download (pdf) and Social Media Icons are displayed via Text widgets


## Start Page and Blog

- Wordpress is configured to display the page 'Home' as the front page, and show posts via the 'Blog' page
- 'front-page.php' by default is considered by Wordpress to display the page 'Home'
