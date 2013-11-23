<?php
// functions.php isn't a template, but defines your theme's configuration and allows you to add custom functions you can use other places

require_once('vernacular/bootstrap.php');

function register_custom_post_types() {
  $event = new VernacularPostType('event');
  $event->register();

  $class = new VernacularPostType('class');
  $class->labels('Class', 'Classes');
  $class->register();
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

// Let WordPress know we can use the menu system and Featured Images
if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'nav-menus' );
  add_theme_support( 'post-thumbnails' );
}

// Register menus
add_action( 'init', 'apprentice_register_menus' );
function apprentice_register_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}

?>
