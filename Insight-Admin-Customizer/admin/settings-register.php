<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
// register plugin settings
function insight_admin_register_settings() {

register_setting(
	'insight_admin_options',
	'insight_admin_options',
	'insight_admin_callback_validate_options'
);

add_settings_section(
  'insight_admin_section_login',
  'Customize Your Login Page',
  'insight_admin_callback_section_login',
  'admin-welcome'
  );

add_settings_field(
	'custom_url',
	'Custom URL',
	'insight_admin_callback_field_text',
	'admin-welcome',
	'insight_admin_section_login',
	[ 'id' => 'custom_url', 'label' => 'Custom URL for your logo' ]
);
}
add_action( 'admin_init', 'insight_admin_register_settings' ); ?>
