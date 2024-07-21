<?php

/**
 * @return void
 * @description style load
 */
function beach_resort_enqueue_styles() {
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/src/assets/css/style.css', array(), filemtime(get_template_directory() . '/src/assets/css/style.css'));
}
add_action('wp_enqueue_scripts', 'beach_resort_enqueue_styles');