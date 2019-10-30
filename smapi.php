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
 * Add SMAPI tables to the WP Database (if not exists)
 * Call the function when SMAPI is activated
 */
$smapi_db_version = '0.5';
$smapi_db_installed = get_option( "smapi_db_version");
function smapi_table() {
	if ( $smapi_db_installed != $smapi_db_version) {
		die("hit");
		global $wpdb;
		global $smapi_db_version;
		$charset_collate = $wpdb->get_charset_collate();
		$table_name = $wpdb->prefix . "smapi";

		/* Create the table */
		$sql = "CREATE TABLE IF NOT EXISTS $table_name (
		month_12 varchar(4) NOT NULL,
		month_24 varchar(4) NOT NULL,
		month_36 varchar(4) NOT NULL,
		month_48 varchar(4) NOT NULL,
		month_60 varchar(4) NOT NULL
		) $charset_collate;";	
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );

		/* Insert sample data */
		$wpdb->insert( 
			$table_name, 
			array( 
				'month_12' => '1.0', 
				'month_24' => '1.0',
				'month_36' => '1.0',
				'month_48' => '1.0',
				'month_60' => '1.0',
			) 
		);	

		/* Tell WordPress this script has been run */
		$smapi_db_version = '1.0';
		add_option( 'smapi_db_version', $smapi_db_version);
	}
}
register_activation_hook( __FILE__, 'smapi_table' );

/**
 * Add SMAPI settings to the admin menu
 */

add_action( 'admin_menu', 'smapi_admin_menu' );
function smapi_admin_menu() {
	add_menu_page( 'SMAPI', 'SMAPI Settings', 'manage_options', 'smapisettings.php', 'smapi_settings_page', 'dashicons-admin-generic');
}

/**
 * Function to render the SMAP Settings page
 */

function smapi_settings_page(){
	require_once("settings/smapisettings.php");
}

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
