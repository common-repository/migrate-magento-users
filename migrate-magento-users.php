<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/*
Plugin Name: Migrate Magento Users
Description: A plugin to migrate users from Magento to WordPress.
Author: Ramlal Solanki
Author URI: https://about.me/ramlal
Version: 1.0
*/
//to add custom page in admin section
add_action('admin_menu', 'migrate_magento_users_plugin');
function migrate_magento_users_plugin(){
	$plugins_url = plugin_dir_url( __FILE__ ) . 'images/magento-logo.png' ;
	add_menu_page( 'Migrate magento Users', 'Migrate magento Users', 'manage_options', 'migrate-magento-users-plugin', 'migrate_magento_users_init', $plugins_url );
}

function migrate_magento_users_init(){
	require plugin_dir_path( __FILE__ ) . 'migrate_magento_users.php';
}
?>