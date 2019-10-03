<?php

function woo_custom_breadrumb_home_url() {
  return 'https://woocommerce-154794-977005.cloudwaysapps.com';
}
add_filter('woocommerce_breadcrumb_home_url', 'woo_custom_breadrumb_home_url');

function insightCustom_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'insightCustom_add_woocommerce_support' );

?>
