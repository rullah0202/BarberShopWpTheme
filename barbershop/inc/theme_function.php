<?php

function rahmat_customizer_register($wp_customize){
  
  //Header Area Function
  $wp_customize->add_section('rahmat_header_area',array(
    'title' =>__('Header Area','rahmatullah'),
    'description' => 'If you interested to update your header area, you can do it here'
  ));

  $wp_customize->add_setting('rahmat_logo',array(
    'default' => get_bloginfo( 'template_directory') . '/images/logo.png',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'rahmat_logo',array(
    'label'=> 'Logo Upload',
    'setting'=> 'rahmat_logo',
    'section'=> 'rahmat_header_area',
    'description' => 'If you interested to change your Logo, you can do it here'
  )));

  //Menu Position Option
  $wp_customize->add_section('rahmat_menu_position',array(
    'title'=> __('Menu Position Option', 'rahmatullah'),
    'description'=> 'Change Your Menu Position.'
  ));

  $wp_customize->add_setting('rahmat_menu_position',array(
    'default' => 'right_menu'
  ));

  $wp_customize->add_control('rahmat_menu_position',array(
    'label'=> 'Menu_Position',
    'setting'=> 'rahmat_menu_position',
    'section'=> 'rahmat_menu_position',
    'description' => 'Change Your Menu Position.',
    'type' => 'radio',
    'choices'=> array(
      'right_menu'=>'Right Menu',
      'left_menu'=> 'Left Menu',
    )
  ));


  //Contact Area Function
  $wp_customize->add_section('rahmat_contact_area',array(
    'title' =>__('Contact Area','rahmatullah'),
    'description' => 'If you interested to update your contact area, you can do it here'
  ));

  $wp_customize->add_setting('contact_background',array(
    'default' => get_bloginfo( 'template_directory') . '/images/footer-img.png',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'contact_background',array(
    'label'=> 'Background Upload',
    'setting'=> 'contact_background',
    'section'=> 'rahmat_contact_area',
    'description' => 'If you interested to change your Contact Background, you can do it here'
  )));

                // Contact Area Heading
                $wp_customize->add_setting('Contact_Main_Heading',array(
                  'default' => 'Visit Shop Today',
                  'transport' => 'refresh'
                ));
              
                $wp_customize->add_control('Contact_Main_Heading',array(
                  'label'=> 'Add Contact Main Heading',
                  'setting'=> 'Contact_Main_Heading',
                  'section'=> 'rahmat_contact_area',
                  'type'   => 'text',
                ));

                // Contact Area Opening Hours
                $wp_customize->add_setting('Contact_Opening_Hours_One',array(
                  'default' => 'Monday to Friday - 9am to 9pm',
                  'transport' => 'refresh'
                ));
              
                $wp_customize->add_control('Contact_Opening_Hours_One',array(
                  'label'=> 'Add Opening Hours One',
                  'setting'=> 'Contact_Opening_Hours_One',
                  'section'=> 'rahmat_contact_area',
                  'type'   => 'text',
                ));

                $wp_customize->add_setting('Contact_Opening_Hours_Two',array(
                  'default' => 'Saturday and Sunday - 8am to 11pm',
                  'transport' => 'refresh'
                ));
              
                $wp_customize->add_control('Contact_Opening_Hours_Two',array(
                  'label'=> 'Add Opening Hours Two',
                  'setting'=> 'Contact_Opening_Hours_Two',
                  'section'=> 'rahmat_contact_area',
                  'type'   => 'text',
                ));
                // Contact Area Location, Email, Phone
                $wp_customize->add_setting('Contact_Location',array(
                  'default' => '#30 ABC Road, Brooklyn, NY',
                  'transport' => 'refresh'
                ));
              
                $wp_customize->add_control('Contact_Location',array(
                  'label'=> 'Add Shop Location',
                  'setting'=> 'Contact_Location',
                  'section'=> 'rahmat_contact_area',
                  'type'   => 'text',
                ));

                $wp_customize->add_setting('Contact_Email',array(
                  'default' => 'example@website.com',
                  'transport' => 'refresh'
                ));
              
                $wp_customize->add_control('Contact_Email',array(
                  'label'=> 'Add Email Address',
                  'setting'=> 'Contact_Email',
                  'section'=> 'rahmat_contact_area',
                  'type'   => 'text',
                ));

                $wp_customize->add_setting('Contact_Phone',array(
                  'default' => '+019-000-123',
                  'transport' => 'refresh'
                ));
              
                $wp_customize->add_control('Contact_Phone',array(
                  'label'=> 'Add Phone Number',
                  'setting'=> 'Contact_Phone',
                  'section'=> 'rahmat_contact_area',
                  'type'   => 'text',
                ));


  //Footer Copyright Area
  $wp_customize->add_section('rahmat_copyright',array(
    'title'=> __('Footer Copyright', 'rahmatullah'),
    'description'=> 'Change Your Footer Copyright.'
  ));

  $wp_customize->add_setting('rahmat_copyright',array(
    'default' => '&copy; Copyright 2022'
  ));

  $wp_customize->add_control('rahmat_copyright',array(
    'label'=> 'Copyright',
    'setting'=> 'rahmat_copyright',
    'section'=> 'rahmat_copyright',
    'description' => 'Change Your Copyright Text.',
  ));

  $wp_customize->add_setting('rahmat_copyright_weblink',array(
    'default' => 'https://rahmat.xyz'
  ));

  $wp_customize->add_control('rahmat_copyright_weblink',array(
    'label'=> 'Web Link',
    'setting'=> 'rahmat_copyright_weblink',
    'section'=> 'rahmat_copyright',
    'description' => 'Change Your Web Link.',
  ));

  
  //Footer Social Links
  $wp_customize->add_section('rahmat_social_links',array(
    'title'=> 'Social Media Icons',
    'Priority'=> '30'
  ));
  //Facebook
  $wp_customize->add_setting('social_fb_icon',array(
    'default' => 'https://www.facebook.com',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control('social_fb_icon',array(
    'label'=> 'Add Facebook Link',
    'setting'=> 'social_fb_icon',
    'section'=> 'rahmat_social_links',
    'type'   => 'text',
  ));
  //Instagram
  $wp_customize->add_setting('social_instagram_icon',array(
    'default' => 'https://www.instagram.com',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control('social_instagram_icon',array(
    'label'=> 'Add Instagram Link',
    'setting'=> 'social_instagram_icon',
    'section'=> 'rahmat_social_links',
    'type'   => 'text',
  ));

  //Twitter
  $wp_customize->add_setting('social_twitter_icon',array(
    'default' => 'https://www.twitter.com',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control('social_twitter_icon',array(
    'label'=> 'Add Instagram Link',
    'setting'=> 'social_twitter_icon',
    'section'=> 'rahmat_social_links',
    'type'   => 'text',
  ));
    //Youtube
    $wp_customize->add_setting('social_youtube_icon',array(
      'default' => 'https://www.youtube.com',
      'transport' => 'refresh'
    ));
  
    $wp_customize->add_control('social_youtube_icon',array(
      'label'=> 'Add Instagram Link',
      'setting'=> 'social_youtube_icon',
      'section'=> 'rahmat_social_links',
      'type'   => 'text',
    ));

    // Header Part

        // Header Text Main
        $wp_customize->add_setting('header_text_main',array(
          'default' => 'Hair Studio',
          'transport' => 'refresh'
        ));
      
        $wp_customize->add_control('header_text_main',array(
          'label'=> 'Add Header Main Text',
          'setting'=> 'header_text_main',
          'section'=> 'header_image',
          'type'   => 'text',
        ));

        // Header Text Sub
        $wp_customize->add_setting('header_text_sub',array(
          'default' => 'Style Your Hair Is Style Your Life',
          'transport' => 'refresh'
        ));
      
        $wp_customize->add_control('header_text_sub',array(
          'label'=> 'Add Header Sub Text',
          'setting'=> 'header_text_sub',
          'section'=> 'header_image',
          'type'   => 'text',
        ));
}
add_action( 'customize_register', 'rahmat_customizer_register' );