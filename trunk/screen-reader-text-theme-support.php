<?php
/**
 * Plugin Name: screen-reader-text theme support
 * Description: A plugin to support the upcomming ".screen-reader-text" CSS class. This adds support for those themes that don't support yet!
 * Version: 0.1.0
 * Author: Jaime Martinez, Rian Rietveld
 * Author URI: http://jaimemartinez.nl
 * License: GPLv2
 */

function sts_enqueue( ) {
    wp_enqueue_style( 'sts-main', plugin_dir_url( __FILE__ ) . 'assets/css/main.css', array(), '0.1.0' );
}

add_action('wp_enqueue_scripts', 'sts_enqueue');