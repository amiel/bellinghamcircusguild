<?php
class VernacularQuery{
  public $default_post_type = 'post';

  public function __construct($options) {
    $this->options = $options;
    if (!$this->options['post_type'])
      $this->options['post_type'] = $this->default_post_type;
  }

  // public function random_posts($count = 3){
  //   $options = array('posts_per_page' => $count, 'orderby' => 'rand');
  //   return $this->query($options);
  // }

  // public function recent_posts($count = 3){
  //   $this->add_option('posts_per_page', $count);
  //   return $this->query();
  // }

  public function query(){
    $query = new WP_Query($this->options);
    return $query->get_posts();
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
