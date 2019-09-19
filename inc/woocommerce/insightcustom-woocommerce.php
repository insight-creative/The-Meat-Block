<?php
/**
 * Remove the breadcrumb delimiter
 *
 * @param  array $defaults The breadcrumb defaults.
 * @return array           The breadcrumb defaults.
 * @since 2.2.0
 */
function change_breadcrumb_delimiter( $defaults ) {
  $defaults['delimiter']   = '<span class="breadcrumb-separator"> / </span>';
  $defaults['wrap_before'] = '<div class="storefront-breadcrumb"><div class="col-full"><nav class="woocommerce-breadcrumb">';
  $defaults['wrap_after']  = '</nav></div></div>';
  return $defaults;
}
?>
