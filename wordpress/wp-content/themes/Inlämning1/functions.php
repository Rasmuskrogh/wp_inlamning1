<?php 

/* inkluderar allt från enqueue filen under includes */
include( get_theme_file_path("/includes/enqueue.php"));


add_action("wp_enqueue_scripts", "rka_enqueue");

/* lägger till support för menyer*/
add_theme_support('menus');
/*registrerar de olika navmenyerna på sidan */
register_nav_menus(
array(
    'main-menu' => 'Main Menu',
    'undersida-menu' => 'Undersida Menu',
    'blogg-pages' => 'Blogg Sidor',
    'blogg-categories' => 'Blogg Kategorier'
    )
 );
/* lägger till support för bilder */
  add_theme_support( 'post-thumbnails' );
?>