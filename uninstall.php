<?php

// If uninstall not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

global $wpdb;
$table = $wpdb->prefix.'idea_factory';

// delete optoin
delete_option('idea_factory_version');

// drop db table
$wpdb->query("DROP TABLE IF EXISTS $table");
