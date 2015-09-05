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

/**
 * Initially we run the dinlo hook on admin_init
 * this will produce a number of Notices and Warnings.
 * Fix this by commenting out the add_action
 *
 * Create a new problem by uncommenting the "admin_menu" action.
 * This will produce debug stuff to the page. 
 * It will mess up the WordPress Dashboard menu.
 * When using oik-bwtrace you can replace these calls with the APIs shown
 *
 * There's problems with the other two hook functions. 
 */
add_action( "admin_init", "dinlo" );
//add_action( "admin_menu", "dinlo_am" ); 
add_action( "shutdown", "dinlo_shutdown" );
add_filter( "wp_die_ajax_handler", "dinlo_die" );
add_filter( "update_footer", "dinlo_update_footer", 1 );

/**
 * Be a dinlo
 *
 * Attempt to get the value of page, which isn't set on some admin pages
 * such as Plugins, but will be set on the Settings > oik trace options page.
 * Attempt to hide Notices using the @ operator.
 * 
 * If unsuccessful in getting the 'page' then cause a couple of other of niggles.
 * The divide by zero problem only occurs when WP_DEBUG is true.
 */
function dinlo() {
	if ( !@$_GET['page'] ) {
		$dinlo = PI;
		if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
			$dinlo /= 0;
		}
	}
}

/**
 * Produce some simple debugging output
 * 
 * This is one way of getting debug output, but it messes up the display.
 *
 * It's much better to replace the calls with the following:
 * `
 * bw_trace2( $_SERVER );
 * bw_backtrace();
 * `
 */
function dinlo_am() {
	var_dump( $_SERVER );
	print_r( debug_backtrace() );
}

/**
 * Output some rubbish to the browser
 */
function dinlo_shutdown() {
	echo "<!-- Hello Dinlo -->";
}

/**
 * Change the footer badly
 *
 * It's supposed to be done by updating $update
 * and returning the value... it's a filter function, not an action hook.
 */
function dinlo_update_footer( $update ) {
  echo "Hello Dinlo $update";
}

/**
 * See if we can mess up AJAX
 *
 * Here's an example of bw_trace2() that will only log the trace record
 * when tracing at "Debug" level.
 *
 * @param string $ajax_handler 
 * @return string updated AJAX die handler function
 */
function dinlo_die( $ajax_handler ) {
	bw_trace2( null, null, true, BW_TRACE_ERROR );
  return( "dinlo_not_there" );
}




