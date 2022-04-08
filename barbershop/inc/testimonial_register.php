<?php

register_post_type('testimonial', array(
  'labels'    => array(
    'name'                => 'Testimonial',
    'all_items'           => 'All Testimonials',
    'add_new'             => 'Add New Testimonial',
    'featured_image'      => 'Testimonial Image',
    'set_featured_image'  => 'Set Testimonial Image',
    'remove_featured_image'  => 'Remove Testimonial Image',
  ),
  'public'    => true,
  'publicly_queryable'        => true,
  'exclude_from_search'       => true,
  'menu_icon'                 => 'dashicons-welcome-learn-more',
  'menu_position'             => 7,
  'has_archive'               => true,
  'hierarchial'               => true,
  'show_ui'                   => true,
  'capability_type'           => 'post',
  'rewrite'                   => array('slug' => 'testimonial'),
  'supports'        => array('title','thumbnail','editor','excerpt','custom-fields')
));