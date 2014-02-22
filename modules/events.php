<?php

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

function event_cmp($a, $b) {
  // This is very inefficient (I think it'll make a lot of db queries), but oh well...
  $date_a = get_field('start_on', $a->ID);
  $date_b = get_field('start_on', $b->ID);
  return strcmp($date_a, $date_b);
}

function events_query() {
  $meta_query = array(
    'relation' => 'OR',
    array(
      'key' => 'start_on',
      'value' => date('Ymd'),
      'type' => 'numeric',
      'compare' => '>='
    ),
    array(
      'key' => 'end_on',
      'value' => date('Ymd'),
      'type' => 'numeric',
      'compare' => '>='
    ),
  );

  return _query()->post_type('event')->meta_query($meta_query);
}


function events() {
  $posts = events_query()->posts();
  // Custom sort because ordering by meta_value_num screws up the meta_query
  usort($posts, 'event_cmp');
  return $posts;
}
