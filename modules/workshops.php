<?php

function workshops_query() {
  return _query()->post_type('event')->meta_query($meta_query);
}

function classes() {
  return array();
}
