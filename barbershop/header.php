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

    <header id="banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), #009688), url(<?php header_image(); ?>); background-size: cover; background-position: center; height: 100vh;" class="<?php echo get_theme_mod('rahmat_menu_position'); ?>">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('rahmat_logo');?>" class="logo"/></a> 
        <div class="banner-text">
            <h1><?php echo esc_html(get_theme_mod('header_text_main')); ?></h1>
            <p><?php echo esc_html(get_theme_mod('header_text_sub')); ?></p>
            <div class="banner-btn">
                <a href="#"><span></span>Find Out</a>
                <a href="#"><span></span>More</a>
            </div>
        </div>
                    <!-- Side Navigation -->

                    <?php wp_nav_menu(array('theme_location' =>'right-side-nav','menu_id' => 'sideNav','fallback_cb' =>false)); ?>
    <div id="menuBtn" class="<?php echo get_theme_mod('rahmat_menu_position'); ?>">
        <img src="<?php echo get_template_directory_uri();?>/images/menu.png" id="menu">
    </div>
    </header>
