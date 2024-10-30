=== Chimney Rock Order Barcodes ===

Tags: woocommerce, barcodes, order
Requires at least: 4.7
Tested up to: 6.4.1
WC tested up to: 8.3.1
Stable tag: 1.0.12
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Author: Chimney Rock Software
Author URI: https://chimneyrockmgt.com
Text Domain: chimney-rock-order-barcodes


== Description ==

Adds linear order barcodes to WooCommerce PDF and Packing Slips.


== How Does It Work? ==
* The plugin extends the functionality of WooCommerce PDF and Packing Slips, so you will need to have it installed as well.
* An order barcode will be added to both the Invoice and the Packing slip.  It works when you create invoices and packing slips one at a time, or in bulk.  You can then scan this barcode when you are in order's dashboard to quickly find the order.
* Works with standard barcode scanners



== Frequently Asked Questions ==
= How Do I get support? =
If you have any issues, you can submit a support ticket on Wordpress.org  We'll get back to you quickly.

= Will this work with Sequential Order Nubmers plugin? =
Yes it will.  See the link for this plugin below under Compatible Plugins.

= I'm using Sequential Order Numbers and I cannot find my order when I scan the barcode.  What's wrong? =
Make sure the "Search Orders" checkbox is enabled in the Sequential order plugin.  Also, if you are starting with a low number such as 1, searching will return any order with the number 1.  You may want to start at a higher number so that the results are more specific.

== Screenshots ==
 
1. Barcode added to PDF Packing Slip
2. Barcode added to PDF Invoice

== Requirements ==
* Wordpress 4.7
* WooCommerce 4.3
* WooCommerce Pdf & Packing Slips
* PHP 7.0

== Compatible Plugins ==
* [WooCommerce](https://wordpress.org/plugins/woocommerce/)
* [Chimney Rock Inventory Manager](https://chimneyrockmgt.com/product/inventory-manager/)
* [WooCommerce PDF & Packing Slips](https://wordpress.org/plugins/woocommerce-pdf-invoices-packing-slips/)
* [Sequential Order Number for WooCommerce](https://wordpress.org/plugins/wt-woocommerce-sequential-order-numbers/)

== Changelog ==

= 1.0.12 =
* remove trait sanitize - use sanitizer library instead #6
* support for high performance order storage #7

= 1.0.10 =
* WC tested up to: 8.3.1
* WP Tested up to: 6.4.1

= 1.0.9 =
* tested to WP 6.0.1

= 1.0.8 =
* Tested up to WP 5.9.2

= 1.0.7 =
* Tested up to WP 5.9.0

= 1.0.6 =
* Tested up to WC 6.1.1
* Tested up to WP 5.8.3

= 1.0.5 =
* Tested up to WP 5.8.1

= 1.0.4 =
* Allow custom prefixed order numbers if enabled by sequential order plugin
* Add packing slip screenshot

= 1.0.3 =
* Add screenshot

= 1.0.2 = 
* Initial release

