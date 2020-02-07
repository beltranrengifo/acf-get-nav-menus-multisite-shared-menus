=== Advanced Custom Fields: Get nav menus with shared menus in multisite ===
Author:  Beltrán Rengifo - Daniel Glans - Bech Webbkonsult AB
Contributors: Bech webbkonsult
Plugin Name: Advanced Custom Fields: Get nav menus
Description: Get wordpress nav menus
Requires at least: 4.9.0
Tested up to: 5.3.1
Requires PHP: 5.0
Version: 1.0.0
Author URI: https://bechwebb.se
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Loops wordpress navigation menus

== Description ==

With Acf get menus you can easily get Wordpress navigation menus by choosing "Menus" in ACF when creating a new field.
Then you will get all of your created Wordpress menus as an object that your can do whatever you like with.

This is a mod over the original plugin:
https://wordpress.org/plugins/acf-get-nav-menus/
https://plugins.svn.wordpress.org/acf-get-nav-menus/

This mod shows the main site menus in the child sites ACF fields, so you easily can select parent site's menus:
https://github.com/beltranrengifo/acf-get-nav-menus-multisite-shared-menus

Simple like that

= Compatibility =

This ACF field type is compatible with:
* ACF 5

== Installation ==

1. Copy the `acf-get-menus` folder into your `wp-content/plugins` folder
2. Activate the Advanced Custom Fields: Get nav menus plugin via the plugins admin page
3. Create a new field via ACF and select the selectMenu type
4. Read the description above for usage instructions

== Changelog ==

= 1.0.0 =
* Initial Release.
