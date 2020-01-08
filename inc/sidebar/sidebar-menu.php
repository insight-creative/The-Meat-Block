<div class="sidebarMenu">
  <div id="services">
    <h3>Services</h3>
    <?php
        wp_nav_menu( array(
            'theme_location'    => 'ServicesMenu',
            'container_class'				=> 'servicesMenu',
            'depth'             => 4,
            'container'         => false,
            'items_wrap' 				=> '%3$s'
        ) );
      ?>
  </div>
  <div id="foods">
    <h3>Foods</h3>
    <?php
        wp_nav_menu( array(
            'theme_location'    => 'FoodMenu',
            'container_class'				=> 'foodMenu',
            'depth'             => 4,
            'container'         => false,
            'items_wrap' 				=> '%3$s'
        ) );
      ?>
  </div>
</div>
