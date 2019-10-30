<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.datadelenhc.se
 * @since             1.0.0
 * @package           Smapi
 *
 * @wordpress-plugin
 * Plugin Name:       Smartprovider API
 * Plugin URI:        https://github.com/HakanBergman/SMAPI.git
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Datadelen Hosting Center
 * Author URI:        https://www.datadelenhc.se
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       smapi
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
	add_menu_page( 'SMAPI', 'Settings', 'manage_options', 'SMAPI/settings/settings.php', 'smapi_admin_page', 'dashicons-generic', 6  );
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'SMAPI_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-smapi-activator.php
 */
function activate_smapi() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-smapi-activator.php';
	Smapi_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-smapi-deactivator.php
 */
function deactivate_smapi() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-smapi-deactivator.php';
	Smapi_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_smapi' );
register_deactivation_hook( __FILE__, 'deactivate_smapi' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-smapi.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_smapi() {

	$plugin = new Smapi();
	$plugin->run();

}
run_smapi();