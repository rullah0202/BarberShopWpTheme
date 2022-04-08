<?php

// Sidebar Register Function

function rahmat_all_widgets_register(){
  
  register_sidebar(array(
    'name'            => __('Sidebar Widget Area','rahmatullah'),
    'id'              => 'sidebar-1',
    'description'     => __('Appears in the sidebar in blog page and others page','rahmatullah'),
    'before_widget'   => '<div>',
    'after_widget'    =>  '</div>',
    'before_title'    => '<h2>',
    'after_title'     =>  '</h2>',
  ));

  register_sidebar(array(
    'name'            => __('Footer 1 Widget Area','rahmatullah'),
    'id'              => 'footer-1',
    'description'     => __('Appears in the footer in blog page and others page','rahmatullah'),
    'before_widget'   => '<div>',
    'after_widget'    =>  '</div>',
    'before_title'    => '<h1>',
    'after_title'     =>  '</h1>',
  ));

  register_sidebar(array(
    'name'            => __('Footer 2 Widget Area','rahmatullah'),
    'id'              => 'footer-2',
    'description'     => __('Appears in the footer in blog page and others page','rahmatullah'),
    'before_widget'   => '<div>',
    'after_widget'    =>  '</div>',
    'before_title'    => '<h1>',
    'after_title'     =>  '</h1>',
  ));

  register_sidebar(array(
    'name'            => __('Footer 3 Widget Area','rahmatullah'),
    'id'              => 'footer-3',
    'description'     => __('Appears in the footer in blog page and others page','rahmatullah'),
    'before_widget'   => '<div>',
    'after_widget'    =>  '</div>',
    'before_title'    => '<h2>',
    'after_title'     =>  '</h2>',
  ));
}

add_action( 'widgets_init', 'rahmat_all_widgets_register' );

?>