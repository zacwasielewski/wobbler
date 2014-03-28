<?php
/**
 * Custom functions
 */

function load_fonts() {
  wp_enqueue_style( 'google-fonts','//fonts.googleapis.com/css?family=Lora');
}
add_action('wp_enqueue_scripts', 'load_fonts');

add_image_size( 'header', 1280, 9999 );
