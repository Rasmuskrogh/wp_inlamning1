<?php

/* registerar och enquear css och js*/
function rka_enqueue() {

   $uri = get_theme_file_uri();

    wp_register_style("rka_bootstrap", $uri . "/css/bootstrap.css");
    wp_register_style("rka_font-awesome", $uri . "/css/font-awesome.css");
    wp_register_style("rka_style", $uri . "/css/style.css");

    wp_enqueue_style("rka_bootstrap");
    wp_enqueue_style("rka_font-awesome");
    wp_enqueue_style("rka_style");

    wp_register_script("rka_script", $uri . "/js/script.js", [], false, true);

    wp_enqueue_script("jquery");
    wp_enqueue_script("rka_script");


}

?> 