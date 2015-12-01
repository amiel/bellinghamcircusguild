<?php

require_once('vernacular/bootstrap.php');
require_once('modules/helpers.php');
require_once('modules/events.php');
require_once('modules/workshops.php');
require_once('modules/acf.php');

function register_custom_post_types() {
  $event = new VernacularPostType('event');
  $event->register();

  $workshop = new VernacularPostType('workshop');
  $workshop->labels('Class', 'Classes');
  $workshop->register();
}
add_action('init', 'register_custom_post_types');

// All found in modules/events.php

add_filter("manage_edit-event_columns", "events_columns");
add_filter("manage_edit-event_sortable_columns", "event_sortable_columns" );
add_action('manage_event_posts_custom_column', 'manage_event_columns');
add_filter('request', 'handle_event_sorting');


if (function_exists('add_image_size')) {
  add_image_size('body-image', 600, 400);
  add_image_size('sidebar-image', 220);
}

// Register a sidebar
if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h4 class="title">',
    'after_title'   => '</h4>',
  ));
}

if (function_exists('add_theme_support')) {
  add_theme_support('nav-menus');
  add_theme_support('post-thumbnails');
}

// Register menus
add_action('init', 'register_menus');
function register_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}

?>
