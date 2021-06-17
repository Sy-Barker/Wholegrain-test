<?php

  if ( ! isset( $content_width ) ) {
    $content_width = 660;
  }



  function wholegrain_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag'); 
    add_theme_support( 'post-thumbnails' ); 
  }
    
  add_action('after_setup_theme', 'wholegrain_setup');


  function wholegrain_setup_scripts() {
    /* add styles */
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/style.css' );
    
    /* add scripts */
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/scripts/jquery-3.4.1.min.js', array('jquery'), true );
  }

  add_action('wp_enqueue_scripts', 'wholegrain_setup_scripts');



  /*burger script*/

  function wpmu_burger_menu_scripts() {

    wp_enqueue_script( 'burger-menu-script', get_stylesheet_directory_uri() . '/scripts/burger-menu.js', array( 'jquery' ) );

  }
  add_action( 'wp_enqueue_scripts', 'wpmu_burger_menu_scripts' );




  /** Register menu */
  function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );
 

  /* Flush */

  remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

?>