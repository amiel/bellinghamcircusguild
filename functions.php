<?php

require_once('vernacular/bootstrap.php');
require_once('modules/helpers.php');
require_once('modules/events.php');
require_once('modules/workshops.php');

function register_custom_post_types() {
  $event = new VernacularPostType('event');
  $event->register();

  $workshop = new VernacularPostType('workshop');
  $workshop->labels('Class', 'Classes');
  $workshop->register();
}
add_action('init', 'register_custom_post_types');


// Register a sidebar
if ( function_exists( 'register_sidebar' ) ) {
  register_sidebar( array(
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h4 class="title">',
    'after_title'   => '</h4>',
  ) );
}

if ( function_exists('add_theme_support') ) {
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
