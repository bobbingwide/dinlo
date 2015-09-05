<?php
/**
Plugin Name: dinlo
Plugin URI: http://www.oik-plugins.com/oik-plugins/dinlo
Description: The world's worst Hello World plugin
Version: 0.0.1
Author: bobbingwide
Author URI: http://www.oik-plugins.com/author/bobbingwide
Text Domain: dinlo
Domain Path: /languages/
License: GPL2

*/

add_action( "admin_init", "dinlo" );
add_action( "admin_menu", "dinlo_am" ); 
add_action( "shutdown", "dinlo_shutdown" );
add_filter( "wp_die_ajax_handler", "dinlo_die" );
add_filter( "update_footer", "dinlo_update_footer", 1 );


/**
 * Be a dinlo
 *
 *
 * Attempt to get the value of page, which isn't set on some admin pages
 * such as Plugins, but will be set on the Settings > oik trace options page.
 * If unsuccessful then cause a load of other problems
 */
function dinlo() {
	if ( !@$_GET['page'] ) {
		$dinlo = PI;
		$dinlo /= 0;
	}
}

/**
 * Mess up an AJAX request 
 */
function dinlo_am() {
	echo "<!-- Hello Dinlo -->";
}


/**
 * Output some rubbish to the browser
 */
function dinlo_shutdown() {
	var_dump( $_SERVER );
	print_r( debug_backtrace() );
}

/**
 * Change the footer badly
 *
 * It's supposed to be done by updating $update
 * and returning the value.
 */
function dinlo_update_footer( $update ) {
  echo "Hello Dinlo $update";
}

function dinlo_die( $ajax_handler ) {
	bw_trace2( null, null, true, BW_TRACE_ERROR );
  return( "dinlo_am" );
}




