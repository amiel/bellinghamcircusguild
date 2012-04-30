<?php
// functions.php isn't a template, but defines your theme's configuration and allows you to add custom functions you can use other places

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


// Remove rel attribute from the category list (fixes HTML5 validation)
function remove_category_list_rel($output){
  return str_replace(' rel="category"', '', $output);
}
add_filter('wp_list_categories', 'remove_category_list_rel');
add_filter('the_category', 'remove_category_list_rel');
?>