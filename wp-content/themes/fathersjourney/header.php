<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/mnt_favicon.ico" type="image/x-icon">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?> | Web Developer, father, traveler, photographer, and blogger. Portfolio, php, laravel, wordpress development, and javascript.
    </title>
    <?php wp_head(); ?>
  </head>

  <body>
    <div class="container">
    <header class="row no-max pad main">

      <div class="top-head">
        <div class="title-bar" data-responsive-toggle="collapse-menu" data-hide-for="medium">
          <button class="menu-icon" type="button" data-toggle></button>
          <div class="title-bar-title">Menu</div>
        </div>
        <h1 class="site-name"><a  href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
      </div>
      <div class="nav-head">
        <nav class="main-nav">
   
          <?php 

            $defaults = array(
              'container' => false,
              'theme_location' => 'primary-menu',
              'menu_class' => 'no-bullet',
              'menu_id' => 'collapse-menu'
            );

            wp_nav_menu( $defaults );

          ?>

        </nav>
      </div>

    </header>
    