<?php 

/* 
 * Plugin Name: My Login Page Plugin
 * Description: My first plugin that customises the appeareance of the default WordPress login page
 * Version: 0.1
 * Author: Sy Barker
*/


/**
 *Enqueues the plugin styles
**/

function my_login_page_plugin_scripts () {
  wp_enqueue_style( 'my-login-page-styles', plugin_dir_url( __FILE__ ) . 'styles.css', [], filemtime( plugin_dir_path( __FILE__ ) . 'styles.css' ) );
}

add_action( 'login_enqueue_scripts', 'my_login_page_plugin_scripts' );