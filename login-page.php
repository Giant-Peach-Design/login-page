<?php 
/*
* Plugin Name: GiantPeach Login Page
* Description: New look of the WordPress login page
* Author: Giantpeach Agency
* Plugin URI: https://giantpeach.agency
* Version: 1.0.0
*/


add_action( 'login_enqueue_scripts', function() {
  wp_enqueue_style( 'gp-loginpage', plugin_dir_url( __FILE__ ) . 'admin/login.css' );
  wp_enqueue_script( 'gp-loginpage', plugin_dir_url( __FILE__ ) . 'admin/login.js' );
});

add_filter( 'login_headerurl', function() {
  return 'https://giantpeach.agency';
});

?>