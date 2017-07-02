<?php
/*
  Plugin Name: YARPP related template
  Plugin URI: http://marc.tv/marctv-wordpress-plugins/
  Description: YARPP related list for twentyseventeen with lazy load.
  GitHub Plugin URI: mtoensing/yarpp-twentyseventeen
  Version: 2.0
  Author: MarcDK
  Author URI: https://marc.tv
  License: GPL2
 */

function yarpp_twentyseventeen_scripts() {

	wp_enqueue_script(
		'jquery.unveil',
		WP_PLUGIN_URL . "/yarpp-twentyseventeen/jquery.unveil.js", array( "jquery" ),
		2.0,
		true );

	wp_enqueue_script(
		'jquery.yarpp-init',WP_PLUGIN_URL . "/yarpp-twentyseventeen/jquery.unveil-init.js", array( "jquery", "jquery.unveil" ),2.0,true );


	wp_enqueue_style(
		"yarpp-template-thumbnails",WP_PLUGIN_URL . "/yarpp-twentyseventeen/yarpp-template.css",false,2.0 );

}

if ( ! is_admin() ) {
	add_action( 'wp_enqueue_scripts', 'yarpp_twentyseventeen_scripts' );
}
?>