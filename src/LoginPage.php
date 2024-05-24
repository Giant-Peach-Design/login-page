<?php

namespace Giantpeach\Schnapps\LoginPage;

class LoginPage
{
  public function __construct()
  {

    add_action( 'login_enqueue_scripts', function() {
      wp_enqueue_style( 'gp-loginpage', plugin_dir_path( __FILE__ ) . '/admin/login.css' );
      wp_enqueue_script( 'gp-loginpage', plugin_dir_path( __FILE__ ) . '/admin/login.js' );
    });

    add_filter( 'login_headerurl', function() {
      return 'https://giantpeach.agency';
    });
  }
}
