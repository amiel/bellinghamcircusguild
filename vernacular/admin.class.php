<?php

class VernacularAdminEditor{
  public $styles;

  public function __construct(){
    $this->styles = Array();
    add_filter('mce_buttons_2', array($this, 'register_style_dropdown'));
  }

  public function register_style_dropdown($buttons){
    array_shift($buttons);
    array_unshift($buttons, 'formatselect', 'styleselect');
    return $buttons;
  }

  public function add_style($title, $selector, $classes, $wrapper = true){
    $options = Array('title' => $title, 'selector' => $selector, 'classes' => $classes, 'wrapper' => $wrapper);
    array_push($this->styles, $options);
  }

  public function register(){
    add_filter('tiny_mce_before_init', array($this, 'register_styles'));
  }

  public function register_styles($settings){
    $settings['style_formats'] = json_encode($this->styles);
    return $settings;
  }
}

class_alias('VernacularAdminEditor', '_admin_editor');
