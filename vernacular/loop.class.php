<?php
class VernacularQuery{
  public $tags;
  public $post_type = 'post';
  public $categories;

  public function random_posts($count = 3){
    $options = array('posts_per_page' => $count, 'orderby' => 'rand');
    return $this->query($options);
  }

  public function recent_posts($count = 3){
    $options = array('posts_per_page' => $count);
    return $this->query($options);
  }

  private function query($options){
    $options = array_merge(array(
      'post_type' => $this->post_type,
      'tag' => $this->tags,
      'category_name' => $this->categories
    ), $options);

    $query = new WP_Query($options);
    return $query->get_posts();
  }

  // Options
  public function post_type($post_type){
    $this->post_type = $post_type;
    return $this;
  }

  public function tags($tags){
    $this->tags = $tags;
    return $this;
  }

  public function categories($categories){
    $this->categories = $categories;
    return $this;
  }
}
class_alias('VernacularQuery', '_query');

function VernacularQuery(){
  return new VernacularQuery;
}

function _query(){
  return new VernacularQuery;
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
