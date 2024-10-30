<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

/**
 * remove option on plugin uninstall
 */ 
delete_option ('crm_order_barcodes_version');