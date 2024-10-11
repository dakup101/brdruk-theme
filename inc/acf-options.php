<?php

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Global Fields',
        'menu_title'    => 'Global',
        'menu_slug'     => 'theme-global',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_page(array(
        'page_title'    => 'Footer Fields',
        'menu_title'    => 'Footer',
        'menu_slug'     => 'theme-footer',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_page(array(
        'page_title'    => 'Header Fields',
        'menu_title'    => 'Header',
        'menu_slug'     => 'theme-header',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}
