<?php

function register_acf_blocks() {
    if (!function_exists('acf_register_block_type')) return;

    wp_register_block("banner-hero", "Banner Hero", "banner-hero.php");
    wp_register_block("text-section", "Text Section", "text-section.php");

    wp_register_style('all-block-styles', THEME_URI . '/dist/css/theme.css', null);
    register_block_style('core/heading', [
        'name' => 'banner',
        'label' => __('Blocks', 'everywhere'),
        'style_handle' => 'all-block-styles'
    ]);
}

function wp_register_block($name, $title, $template) {
    acf_register_block_type([
        "name" => $name,
        "title" => $title,
        "category" => "acf",
        "icon" => "images-alt2",
        "render_template" => BLOCK . $template,
        "acf" => array(
            "mode" => "preview",
        ),
        "supports" => array(
            "anchor" => true
        )
    ]);
}

add_action('init', 'register_acf_blocks');
