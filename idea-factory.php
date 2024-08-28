<?php

/**
 * 	Plugin Name:       Idea Verse
 * 	Plugin URI:        
 * 	Description:       Front-end user submission and voting system.
 * 	Version:           0.0.1
 * 	GitHub Plugin URI: https://github.com/Open-WP-Club/ideaverse/
 *	Author:            
 * 	Author URI:        
 * 	License:           GPL-2.0
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Set some constants
define('IDEA_FACTORY_VERSION', '1.1');
define('IDEA_FACTORY_DIR', plugin_dir_path( __FILE__ ));
define('IDEA_FACTORY_URL', plugins_url( '', __FILE__ ));

require_once( plugin_dir_path( __FILE__ ) . 'public/class-idea-factory.php' );


register_activation_hook( __FILE__, array( 'Idea_Factory', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Idea_Factory', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'Idea_Factory', 'get_instance' ) );

if ( is_admin() ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-idea-factory-admin.php' );
	add_action( 'plugins_loaded', array( 'Idea_Factory_Admin', 'get_instance' ) );

}
