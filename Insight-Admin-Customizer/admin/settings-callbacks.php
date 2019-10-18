<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
// validate plugin settings
function insight_admin_validate_options($input) {
	// todo: add validation functionality..
	return $input;
}
// callback: login section
function insight_admin_callback_section_login() {
	echo '<p>These settings enable you to customize your WP Login screen.</p>';
}
// callback: text field
function insight_admin_callback_field_text( $args ) {
	// todo: add callback functionality..
	echo 'This will be a text field.';
}
