<div class="search-form-wrap page-width">
  <?php get_search_form(); ?>
</div>
<div class="masthead-inner page-width white-text">
  <div class="menu-button-wrap" aria-label="mobile menu toggle button" tabindex="0">
    <button class="hamburger hamburger--collapse" type="button" aria-label="Mobile menu button" aria-expanded="false">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
  </div>
  <div id="hours">
    <?php echo get_theme_mod('hours'); ?>
  </div>
  <div id="site-logo">
    <a href="<?=site_url()?>">
      <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        if ( function_exists( 'the_custom_logo' ) ) {
         the_custom_logo();
        } else {
            echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
        }
      ?>
    </a>
  </div>
  <div id="mini-nav">
    <div class="cart-wrapper center-aligned-container">
      <a href="/shop" id="shop-button" class="btn animated-button primary-button">Shop Now</a>
      <?php global $woocommerce; ?>
       <a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>"
      title="<?php _e('Cart View', 'woothemes'); ?>">
      <?php echo sprintf(_n('%d', $woocommerce->cart->cart_contents_count, 'woothemes'),
       $woocommerce->cart->cart_contents_count);?>  -
      <?php echo $woocommerce->cart->get_cart_total(); ?>
      </a>
    </div>
    <?php wp_nav_menu( array( 'theme_location' => 'SecondaryMenu', 'menu_id' => 'SecondaryMenu' ) );
    ?>
  </div>
</div>
