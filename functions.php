<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 20);

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style',  get_stylesheet_directory_uri() . '/style.css' );
}

?>