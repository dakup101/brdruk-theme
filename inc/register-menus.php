<?php

function register_main_menu()
{
    register_nav_menu('main-menu', __('Main Navigation', 'alex-franzki'));
    register_nav_menu('footer-menu', __('Footer Navigation', 'alex-franzki'));
}

add_action('after_setup_theme', 'register_main_menu');
