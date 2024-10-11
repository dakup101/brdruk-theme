<?php

// Symbol Declarations

require_once(trailingslashit(get_template_directory()) . '/inc/defines.php');

// WP General

require_once(FUN . "filters.php");
require_once(FUN . "scripts-styles.php");
require_once(FUN . "supports.php");
require_once(FUN . "allow-svg.php");
require_once(FUN . "scripts-to-footer.php");
require_once(FUN . "image-sizes.php");
require_once(FUN . "register-menus.php");
require_once(FUN . "editor.php");
require_once(FUN . "gutenberg.php");

// Custom Functions

// Taxonomies

// Post Types

// ACF

// ACF
if (class_exists('ACF')) {
    require_once(FUN . "acf-options.php");
    require_once(FUN . "acf-blocks.php");

    // ACF Fields - Blocks
    require_once(FIELD . "block-banner-hero.php");
    require_once(FIELD . "block-text-section.php");
    require_once(FIELD . "block-contact-section.php");
}

// Ajax

// Classes