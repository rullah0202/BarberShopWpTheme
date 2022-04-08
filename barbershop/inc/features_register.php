<?php

register_post_type('features', array(

  'labels'    => array(
    'name'                => 'Features',
    'all_items'           => 'All Features',
    'add_new'             => 'Add New Feature',
    'featured_image'      => 'Feature Image',
    'set_featured_image'  => 'Set Features Image',
    'remove_featured_image'  => 'Remove Features Image',
  ),
  'public'    => true,
  'publicly_queryable'        => true,
  'exclude_from_search'       => true,
  'menu_icon'                 => 'dashicons-align-pull-right',
  'menu_position'             => 8,
  'has_archive'               => true,
  'hierarchial'               => true,
  'show_ui'                   => true,
  'capability_type'           => 'post',
  'rewrite'                   => array('slug' => 'feature'),
  'supports'        => array('title','thumbnail','custom-fields')
));