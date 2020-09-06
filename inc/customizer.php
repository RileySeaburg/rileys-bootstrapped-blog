<?php
function wpb_customize_register($wp_customize){
    // Landing Page Section
    $wp_customize->add_section('Landing Page', array(
        'title' => __('Landing Page', 'rileysbootstrapblog'),
        'description' => sprintf(__('Options for Landing Page', 'rileysbootstrapblog')),
        'priority' => 130
    ));

     // Add Feature Image

     $wp_customize->add_setting( 'showcase_image', array(
        'default' => get_bloginfo('template_directory').'img/showcase.jpg',
        'type' => 'theme_mod'
        )
      );
   
      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'showcase_image', array(
        'label' => __( 'Featured Home Page Image', 'rileysbootstrapblog' ),
        'section' => 'Landing Page',
        'settings' => 'showcase_image',
        'priority' => 2
      ) ) );

    // Test Featured Audio

    $wp_customize->add_setting( 'audio_control', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
          )
      );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'audio_control', array(
        'label' => _( 'Featured Home Page Recording'),
        'section' => 'Landing Page',
        'mime_type' => 'audio',
      ) ) );

    // Landing Page Heading

    $wp_customize->add_setting('Heading', array(
        'default' => _x('Welcome to my blog.', 'rileysbootstrapblog'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('Heading', array(
        'label' => __('Heading', 'rileysbootstrapblog'),
        'section' => 'Landing Page', 
        'priority' => 1
    ));
        // Landpage subheading
    $wp_customize->add_setting('Subtitle', array(
        'default' => _x('Subtitle text here', 'rileysbootstrapblog'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('Subtitle', array(
        'label' => __('Text', 'rileysbootstrapblog'),
        'section' => 'Landing Page', 
        'priority' => 2
    ));
    // Add Button Text
    $wp_customize->add_setting('cta_text', array(
        'default' => _x('https://rileyseaburg.com', 'rileysbootstrapblog'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('cta_text', array(
        'label' => __('Button Text', 'rileysbootstrapblog'),
        'section' => 'Landing Page', 
        'priority' => 3
    ));
    // Add button link
    $wp_customize->add_setting('cta_url', array(
        'default' => _x('Read More', 'rileysbootstrapblog'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('cta_url', array(
        'label' => __('Button Link', 'rileysbootstrapblog'),
        'section' => 'Landing Page', 
        'priority' => 4
    ));
}

add_action('customize_register', 'wpb_customize_register');