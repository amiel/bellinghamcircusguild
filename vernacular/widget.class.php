<?php
class VernacularWidget extends WP_Widget {
  public $id, $title;
  public $height = 400;
  public $width = 300;
  public $description = '-';

  public $form_instance;

  public function setup(){
    $widget_ops = array( 'classname' => $this->id, 'description' => $this->description );
    $control_ops = array( 'width' => $this->width, 'height' => $this->height, 'id_base' => $this->id );
    $this->WP_Widget( $this->id, $this->title, $widget_ops, $control_ops );
  }

  public function render_template($args, $instance, $template){
    extract($args);
    extract($instance);

    require(get_stylesheet_directory()."/widgets/$template");
  }

  public function update( $data, $instance ){
    foreach($data as $key => $value){
      $instance[$key] = $data[$key];
    }

    return $instance;
  }

  public function setup_form($instance){
    $this->form_instance = wp_parse_args( (array) $instance, $defaults );
  }

  private function option($value, $label, $selected_value){
    $attributes = false;

    if(is_array($selected_value)){
      if(in_array($value, $selected_value)){
        $attributes .= 'selected';
      }
    } else {
      if($selected_value == $value){
        $attributes .= 'selected';
      }
    }

    $attributes .= build_attributes( array( 'value' => $value ) );

    return build_tag($label, $attributes, 'option');
  }

  private function value($value, $default){
    if($value == ''){
      return $default;
    } else {
      return $value;
    }
  }

  private function label($id, $title){
    return build_tag(
      $title,
      build_attributes( array( 'for' => $this->get_field_id( $id ) ) ),
      'label'
    );
  }

  private function field_meta($id, $class = '', $style = ''){
    $attributes = array(
      'id' => $this->get_field_id( $id ),
      'name' => $this->get_field_name( $id ),
      'class' => $class,
      'style' => $style
    );

    return build_attributes($attributes);
  }

  public function textfield($id, $title, $default = ''){
    $input = build_tag(
      null,
      $this->field_meta($id, 'widefat') .
      build_attributes(array(
        'type' => 'text',
        'value' => $this->value($this->form_instance[$id], $default)
      )),
      'input'
    );

    echo build_tag($this->label($id, $title) . $input);
  }

  public function textarea($id, $title, $default = ''){
    $input = build_tag(
      $this->value($this->form_instance[$id], $default),
      $this->field_meta($id, 'widefat', 'height: 5em;'),
      'textarea'
    );

    echo build_tag($this->label($id, $title) . $input);
  }

  public function dropdown($id, $title, $options){
    $parsed_options = '';
    foreach ($options as $value => $label):
      $parsed_options .= $this->option($value, $label, $this->form_instance[$id]);
    endforeach;

    $input = build_tag($parsed_options, $this->field_meta($id), 'select');

    echo build_tag($this->label($id, $title) . '<br>' . $input);
  }

  public function category($id = "category", $title = "Category"){
    $dropdown = wp_dropdown_categories(array(
      'id' => $this->get_field_id($id),
      'name' => $this->get_field_name( $id ),
      'selected' => $this->form_instance[$id],
      'hide_empty' => false,
      'show_count' => true,
      'hierarchical' => true,
      'show_option_all' => 'All Categories',
      'echo' => false
    ));

    echo build_tag($this->label($id, $title) . '<br>' . $dropdown);
  }

  public function tag($id = "tag", $title = "Tag"){
    $options = build_tag('&mdash;', build_attributes(array('value' => '')), 'option');

    $tags = get_tags();
    foreach ($tags as $tag){
      $options .= $this->option($tag->slug, $tag->name, $this->form_instance[$id]);
    }

    $dropdown = build_tag($options, $this->field_meta($id, $style = 'max-width: 98%;'), 'select');
    echo build_tag($this->label($id, $title) . '<br>' . $dropdown);
  }


  public function tags($id = "tags", $title = "Tags"){
    $options = '';

    $tags = get_tags();
    foreach ($tags as $tag){
      $options .= $this->option($tag->slug, $tag->name, $this->form_instance[$id]);
    }

    $attributes = $this->field_meta($id, $style = 'max-width: 98%;') . ' multiple';
    $dropdown = build_tag($options, $attributes, 'select');
    echo build_tag($this->label($id, $title) . '<br>' . $dropdown);
  }
}
