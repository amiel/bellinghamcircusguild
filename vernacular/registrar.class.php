<?php
class VernacularRegistrar{
  public $name, $singular_name, $klass, $joins;

  public function __construct($klass){
    $this->klass = $klass;
  }

  public function joins(){
    return arrayize($this->joins);
  }

  public function singular_name(){
    if($this->singular_name){
      return $this->singular_name;
    } else{
      return ucfirst($this->klass);
    }
  }

  public function name(){
    if($this->name){
      return $this->name;
    } else{
      return ucfirst($this->klass).'s';
    }
  }

  public function labels($singular, $plural){
    $this->singular_name = $singular;
    $this->name = $plural;

    return $this;
  }

  private function arrayize($input){
    if(!is_array($input)){
      return split(',', $input);
    } else{
      return $input;
    }
  }
}

class VernacularTaxonomy extends VernacularRegistrar{
  public $hierarchical = false;
  public $joins = 'page,post';

  function register(){
    register_taxonomy(
      $this->klass,
      $this->joins(),
      array(
        'hierarchical' => $this->hierarchical,
        'labels' => array(
          'name' => $this->name(),
          'singular_name' => $this->singular_name(),
          'add_new_item' => 'Add New '. $this->singular_name(),
          'new_item_name' => 'New '.$this->singular_name()
        )
      )
    );
  }
}
class_alias('VernacularTaxonomy', '_taxonomy');

class VernacularPostType extends VernacularRegistrar{
  public $public = true;
  public $has_archive = true;
  public $joins = 'post_tag,category';

  function register(){
    register_post_type(
      $this->klass,
      array(
        'labels' => array(
          'name' => $this->name(),
          'singular_name' => $this->singular_name(),
          'add_new_item' => 'Add '.$this->singular_name()
        ),
      'public' => $this->public,
      'has_archive' => $this->has_archive,
      'taxonomies' => $this->joins()
      )
    );
  }
}
class_alias('VernacularPostType', '_posttype');


