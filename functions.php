<?php

require_once('vernacular/bootstrap.php');

function register_custom_post_types() {
  $event = new VernacularPostType('event');
  $event->slug = 'events';
  $event->register();

  $class = new VernacularPostType('workshop');
  $class->slug = 'classes';
  $class->labels('Class', 'Classes');
  $class->register();
}
add_action('init', 'register_custom_post_types');

function display_date($date_string) {
  $date = strtotime($date_string);
  $month = '<span class="month">' . date("M", $date) . '</span> ';
  $day = '<span class="day">' . date("j", $date) . '</span>';
  echo $month . $day;
}

function the_event_date() {
  $end = get_field('end_on');
  $is_range = !empty($end);
  $class = ($is_range) ? 'range' : '';
  echo "<time class='$class'>";
  display_date(get_field('start_on'));
  if ($is_range) {
    echo ' <span class="separator">-</span> ';
    display_date($end);
  }
  echo "</time>";
}

function get_slug() {
  $slug = basename(get_permalink());
  do_action('before_slug', $slug);
  $slug = apply_filters('slug_filter', $slug);
  do_action('after_slug', $slug);
  return $slug;
}


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
