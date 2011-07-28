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

- it is build upon Pages
- the menu structure (main and submenus) is defined in Admin > Appearance > Menus
- the order is defined in Admin > Pages by setting the `order` attribute of each Page
- in Admin > Appearance > Menus leave Theme Locations blank, don't select the Primary Menu.
This way Home menu will be added and Page orders will be effective.

