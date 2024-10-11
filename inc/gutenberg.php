<?php

// Remove Gutenberg editor styles
function remove_gutenberg_styles()
{
    remove_theme_support('wp-block-styles');
}

function myguten_enqueue_2()
{
    wp_enqueue_script(
        'myguten-theme',
        THEME_URI . "dist/js/theme.js",
        array(),  // No dependencies
        null,     // Version (null to avoid adding a version number)
        true      // Load in the footer for better performance
    );
}

add_action('enqueue_block_editor_assets', 'myguten_enqueue_2');
