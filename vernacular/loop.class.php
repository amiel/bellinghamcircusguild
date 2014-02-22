<?php
class VernacularQuery{
  public $default_post_type = 'post';

  public function __construct($options) {
    $this->options = $options;
    if (!$this->options['post_type'])
      $this->options['post_type'] = $this->default_post_type;
  }

  private function query(){
    return new WP_Query($this->options);
  }

  public function posts() {
    return $this->query()->get_posts();
  }

  public function random_posts($count = 3){
    $query = $this->add_option('posts_per_page', $count)->add_option('orderby', 'rand');
    return $query->posts();
  }

  public function random_post() {
    $array = $this->random_posts(1);
    return $array[0];
  }

  public function has_posts() {
    return $this->query()->post_count > 0;
  }

  // Options
  public function post_type($post_type){
    return $this->add_option('post_type', $post_type);
  }

  public function tags($tags) {
    return $this->add_option('tag', $tags);
  }

  public function categories($categories){
    return $this->add_option('category_name', $categories);
  }

  public function limit($count) {
    return $this->add_option('posts_per_page', $count);
  }

  public function add_option($key, $value) {
    return new VernacularQuery(array_merge($this->options, array($key => $value)));
  }

  public function order($by, $direction) {
    return $this->add_option('orderby', $by)->add_option('order', $direction);
  }

  public function meta_query($query) {
    return $this->add_option('meta_query', $query);
  }

  public function custom_type_query($key, $compare, $value) {
    return $this->add_option('meta_key', $key)
      ->add_option('meta_value', $value)
      ->add_option('meta_compare', $compare);
  }
}
class_alias('VernacularQuery', '_query');

function VernacularQuery(){
  return new VernacularQuery(array());
}

function _query(){
  return new VernacularQuery(array());
}

class VernacularLoop{
  public function load($post){
    setup_postdata($post);
  }

  public function reset(){
    wp_reset_postdata();
  }
}

class_alias('VernacularLoop', '_loop');
