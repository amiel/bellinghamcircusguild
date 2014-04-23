<?php

function title($t = null) {
  global $aTitle;
  if ($t) $aTitle = $t;
  return $aTitle;
}

function get_slug() {
  $slug = basename(get_permalink());
  do_action('before_slug', $slug);
  $slug = apply_filters('slug_filter', $slug);
  do_action('after_slug', $slug);
  return $slug;
}



function link_to_the_field($field, $url_field) {
  $url = get_field($url_field);
  if ($url) echo "<a href=\"$url\">";
  the_field($field);
  if ($url) echo "</a>";
}




