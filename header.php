<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
  <title>
    <?php wp_title( ' - ', true, 'right' ); ?><?php bloginfo('name'); ?>
  </title>

  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/application.css">

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(get_slug()); ?>>
  <div id="navbar">
    <?php wp_nav_menu(array('container_class' => 'menu', 'theme_location' => 'header-menu')); ?>
  </div>

  <h1 id="logo">
    <a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a>
  </h1>
