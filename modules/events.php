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




function events_columns($columns) {
  $columns = array(
    'cb'    => '<input type="checkbox" />',
    'title'   => 'Title',
    'author'  =>  'Author',
    'start_on' => 'First date',
    'end_on' => 'Last date',
    'date'    =>  'Date',
  );
  return $columns;
}

function admin_format_date($date_string) {
  $date = strtotime($date_string);
  return date("M j, Y", $date);
}

function manage_event_columns($column) {
  global $post;
  if ($column == 'start_on') {
    echo admin_format_date(get_field('start_on', $post->ID));
  } elseif ($column == 'end_on') {
    echo admin_format_date(get_field('end_on', $post->ID));
  }
}

function event_sortable_columns($columns) {
  $columns['start_on'] = 'start_on';
  return $columns;
}

function handle_event_sorting($vars){
  if (isset($vars['orderby']) && 'start_on' == $vars['orderby']) {
    $vars = array_merge($vars, array(
      'meta_key' => 'start_on',
      'orderby'  => 'meta_value_num'
    ));
  }
  return $vars;
}
