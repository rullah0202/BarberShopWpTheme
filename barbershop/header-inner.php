<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- banner -->

    <header id="banner" class="<?php echo get_theme_mod('rahmat_menu_position'); ?>">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('rahmat_logo');?>" class="logo"/></a> 
                    <!-- Side Navigation -->

                    <?php wp_nav_menu(array('theme_location' =>'right-side-nav','menu_id' => 'sideNav','fallback_cb' =>false)); ?>
    <div id="menuBtn" class="<?php echo get_theme_mod('rahmat_menu_position'); ?>">
        <img src="<?php echo get_template_directory_uri();?>/images/menu.png" id="menu">
    </div>
    </header>