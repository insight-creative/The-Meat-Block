<?php

add_filter( 'woocommerce_breadcrumb_defaults', 'ts_woocommerce_breadcrumbs_change' );

function ts_woocommerce_breadcrumbs_change() {
return array(
'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb" style="margin: 0 10px">',
'wrap_after' => '</nav>',
'before' => '',
'after' => '',
'home' => _x( 'Home', 'breadcrumb', 'woocommerce' ),
);
}
?>
