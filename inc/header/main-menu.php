<nav id="primary" class="site-navigation" role="navigation" aria-label="primary navigation">
  <div class="main-menu-wrapper">
    <ul class="main-menu menu">
    <?php
        wp_nav_menu( array(
            'theme_location'    => 'main-menu',
            'container_class'				=> 'main-menu',
            'depth'             => 4,
            'container'         => false,
            'items_wrap' 				=> '%3$s'
        ) );
        //add search form search-toggle
        //echo '<li id="site-search" class="search-toggle">' . get_search_form( false ) . '</li>';
      ?>
      <div id="searchWrap">
        <button id="search">
          <i class="fas fa-search"></i>
        </button>
      </div>
      <div id="mobileSearch">
        <?php get_search_form(); ?>
      </div>
      <button id="closeMenu">
        <i class="fas fa-chevron-up"></i><span id="close">Close</span><i class="fas fa-chevron-up"></i>
      </button>
    </ul>
  </div>
</nav><!-- #site-navigation -->
