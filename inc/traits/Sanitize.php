<?php

/*
* Sanitize trait
*/

namespace CrmOrderBarcodes\Inc\Traits;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}


trait Sanitize {

	public static function sanitizeNumber($number) {

		$clean = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
		return $clean;
	}

	public static function sanitizeUrl ($url) {
		$clean = filter_var($url, FILTER_SANITIZE_URL);
		return $clean;	
	}
}