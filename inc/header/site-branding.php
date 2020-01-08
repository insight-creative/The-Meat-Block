<div id="searchFormWrap" class="pageWidth">
  <?php get_search_form(); ?>
</div>
<div id="mastheadInner" class="pageWidth whiteText">
  <div class = "menuButtonWrap" aria-label="mobile menu toggle button" tabindex="0">
    <button class="hamburger hamburger--collapse" type="button" aria-label="Mobile menu button" aria-expanded="false">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
  </div>
  <div id="hours">
    <p>
      <strong>Hours:</strong> Monday - Friday 9:00 a.m. to 6:00 p.m.<br>
      Saturdays 9:00 a.m. to 5:00 p.m.
    </p>
  </div>
  <div id="siteLogo">
    <a href="<?=site_url()?>" id="siteLogo">
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
  <div id="miniNav">
    <div id="cartWrapper" class="centerAlignedContainer">
      <a href="/shop" id="shopButton" class="animated-button primaryButton">SHOP NOW</a>
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
