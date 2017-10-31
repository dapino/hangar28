<?php

add_action( 'after_setup_theme', 'theme_setup' );

if ( ! function_exists( 'theme_setup' ) ) :

  function theme_setup() {


  add_filter( 'show_admin_bar', '__return_false' );

    


    function theme_customizer( $wp_customize ) {
      $wp_customize->add_section( 'procesos' , array(
        'title'       => __( 'Textos', 'd' ),
        'priority'    => 30,
        'description' => 'Textos de procesos',
      ) );

      $wp_customize->add_setting( 'titulo_inicio' , array(
        'capability' => 'edit_theme_options',
        'default' => 'inicio',
      ) );

      $wp_customize->add_setting( 'titulo_recibo' , array(
        'capability' => 'edit_theme_options',
        'default' => 'Recibo',
      ) );

      $wp_customize->add_setting( 'texto_recibo' , array(
        'capability' => 'edit_theme_options',
        'default' => '...',
      ) );

      $wp_customize->add_setting( 'titulo_lavado' , array(
        'capability' => 'edit_theme_options',
        'default' => 'lavado',
      ) );

      $wp_customize->add_setting( 'texto_lavado' , array(
        'capability' => 'edit_theme_options',
        'default' => '...',
      ) );

      $wp_customize->add_setting( 'titulo_shampoo' , array(
        'capability' => 'edit_theme_options',
        'default' => 'shampoo',
      ) );

      $wp_customize->add_setting( 'texto_shampoo' , array(
        'capability' => 'edit_theme_options',
        'default' => '...',
      ) );

      $wp_customize->add_setting( 'titulo_pintura' , array(
        'capability' => 'edit_theme_options',
        'default' => 'pintura',
      ) );

      $wp_customize->add_setting( 'texto_pintura' , array(
        'capability' => 'edit_theme_options',
        'default' => '...',
      ) );

      $wp_customize->add_setting( 'titulo_brillo' , array(
        'capability' => 'edit_theme_options',
        'default' => 'brillo',
      ) );

      $wp_customize->add_setting( 'texto_brillo' , array(
        'capability' => 'edit_theme_options',
        'default' => '...',
      ) );

      $wp_customize->add_setting( 'titulo_proteccion' , array(
        'capability' => 'edit_theme_options',
        'default' => 'proteccion',
      ) );

      $wp_customize->add_setting( 'texto_proteccion' , array(
        'capability' => 'edit_theme_options',
        'default' => '...',
      ) );

      $wp_customize->add_setting( 'titulo_interior' , array(
        'capability' => 'edit_theme_options',
        'default' => 'interior',
      ) );

      $wp_customize->add_setting( 'texto_interior' , array(
        'capability' => 'edit_theme_options',
        'default' => '...',
      ) );

      $wp_customize->add_setting( 'titulo_motor' , array(
        'capability' => 'edit_theme_options',
        'default' => 'motor',
      ) );

      $wp_customize->add_setting( 'texto_motor' , array(
        'capability' => 'edit_theme_options',
        'default' => '...',
      ) );

      $wp_customize->add_setting( 'titulo_reserva' , array(
        'capability' => 'edit_theme_options',
        'default' => 'reserva',
      ) );

      $wp_customize->add_setting( 'texto_boton' , array(
        'capability' => 'edit_theme_options',
        'default' => 'boton',
      ) );
  
      $wp_customize->add_control( 'texto_boton' , 
      array(
          'type'     => 'text',
          'section'  => 'procesos',
          'label'    => __( 'Texto boton', 'hangar_28' ),
          'description' => __( '' ),
        )
    );

      $wp_customize->add_control( 'titulo_inicio' , 
      array(
          'type'     => 'text',
          'section'  => 'procesos',
          'label'    => __( 'Título Sección inicial', 'hangar_28' ),
          'description' => __( '' ),
        )
    );
  
      $wp_customize->add_control( 'titulo_recibo' , 
          array(
              'type'     => 'text',
              'section'  => 'procesos',
              'label'    => __( 'Título sección Recibo', 'hangar_28' ),
              'description' => __( '' ),
          )
      );
      
      $wp_customize->add_control( 'texto_recibo' , 
          array(
              'type'     => 'textarea',
              'section'  => 'procesos',
              'label'    => __( 'Texto sección Recibo', 'hangar_28' ),
              'description' => __( '' ),
          )
      );
      
      $wp_customize->add_control( 'titulo_lavado' , 
          array(
              'type'     => 'text',
              'section'  => 'procesos',
              'label'    => __( 'Título sección Lavado', 'hangar_28' ),
              'description' => __( '' ),
          )
      );
      
      $wp_customize->add_control( 'texto_lavado' , 
          array(
              'type'     => 'textarea',
              'section'  => 'procesos',
              'label'    => __( 'Texto sección Lavado', 'hangar_28' ),
              'description' => __( '' ),
          )
      );
      
      $wp_customize->add_control( 'titulo_shampoo' , 
          array(
              'type'     => 'text',
              'section'  => 'procesos',
              'label'    => __( 'Título sección Shampoo', 'hangar_28' ),
              'description' => __( '' ),
          )
      );
      
      $wp_customize->add_control( 'texto_shampoo' , 
          array(
              'type'     => 'textarea',
              'section'  => 'procesos',
              'label'    => __( 'Texto sección Shampoo', 'hangar_28' ),
              'description' => __( '' ),
          )
      );
      
      $wp_customize->add_control( 'titulo_pintura' , 
          array(
              'type'     => 'text',
              'section'  => 'procesos',
              'label'    => __( 'Título sección Pintura', 'hangar_28' ),
              'description' => __( '' ),
          )
      );
      
      $wp_customize->add_control( 'texto_pintura' , 
          array(
              'type'     => 'textarea',
              'section'  => 'procesos',
              'label'    => __( 'Texto sección Pintura ', 'hangar_28' ),
              'description' => __( '' ),
          )
      );
      
      $wp_customize->add_control( 'titulo_brillo' , 
          array(
              'type'     => 'text',
              'section'  => 'procesos',
              'label'    => __( 'Título sección Brillo', 'hangar_28' ),
              'description' => __( '' ),
          )
      );
      
      $wp_customize->add_control( 'texto_brillo' , 
          array(
              'type'     => 'textarea',
              'section'  => 'procesos',
              'label'    => __( 'Texto sección Brillo ', 'hangar_28' ),
              'description' => __( '' ),
          )
      );
      
      $wp_customize->add_control( 'titulo_proteccion' , 
          array(
              'type'     => 'text',
              'section'  => 'procesos',
              'label'    => __( 'Título sección Protección', 'hangar_28' ),
              'description' => __( '' ),
          )
      );
      
      $wp_customize->add_control( 'texto_proteccion' , 
          array(
              'type'     => 'textarea',
              'section'  => 'procesos',
              'label'    => __( 'Texto sección Protección ', 'hangar_28' ),
              'description' => __( '' ),
          )
      );
      
      $wp_customize->add_control( 'titulo_interior' , 
          array(
              'type'     => 'text',
              'section'  => 'procesos',
              'label'    => __( 'Título sección Interior', 'hangar_28' ),
              'description' => __( '' ),
          )
      );
      
      $wp_customize->add_control( 'texto_interior' , 
          array(
              'type'     => 'textarea',
              'section'  => 'procesos',
              'label'    => __( 'Texto sección Interior', 'hangar_28' ),
              'description' => __( '' ),
          )
      );
      
      $wp_customize->add_control( 'titulo_motor' , 
          array(
              'type'     => 'text',
              'section'  => 'procesos',
              'label'    => __( 'Título sección Motor', 'hangar_28' ),
              'description' => __( '' ),
          )
      );
      
      $wp_customize->add_control( 'texto_motor' , 
          array(
              'type'     => 'textarea',
              'section'  => 'procesos',
              'label'    => __( 'Texto sección Motor', 'hangar_28' ),
              'description' => __( '' ),
          )
      );
      
      $wp_customize->add_control( 'titulo_reserva' , 
          array(
              'type'     => 'text',
              'section'  => 'procesos',
              'label'    => __( 'Título sección Reserva', 'hangar_28' ),
              'description' => __( '' ),
          )
      );
      


    }
    add_action( 'customize_register', 'theme_customizer' );

    /*menu*/
    function register_menu() {
      register_nav_menu('main-menu', __('Main menu'));
      register_nav_menu('footer-menu', __('Footer menu'));
    }
    add_action('init', 'register_menu');


    function head_cleanup() {
      // remove header links
      remove_action( 'wp_head', 'feed_links_extra', 3 );                    // Category Feeds
      remove_action( 'wp_head', 'feed_links', 2 );                          // Post and Comment Feeds
      remove_action( 'wp_head', 'rsd_link' );                               // EditURI link
      remove_action( 'wp_head', 'wlwmanifest_link' );                       // Windows Live Writer
      remove_action( 'wp_head', 'index_rel_link' );                         // index link
      remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );            // previous link
      remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );             // start link
      remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); // Links for Adjacent Posts
      remove_action( 'wp_head', 'wp_generator' );                           // WP version
    }
    // launching operation cleanup
    add_action('init', 'head_cleanup');
  }
endif;// theme_setup



/*styles*/
if( !function_exists("theme_styles") ) {
  function theme_styles() {
    wp_register_style( 'fira', 'https://fonts.googleapis.com/css?family=Fira+Sans', array(), '1.0', 'all' );
    wp_register_style( 'main-style', get_stylesheet_directory_uri() . '/main.css?' . time() , array('fira'), '1.0', 'all' );
    wp_enqueue_style( 'main-style' );
    }
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

/*scripts*/
if( !function_exists("theme_scripts") ) {
  function theme_scripts() {
    wp_register_script( 'main-script', get_stylesheet_directory_uri() . '/main.js', array(), '1.0', true );
    wp_enqueue_script( 'main-script' );
    }
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );



