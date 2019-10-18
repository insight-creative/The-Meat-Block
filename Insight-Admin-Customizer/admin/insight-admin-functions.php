<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/*********************************************************
Adds the custom Insight message to the footer of the dashboard
*********************************************************/
function change_admin_footer(){
  echo '<span id="footer-note">Custom website built by your friends at <a href="http://insightcreative.com/culture/" target="_blank">Insight Creative, Inc.</a>. Having troubles with your site? <a href="http://insightcreative.com/contact/" target="_blank">Contact us</a></span>';
 }
add_filter('admin_footer_text', 'change_admin_footer');
/*********************************************************
Adds the custom Insight Welcome Widget to the dashboard
*********************************************************/
function insight_add_dashboard_widgets() {
	wp_add_dashboard_widget(
		'insight_dashboard_widget', // Widget slug.
		'Insight Welcome Widget', // Title.
		'insight_dashboard_widget_function' // Display function.
	);
}
add_action( 'wp_dashboard_setup', 'insight_add_dashboard_widgets' );
/*********************************************************
Output the contents of your Dashboard Widget
*********************************************************/
function insight_dashboard_widget_function() {
	echo '<p>';
	echo 'Welcome to your new WordPress website!';
	echo '</p>';
	echo '<p>';
  echo 'To read more about your website, you can find WordPress documentation ' . '<a href="https://wordpress.org/support/" target="_blank">here</a>';
	echo '</p>';
	echo '<p>';
	echo 'Important! Do not make plugin updates yourself. We will run all plugin updates and make sure your site is up to date. Have questions? ' . '<a href="https://insightcreative.com/contact/" target="_blank"> Contact us</a>';
	echo '</p>';
	echo '<p>';
	echo 'To view your website training visit the Welcome tab of your admin dashboard';
	echo '</p>';
}
/*********************************************************
Add menu to the Admin Control Panel
*********************************************************/
function add_Admin_Link()
{
      add_menu_page(
        'Insight Welcome Page', // Title of the page
        'Welcome', // Text to show on the menu link
        'manage_options', // Capability requirement to see the link
        'admin-welcome', // The 'slug' - file to display when clicking the link
        'display_welcome_page',
        'dashicons-buddicons-groups',
        2
    );
}
// Hook the 'admin_menu' action hook, run the function named 'add_Admin_Link'
add_action( 'admin_menu', 'add_Admin_Link' );
