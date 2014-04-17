<?php

function link_to($url) {
  return "<a href=\"$url\">$url</a>";
}


function mail_to($email) {
  return "<a href=\"mailto:$email\">$email</a>";
}

function instructor_website() {
  if (get_field('instructor_website')) {
    return link_to(get_field('instructor_website'));
  }
}

function instructor_email() {
  if (get_field('instructor_email')) {
    return mail_to(get_field('instructor_email'));
  }
}

function the_instructor_information() {
  $fields = array(
    get_field('instructor_name'),
    get_field('instructor_phone'),
    instructor_website(),
    instructor_email(),
  );

  echo join(', ', array_filter($fields));
}

function workshops_query() {
  return _query()->post_type('workshop');
}

function classes() {
  return workshops_query()->posts();
}

