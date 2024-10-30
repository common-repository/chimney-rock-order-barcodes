<?php


if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

use enshrined\svgSanitize\Sanitizer;


add_action('wpo_wcpdf_after_document_label', 'crm_order_barcodes_pass_post_parameters', 10, 2);

//render the barcode
if (!function_exists('crm_order_barcodes_pass_post_parameters')) {
    function crm_order_barcodes_pass_post_parameters($label, $order) {

        if (!is_object($order)) {
            //bail
            return;
        }

        $generator = new \CrmOrderBarcodes\Inc\barcode_generator();

        $order_id = sanitize_text_field($order->get_order_number());

        /**
         * $order_id mixed, could be numeric, date, dashes etc
         */ 
        if (!($order_id)) {
            return;
        }

        $symbology = 'code-128';
        $data = $order_id;
        $options = 'svg';
        $format = 'svg';

        /* Generate SVG markup. */
        $svg = $generator->render_svg($symbology, $data, $options);

        // Create a new sanitizer instance
        $sanitizer = new Sanitizer();

        // Pass it to the sanitizer and get it back clean
        $cleanSVG = $sanitizer->sanitize($svg);

        $html ='<div style="display:inline-block">';
        $html .= '<img src="data:image/svg+xml;base64,' . base64_encode($cleanSVG) . '" ...>';
        $html .='</div>';
        echo $html;
    }
}