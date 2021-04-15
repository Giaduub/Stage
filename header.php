<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Ubuntu?preview.text_type=custom">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>La couveuse des innovateurs</title>
  </head>
  <body>

 
  <nav class="navbar-custom cl-effect-1">
  <?= the_custom_logo(); ?>
  <div class="push-left-custom">

    <button id="menu-toggler-custom" data-class="menu-active-custom" class="hamburger-custom">
      <span class="hamburger-line hamburger-line-top"></span>
      <span class="hamburger-line hamburger-line-middle"></span>
      <span class="hamburger-line hamburger-line-bottom"></span>
    </button>

    <!--  Menu compatible with wp_nav_menu  -->
    <ul id="primary-menu" class="menu nav-menu">
      <li class="logo-none">
      <?= the_custom_logo(); ?>
      </li>
    <?php
          wp_nav_menu( array(
          'container' =>'',
          'class' =>'',
          'theme_location' => '',
          'menu_id' => '',
          'echo' => true,
          'before' => '',
          'after' => '',
          'link_before' => '',
          'link_after' => '',
          'depth' => 0,
          'items_wrap' => '%3$s',
          'walker' => '')
          );
          ?>
    </ul>


  </div>
</nav>

