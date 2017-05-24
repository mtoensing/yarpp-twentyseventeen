<?php

/*
  Plugin Name: YARPP Twentyseventeen Theme
  Plugin URI: http://www.marc.tv/marctv-wordpress-plugins/
  Description: YARPP related list for twentyseventeen
  Version: 4.7.3
  Author: MarcDK
  Author URI: http://www.marc.tv
  License: GPL2
 */

function yarpp_twentyseventeen_scripts()
{

	wp_enqueue_script(
		'jquery.unveil',
		WP_PLUGIN_URL . "/yarpp-twentyseventeen/jquery.unveil.js", array("jquery"),
		1.0,
		true);

	wp_enqueue_script(
		'jquery.yarpp-init',
		WP_PLUGIN_URL . "/yarpp-twentyseventeen/jquery.yarpp-init.js", array("jquery","jquery.unveil"),
		1.0,
		true);


	wp_enqueue_style(
		"yarpp-template-thumbnails",
		WP_PLUGIN_URL . "/yarpp-twentyseventeen/yarpp-template.css",
		false,
		1.0
	);


}


if (!is_admin()) {
	add_action('wp_enqueue_scripts', 'yarpp_twentyseventeen_scripts');
}
?>








