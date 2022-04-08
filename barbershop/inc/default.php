<?php

function barber_theme_support(){
  // Theme Title
  add_theme_support('title-tag');
  //Menus
  add_theme_support('menus');
  // Custom Background
  add_theme_support('custom-background');
  // Custom Header
  add_theme_support('custom-header');

  // Post Thumbnail
  add_theme_support( 'post-thumbnails' );
  // Post Formats
  add_theme_support('post-formats',array('link','audio','video','gallery'));
  // html5
  add_theme_support('html5',array('comment-form','comment-list','search-form','gallery'));
  // // custom Logo
  // add_theme_support( 'custom-logo', array(

  //   'height'        =>'100',
  //   'width'         =>'100',
  //   'flex-height'   =>true,
  //   'flex-width'    =>true
  // ) );
}
add_action('after_setup_theme', 'barber_theme_support');

  // Excerpt to 40 word

  function rahmat_excerpt_more(){
    return '<br><a href="'. get_permalink() .'" class="read-more">' . 'Read More' .'</a>';
  }

  add_filter( 'excerpt_more', 'rahmat_excerpt_more');

  function rahmat_excerpt_length(){
    return 40;
  }

  add_filter('excerpt_length','rahmat_excerpt_length');



