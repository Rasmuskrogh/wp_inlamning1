<?php 

//setup

//includes
include( get_theme_file_path("/includes/enqueue.php"));

//hooks
add_action("wp_enqueue_scripts", "rka_enqueue");

//övrigt


function wpb_custom_new_menu() {
    register_nav_menu('main-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );

  add_theme_support( 'post-thumbnails' );
?>