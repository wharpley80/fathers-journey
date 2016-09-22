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
  <body <?php body_class(); ?>> 
    <div class="top-bar">
      <div class="container">
        <div class="top-bar-title">
          <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
            <button class="menu-icon dark" type="button" data-toggle></button>
          </span>
          <strong><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></strong>
        </div>
        <div id="responsive-menu">
          <div class="top-bar-left">

            <?php 
              $defaults = array(
                'container' => false,
                'theme_location' => 'primary-menu',
                'menu_class' => 'no-bullet',
                'menu_class' => 'dropdown',
                'menu_id' => 'responsive-menu'
              );

              wp_nav_menu( $defaults );
            ?>

          </div>
          <div class="top-bar-right">

            <?php get_search_form(); ?>

          </div>
        </div>
      </div>
    </div>
          