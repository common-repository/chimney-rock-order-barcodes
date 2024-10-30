<?php


/**
 *
* Plugin Name: Chimney Rock - Order Barcodes 
* WC tested up to: 8.3.1
* Tested up to: 6.4.1
* Version: 1.0.12
* Author: Chimney Rock Software
* Author URI: https://chimneyrockmgt.com/
* License: GPLv2 or later
* Text Domain: chimney-rock-order-barcodes

Description: Adds a printable barcode to pdf Invoice and Packing slips for each WooCommerce order.  Increases efficiency allowing you to scan the barocde and search for the order.



This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2016-2021 Chimney Rock Software
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}


add_action( 'before_woocommerce_init', function() {
    if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
        \Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'custom_order_tables', __FILE__, true );
    }
} );


add_action ( 'plugins_loaded', 'crm_order_barcodes_init');

if (!function_exists('crm_order_barcodes_missing_wc_notice ')) {
    function crm_order_barcodes_missing_wc_notice( ) {
        echo '<div class="error notice-error">' . 'Chimney Rock Order Barcodes requires Woocommerce to be active' . '</div>';
    }
}

if (!function_exists('crm_order_barcodes_missing_wpo_notice ')) {
    function crm_order_barcodes_missing_wpo_notice( ) {
        echo '<div class="error notice-error">' . 'Chimney Rock Order Barcodes requires WooCommerce PDF & Packing Slips to be active ' . '</div>';
    }
}

if (!function_exists('crm_order_barcodes_init ')) {
    function crm_order_barcodes_init () {
      if ( !class_exists( 'WooCommerce' ) ){
        add_action ( 'admin_notices', 'crm_order_barcodes_missing_wc_notice' );
        return;
      }

      if (!class_exists('WPO_WCPDF')) {
        add_action ( 'admin_notices', 'crm_order_barcodes_missing_wpo_notice' );
        return;
      }

      //proceed
      require (dirname(__FILE__) . '/vendor/autoload.php');
      require_once (dirname(__FILE__) . '/inc/barcode.php');
      require_once (dirname(__FILE__) . '/inc/parameters.php');
    }
}

add_action ('admin_init', 'crm_order_barcodes_plugin_data');

if (!function_exists('crm_order_barcodes_plugin_data ')) {
    function crm_order_barcodes_plugin_data () {
        $plugin_data = get_plugin_data( __FILE__ );
        $version = $plugin_data ['Version'];
        define ('CRM_ORDER_BARCODES_MANAGER_VERSION', $version);
        update_option('crm_order_barcodes_version', $version);
    }
}



