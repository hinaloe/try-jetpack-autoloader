<?php
/**
 * Plugin Name:     My Autoload Sample
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     my-autoload-sample
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         My_Autoload_Sample
 */
require_once plugin_dir_path(__FILE__) . '/vendor/autoload_packages.php';

add_action('init', function() {
	$status = new Automattic\Jetpack\Status();

	$is_dev = $status->is_development_mode();

	var_dump($is_dev);
	exit;
});
