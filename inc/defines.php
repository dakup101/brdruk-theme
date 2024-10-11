<?php

define('THEME_DIR', trailingslashit(get_template_directory()));
define('THEME_URI', trailingslashit(esc_url(get_template_directory_uri())));
define('IMG', trailingslashit(esc_url(get_template_directory_uri() . '/dist/img/')));
define('FUN', THEME_DIR . "/inc/");
define('CMP', 'components/cmp');
define('VIEW', 'views/view');
define('BLOCK', 'blocks/block-');
define('FIELD', THEME_DIR . "/fields/");
