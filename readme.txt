=== Grid Accordion Lite ===
Contributors: bqworks
Tags: grid accordion, responsive grid, image grid, grid plugin, grid widget
Requires at least: 3.6
Tested up to: 6.0
Stable tag: 1.5.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Fully responsive and touch-enabled grid accordion plugin for WordPress.

== Description ==

Grid Accordion combines the look and functionality of a grid with that of an accordion. The lite version of Grid Accordion allows you to create simple image grids which are fully responsive and mobile-friendly.

Available features in the lite version:

* Fully responsive
* Touch support
* Clean and intuitive admin interface
* Preview grid accordions directly in the admin area
* Drag and drop panel sorting
* Inline information for the admin settings
* Customizable number of columns
* Add links to images
* Keyboard navigation
* Mouse wheel navigation
* SEO-friendly
* Publish grid accordions in any post (including pages and custom post types), in PHP code, and widget areas
* Caching system for quick loading times
* Optimized file loading. The JavaScript and CSS files are loaded only in pages where there are grid accordions
* MultiSite support
* Unlimited panels in a grid and unlimited grid accordions
* Localized for translation
* No ads

If you need more features, you can upgrade to the full version, which is now free and available for download at [https://bqworks.net/grid-accordion/](https://bqworks.net/grid-accordion/).

Additional features in the full version:

* Animated and static layers, which can contain text, images or any HTML content
* Load images and content dynamically, from posts (including custom post types), WordPress galleries and Flickr
* Pagination for the panels
* Retina support
* Lazy loading
* Deep linking
* Lightbox integration
* Swap image when the panel is opened
* Breakpoints for changing the grid accordion's settings at different screen sizes
* Action and filter hooks
* Import and export grid accordions

[These videos](https://bqworks.net/grid-accordion/screencasts/) demonstrate the full capabilities of the plugin.

== Installation ==

To install the plugin:

1. Install the plugin through Plugins > Add New > Upload or by copying the unzipped package to wp-content/plugins/.
2. Activate the Grid Accordion plugin through the 'Plugins > Installed Plugins' menu in WordPress.

To create grid accordions:

1. Go to Grid Accordion > Add New and click the 'Add Panels' button.
2. Select one or more images from the Media Library and click 'Insert into post'. 
3. After you customized the grid accordion, click the 'Create' button.

To publish grid accordions:

Copy the [grid_accordion id="1"] shortcode in the post or page where you want the accordion to appear. You can also insert it in PHP code by using <?php do_shortcode( '[grid_accordion id="1"]' ); ?>, or in the widgets area by using the built-in Grid Accordion widget.

== Frequently Asked Questions ==

= How can I add links to the images in the grid? =

When you select an image from the Media Library, in the right columns, under 'ATTACHMENT DISPLAY SETTINGS', you can set the 'Link To' option to 'Custom URL' and then specify the URL in the field below.

= How can I set the size of the images? =

When you select an image from the Media Library, in the right columns, under 'ATTACHMENT DISPLAY SETTINGS', you can use the 'Size' option to select the most appropriate size for the images.

== Screenshots ==

1. The list with all the created grid accordions.
2. The user interface for creating and editing an accordion.
3. The preview window in the admin area.

== Changelog ==

= 1.5 =
* fix styling for sidebar panels
* update the upgrade text
* update the website address

= 1.4 =
* fix compatibility with Gutenberg
* other fixes and improvements

= 1.3 =
* fixed missing arrows in admin sidebar panels

= 1.2 =
* fixed some compatibility issues with WordPress 4.3

= 1.1.1 =
* some bug fixes

= 1.1 =
* release of the lite version