<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://boozang.com
 * @since             1.0.0
 * @package           Boozang
 *
 * @wordpress-plugin
 * Plugin Name:       Boozang
 * Plugin URI:        https://github.com/ljunggren/boozang-wp
 * Description:       The Boozang plugin allows you to automate testing of your WordPress site. Create a free account at http://boozang.com to create your first project. 
 * Version:           1.0.0
 * Author:            Mats
 * Author URI:        http://boozang.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       boozang
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-boozang-activator.php
 */
function activate_boozang() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-boozang-activator.php';
	Boozang_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-boozang-deactivator.php
 */
function deactivate_boozang() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-boozang-deactivator.php';
	Boozang_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_boozang' );
register_deactivation_hook( __FILE__, 'deactivate_boozang' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-boozang.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_boozang() {

	$plugin = new Boozang();
	$plugin->run();

}

run_boozang();
