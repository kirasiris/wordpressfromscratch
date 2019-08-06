<?php
  function wpb_customize_register($wp_customize){
    /*
    *
    * FRONT-PAGE : NEW SECTION
    *
    */
    $wp_customize->add_section('front_page', array(
      'title'         => __('Front Page', 'wordpressfromscratch'),
      'description'   =>  sprintf(__('Opciones para la front-page', 'wordpressfromscratch')),
      'priority'      =>  130
    ));
    /*
    *
    * FRONT-PAGE : HEADING-TEXT
    *
    */
    $wp_customize->add_setting('front_page_heading', array(
      'default'   =>  _x('Custom Heading Text','wordpressfromscratch'),
      'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('front_page_heading', array(
      'label'     =>  __('Front Heading', 'wordpressfromscratch'),
      'section'   =>  'front_page',
      'priority'  =>  1
    ));
    /*
    *
    * FRONT-PAGE : HEADING-PARAGRAPH-TEXT
    *
    */
    $wp_customize->add_setting('front_page_paragraph', array(
      'default'   =>  _x('Custom Paragraph Text','wordpressfromscratch'),
      'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('front_page_paragraph', array(
      'label'     =>  __('Front Paragraph', 'wordpressfromscratch'),
      'section'   =>  'front_page',
      'priority'  =>  2
    ));
    /*
    *
    * FRONT-PAGE : 1 ICON
    *
    */
    $wp_customize->add_setting('front_page_first_icon', array(
      'default'   =>  _x('Custom Icon','wordpressfromscratch'),
      'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('front_page_first_icon', array(
      'label'     =>  __('Custom First Icon', 'wordpressfromscratch'),
      'section'   =>  'front_page',
      'priority'  =>  3
    ));
    /*
    *
    * FRONT-PAGE : 1 ICON TEXT
    *
    */
    $wp_customize->add_setting('front_page_first_icon_text', array(
      'default'   =>  _x('Custom Paragraph Text','wordpressfromscratch'),
      'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('front_page_first_icon_text', array(
      'label'     =>  __('First Icon Text', 'wordpressfromscratch'),
      'section'   =>  'front_page',
      'priority'  =>  4
    ));
    /*
    *
    * FRONT-PAGE : 2 ICON
    *
    */
    $wp_customize->add_setting('front_page_second_icon', array(
      'default'   =>  _x('Custom Icon','wordpressfromscratch'),
      'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('front_page_second_icon', array(
      'label'     =>  __('Custom Second Icon', 'wordpressfromscratch'),
      'section'   =>  'front_page',
      'priority'  =>  5
    ));
    /*
    *
    * FRONT-PAGE : 2 ICON TEXT
    *
    */
    $wp_customize->add_setting('front_page_second_icon_text', array(
      'default'   =>  _x('Custom Paragraph Text','wordpressfromscratch'),
      'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('front_page_second_icon_text', array(
      'label'     =>  __('Second Icon Text', 'wordpressfromscratch'),
      'section'   =>  'front_page',
      'priority'  =>  6
    ));
    /*
    *
    * FRONT-PAGE : 3 ICON
    *
    */
    $wp_customize->add_setting('front_page_third_icon', array(
      'default'   =>  _x('Custom Icon','wordpressfromscratch'),
      'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('front_page_third_icon', array(
      'label'     =>  __('Custom Third Icon', 'wordpressfromscratch'),
      'section'   =>  'front_page',
      'priority'  =>  7
    ));
    /*
    *
    * FRONT-PAGE : 3 ICON TEXT
    *
    */
    $wp_customize->add_setting('front_page_third_icon_text', array(
      'default'   =>  _x('Custom Paragraph Text','wordpressfromscratch'),
      'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('front_page_third_icon_text', array(
      'label'     =>  __('Third Icon Text', 'wordpressfromscratch'),
      'section'   =>  'front_page',
      'priority'  =>  8
    ));
    /*
    *
    * FRONT-PAGE : BTN-TEXT
    *
    */
    $wp_customize->add_setting('front_btn_text', array(
      'default'   =>  _x('Read More','wordpressfromscratch'),
      'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('front_btn_text', array(
      'label'     =>  __('Text for Button', 'wordpressfromscratch'),
      'section'   =>  'front_page',
      'priority'  =>  9
    ));
    /*
    *
    * FRONT-PAGE : BTN-URL
    *
    */
    $wp_customize->add_setting('front_btn_url', array(
      'default'   =>  _x('#','wordpressfromscratch'),
      'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('front_btn_url', array(
      'label'     =>  __('Button URL', 'wordpressfromscratch'),
      'section'   =>  'front_page',
      'priority'  =>  10
    ));
    /*
    *
    * SHOWCASE THEME SELECTOR
    *
    */
    $wp_customize->add_setting('theme_selector', array(
      'default'   => _x('bootstrap', 'kevinurielfonsecav2'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'theme_selector', array(
    'label'       => __( 'Select Theme Name', 'kevinurielfonsecav2' ), //Admin-visible name of the control
    'description' => __( 'Using this option you can change the theme colors' ),
    'priority'    => 90, //Determines the order this control appears in for the specified section
    'section'     => 'title_tagline', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
    'type'        => 'select',
    'choices'     => array(
        'bootstrap'   =>  'Default',
        'cerulean'    =>  'Cerulean',
        'cosmo'       =>  'Cosmo',
        'cyborg'      =>  'Cyborg',
        'darkly'      =>  'Darkly',
        'flatly'      =>  'Flatly',
        'journal'     =>  'Journal',
        'litera'      =>  'Litera',
        'lumen'       =>  'Lumen',
        'lux'         =>  'Lux'
      )
    )));
    /*
    *
    * SHOWCASE THEME CONTAINER SELECTOR
    *
    */
    $wp_customize->add_setting('theme_container', array(
      'default'   => _x('container', 'kevinurielfonsecav2'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'theme_container', array(
    'label'       => __( 'Select Theme Container', 'kevinurielfonsecav2' ), //Admin-visible name of the control
    'description' => __( 'Using this option you can change the theme container' ),
    'priority'    => 90, //Determines the order this control appears in for the specified section
    'section'     => 'title_tagline', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
    'type'        => 'select',
    'choices'     => array(
        'container'          => 'Container',
        'container-fluid'    => 'Container Fluid',
      )
    )));
// end of customizer function //
  }
  add_action('customize_register', 'wpb_customize_register');
?>

