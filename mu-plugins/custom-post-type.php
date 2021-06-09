<?php
  // Program Post Type
  function register_specials_post_type() {
    // register_post_type('Specials', $eventArgs = array(
    //   'show_in_rest' => true,
    //   'public' => true,
    //   'has_archive' => true,
    //   'supports' => array(
    //     'title', // post title
    //     'editor', // post content
    //     'author', // post author
    //     'thumbnail', // featured images
    //     'post-formats', // post formats
    //   ),
    //   'rewrite' => array(
    //     'slug' => 'specials',
    //   ),
    //   'labels' => array(
    //     'name' => 'Specials',
    //     'add_new_item' => 'Add Special',
    //     'edit_item' => 'Edit Special',
    //     'all_items' => 'All Specials',
    //     'singular_name' => 'Special',

    //   ),
    //   'menu_icon' => 'dashicons-tickets-alt',
    // ));

      /**
 * Post Type: Specials.
 */

  $labels = [
    "name" => __( "Specials", "insightcustom" ),
    "singular_name" => __( "Special", "insightcustom" ),
    "menu_name" => __( "Specials", "insightcustom" ),
    "all_items" => __( "All Specials", "insightcustom" ),
    "add_new" => __( "Add New Special", "insightcustom" ),
    "add_new_item" => __( "Add New Special", "insightcustom" ),
    "edit_item" => __( "Edit Special", "insightcustom" ),
    "new_item" => __( "New Special", "insightcustom" ),
    "view_item" => __( "View Special", "insightcustom" ),
    "view_items" => __( "View Specials", "insightcustom" ),
    "search_items" => __( "Search Specials", "insightcustom" ),
    "not_found" => __( "No Specials Found", "insightcustom" ),
    "not_found_in_trash" => __( "No Specials Found in Trash", "insightcustom" ),
    "archives" => __( "Specials Archive", "insightcustom" ),
  ];

  $args = [
    "label" => __( "Specials", "insightcustom" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => "specials",
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "specials", "with_front" => true ],
    "query_var" => true,
    "supports" => [ "title", "editor", "thumbnail" ],
    "taxonomies" => [ "category" ],
    "show_in_graphql" => false,
  ];

  register_post_type( "Specials", $args );

  }

  add_action('init', 'register_specials_post_type');
?>

