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
    <?php the_field('store_hours', 'option'); ?>
  </div>
  <div id="siteLogo">
    <a href="https://woocommerce-154794-977005.cloudwaysapps.com/">
      <?php
        $image = get_field('store_logo', 'option');
        $imageID = $image['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </a>
  </div>
  <div id="miniNav">
    <div id="cartWrapper" class="centerAlignedContainer">
      <a href="#" id="shopButton" class="animated-button primaryButton">SHOP NOW</a>
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
