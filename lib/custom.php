<?php
/**
 * Custom functions
 */

function load_fonts() {
  wp_enqueue_style( 'google-fonts','//fonts.googleapis.com/css?family=Montserrat|Merriweather');
}

add_action('wp_enqueue_scripts', 'load_fonts');
