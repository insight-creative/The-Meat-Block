<?php
// This theme uses wp_nav_menu() in multiple locations.
  register_nav_menus( array(
    'main-menu' => esc_html__( 'Main Menu', 'insightCustom' ),
    'SecondaryMenu' => esc_html__( 'Secondary Menu', 'insightCustom' ),
    'footer-menu' => esc_html__( 'Footer Menu', 'insightCustom' ),
    'FoodMenu' => esc_html__( 'Food Menu', 'insightCustom' ),
    'ServicesMenu' => esc_html__( 'Services Menu', 'insightCustom' ),
    'policies-menu' => esc_html__( 'Policies Menu', 'insightCustom' )
  ) );
?>
