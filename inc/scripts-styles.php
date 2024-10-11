<?php

function scripts_styles()
{
    // // CSS
    // // wp_enqueue_style('custom', THEME_URI . 'dist/css/custom.css');
    // wp_enqueue_style('theme', THEME_URI . 'dist/css/theme.css', null);
    // // JS
    
    wp_enqueue_script('theme', THEME_URI . 'dist/js/theme.js');
    wp_enqueue_script('vendor', THEME_URI . 'dist/js/vendor.js');
}

add_action('wp_enqueue_scripts', "scripts_styles");

add_theme_support('post-thumbnails');
