<?php
/*
Plugin Name:X-Scroll To Top - Responsive
Plugin URI: https://wordpress.org/plugins/x-scroll-to-top-responsive/
Description: This plugin will add a scroll to top button on footer center.
Author: Jahid
Author URI: https://jahid.co
Version: 3.0.0
Copyright 2014-2019  Md. Jahidul Islam  (email : contact@jahid.co)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 *  Plugin Text Domain
 */
function xscroll_domain_load_function(){
	load_plugin_textdomain('xscroll', false, dirname(__FILE__)."/languages");
}
add_action('plugins_loaded','xscroll_domain_load_function');


/**
 * Currently plugin version.
 * Start at version 1.0.0 
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'XSTR_VERSION', '3.0.0' );

define('XSTR_PLUGIN_URL', plugin_dir_url(__FILE__));

// Constant of plugin directory
define('XSTR_PLUGIN_PATH', plugin_dir_path(__FILE__));

// Constant of plugin based name
define('XSTR_PLUGIN_BASENAME', plugin_basename(__FILE__));

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-jahid-activator.php
 */
function activate_XSTR() {
	require_once XSTR_PLUGIN_PATH . 'inc/class-XSTR-activator.php';
	XSTR_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-jahid-deactivator.php
 */
function deactivate_XSTR() {
	require_once XSTR_PLUGIN_PATH . 'inc/class-XSTR-deactivator.php';
	XSTR_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_XSTR');
register_deactivation_hook( __FILE__, 'deactivate_XSTR' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */


require_once XSTR_PLUGIN_PATH.'inc/class-XSTR-core.php';
require_once XSTR_PLUGIN_PATH.'inc/class-XSTR-assets.php';
require XSTR_PLUGIN_PATH.'inc/class-XSTR-custom-customizer.php';
require_once XSTR_PLUGIN_PATH.'inc/class-XSTR-customizer.php';
require_once XSTR_PLUGIN_PATH.'inc/class-XSTR-admin-notice.php';



add_action('admin_notices', 'XSTR_admin_notice::admin_notices_old_user');

$core = new XSTR_core();
$core->init();

$assets = new XSTR_assets();
$assets->init();

$customizer = new XSTR_customizer();
$customizer->init();

