<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
  <title>
    <?php wp_title( ' - ', true, 'right' ); ?><?php bloginfo('name'); ?>
  </title>

  <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/application.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme.js"></script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(get_slug()); ?>>
  <div id="bg-fade"></div>

  <div id="navbar">
    <?php wp_nav_menu(array('container_class' => 'menu', 'theme_location' => 'header-menu')); ?>
  </div>

  <header>
    <h1 id="logo">
      <a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a>
    </h1>


    <?php if (title()) : ?>
      <h1 id="title"><?php echo title(); ?></h1>
    <?php endif; ?>
  </header>
