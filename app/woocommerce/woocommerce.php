<?php
function woo_custom_breadrumb_home_url() {
  return site_url("/");
}
add_filter('woocommerce_breadcrumb_home_url', 'woo_custom_breadrumb_home_url');

function insightCustom_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'insightCustom_add_woocommerce_support' );

////////////////////////////////////////////////////////////////
// Add custom quantity selector to our Woocommerce cart options
///////////////////////////////////////////////////////////////
add_action( 'wp_head' , 'custom_quantity_fields_css' );
function custom_quantity_fields_css(){
    ?>
    <style>
    .quantity input::-webkit-outer-spin-button,
    .quantity input::-webkit-inner-spin-button {
        display: none;
        margin: 0;
    }
    .quantity input.qty {
        appearance: textfield;
        -webkit-appearance: none;
        -moz-appearance: textfield;
    }
    </style>
    <?php
}
add_action( 'wp_footer' , 'custom_quantity_fields_script' );
function custom_quantity_fields_script(){
    ?>
    <script type='text/javascript'>
    jQuery( function( $ ) {
        if ( ! String.prototype.getDecimals ) {
            String.prototype.getDecimals = function() {
                var num = this,
                    match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
                if ( ! match ) {
                    return 0;
                }
                return Math.max( 0, ( match[1] ? match[1].length : 0 ) - ( match[2] ? +match[2] : 0 ) );
            }
        }
        // Quantity "plus" and "minus" buttons
        $( document.body ).on( 'click', '.plus, .minus', function() {
            var $qty        = $( this ).closest( '.quantity' ).find( '.qty'),
                currentVal  = parseFloat( $qty.val() ),
                max         = parseFloat( $qty.attr( 'max' ) ),
                min         = parseFloat( $qty.attr( 'min' ) ),
                step        = $qty.attr( 'step' );

            // Format values
            if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
            if ( max === '' || max === 'NaN' ) max = '';
            if ( min === '' || min === 'NaN' ) min = 0;
            if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = 1;

            // Change the value
            if ( $( this ).is( '.plus' ) ) {
                if ( max && ( currentVal >= max ) ) {
                    $qty.val( max );
                } else {
                    $qty.val( ( currentVal + parseFloat( step )).toFixed( step.getDecimals() ) );
                }
            } else {
                if ( min && ( currentVal <= min ) ) {
                    $qty.val( min );
                } else if ( currentVal > 0 ) {
                    $qty.val( ( currentVal - parseFloat( step )).toFixed( step.getDecimals() ) );
                }
            }

            // Trigger change event
            $qty.trigger( 'change' );
        });
    });
    </script>
    <?php
}
///////////////////////////////////////////////////////////////
//// Add custom continue shopping cutton to cart page
//////////////////////////////////////////////////////////////
add_action( 'woocommerce_before_cart_collaterals', 'continue_shopping_button', 31 );
function continue_shopping_button() {
    if ( wp_get_referer() ) echo '<i class="fas fa-chevron-left"></i><a class="button continue" href="' . wp_get_referer() . '">Continue Shopping</a>';
}
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
