<?php

register_post_type('service', array(

  'labels'    => array(
    'name'                => 'Service',
    'all_items'           => 'All Services',
    'add_new'             => 'Add New Service',
    'featured_image'      => 'Service Image',
    'set_featured_image'  => 'Set Service Image',
    'remove_featured_image'  => 'Remove Service Image',
  ),
  'public'    => true,
  'publicly_queryable'        => true,
  'exclude_from_search'       => true,
  'menu_icon'                 => 'dashicons-networking',
  'menu_position'             => 6,
  'has_archive'               => true,
  'hierarchial'               => true,
  'show_ui'                   => true,
  'capability_type'           => 'post',
  'rewrite'                   => array('slug' => 'service'),
  'supports'        => array('title','thumbnail','editor','excerpt')
));