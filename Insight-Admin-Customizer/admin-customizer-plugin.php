<?php
/*
Plugin Name: Insight Admin
Description: Insight Creative, Inc. Admin Dashboard Customizer
Author: Insight Creative
Author URI: https://insightcreative.com/
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function admin_theme_style() {
	wp_enqueue_style('insight-admin-customizer', plugins_url('wp-admin.css', __FILE__));
}

if ( is_admin() ) {
	add_action('admin_enqueue_scripts', 'admin_theme_style');
	add_action('login_enqueue_scripts', 'admin_theme_style');
	require_once plugin_dir_path(__FILE__) . 'admin/insight-admin-functions.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-welcome.php';
}
