<?php 

//setup

//includes
include( get_theme_file_path("/includes/enqueue.php"));

//hooks
add_action("wp_enqueue_scripts", "rka_enqueue");

//övrigt

?>