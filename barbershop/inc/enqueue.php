<?php
function rahmat_css_js_file_calling(){
  wp_enqueue_style( 'rahmat-style',get_stylesheet_uri());
  wp_enqueue_style( 'rahmat-google-fonts','https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
  wp_enqueue_style( 'rahmat-google-fonts_Kaushan','https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');
  wp_enqueue_style( 'rahmat-font-asesome','https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style( 'rahmat-custom', get_template_directory_uri().'/css/custom.css', array(), filemtime(get_template_directory().'/css/custom.css'), 'all');
  wp_enqueue_style( 'rahmat-responsive', get_template_directory_uri().'/css/responsive.css', array(),  filemtime(get_template_directory().'/css/responsive.css'), 'all');
  
  //jQuery

  wp_enqueue_script( 'jquery');
  wp_enqueue_script( 'rahmat-scroll','https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js',array(),'1.0.0','true');
  wp_enqueue_script( 'rahmat-main', get_template_directory_uri().'/js/main.js' , array(), filemtime(get_template_directory().'/js/main.js'), 'true' );
}
add_action('wp_enqueue_scripts','rahmat_css_js_file_calling');