<?php

/*------------------------------------*\
Removing classes, styles and all unwanted tag attributes during paste process
\*------------------------------------*/

if (!function_exists('app_customize_tinymce')) {

    function app_customize_tinymce($in) {
        $in['paste_preprocess'] = "function(pl,o){ 
        o.content = o.content.replace(/<\/*(applet|area|article|aside|audio|base|basefont|bdi|bdo|body|button|canvas|command|datalist|details|embed|figcaption|figure|font|footer|frame|frameset|head|header|hgroup|hr|html|iframe|img|keygen|link|map|mark|menu|meta|meter|nav|noframes|noscript|object|optgroup|output|param|progress|rp|rt|ruby|script|section|source|span|style|summary|time|title|track|video|wbr)[^>]*>/gi,'');
        o.content = o.content.replace(/<(div|table|tbody|tr|td|th|p|b|font|strong|i|em|h1|h2|h3|h4|h5|h6|hr|ul|li|ol|code|blockquote|address|dir|dt|dd|dl|big|cite|del|dfn|ins|kbd|q|samp|small|s|strike|sub|sup|tt|u|var|caption) [^>]*>/gi,'<$1>');
        //o.content = o.content.replace(/<a [^>]*href=(\"|')(.*?)(\"|')[^>]*>/gi,'<a href=\"$2\">');
        if (o.content.match(/<br[\/\s]*>/gi)) {
          o.content = o.content.replace(/<br[\s\/]*>/gi,'</p><p>');
        }
        o.content = o.content.replace(/<(\/)*div[^>]*>/gi,'<$1p>');
        o.content = o.content.replace(/<\/p>[\s\\r\\n]+<\/p>/gi,'</p></p>');
        o.content = o.content.replace(/<\<p>[\s\\r\\n]+<p>/gi,'<p><p>');
        o.content = o.content.replace(/<\/p>[\s\\r\\n]+<\/p>/gi,'</p></p>');
        o.content = o.content.replace(/<\<p>[\s\\r\\n]+<p>/gi,'<p><p>');
        o.content = o.content.replace(/(<\/p>)+/gi,'</p>');
        o.content = o.content.replace(/(<p>)+/gi,'<p>');
      }";
        return $in;
    }
    add_filter('tiny_mce_before_init', 'app_customize_tinymce');
}

/*------------------------------------*\
Gutenberg restriction to a specific type of content
\*------------------------------------*/

if (!function_exists('app_gutenberg_filter')) {
    $use_gutenberg_editor = true;

    if ($use_gutenberg_editor) {

        function app_gutenberg_filter($use_block_editor, $post_type) {
            return $use_block_editor;
        }
        add_filter('use_block_editor_for_post_type', 'app_gutenberg_filter', 10, 2);
    } else {
        function app_gutenberg_filter($use_block_editor, $post_type) {
            return false;
        }
        add_filter('use_block_editor_for_post_type', 'app_gutenberg_filter', 10, 2);

        // disable gutenberg style in Front
        function app_gutenberg_deregister_styles() {
            wp_dequeue_style('wp-block-library');
        }
        add_action('wp_print_styles', 'app_gutenberg_deregister_styles', 100);
    }
}

/*------------------------------------*\
Gutenberg new category
\*------------------------------------*/
function acf_block_category($categories, $post) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'acf',
                'title' => 'Domrel Blocks',
            ),
        )
    );
}
add_filter('block_categories_all', 'acf_block_category', 10, 2);

/*------------------------------------*\
Gutenberg remove patterns
\*------------------------------------*/
add_action('init', function () {
    remove_theme_support('core-block-patterns');
});

/*------------------------------------*\
Gutenberg show only custom block
\*------------------------------------*/
function misha_allowed_block_types($allowed_blocks, $editor_context) {
    return array(
        'acf/banner-hero',
        'acf/text-section',
    );
}
add_filter('allowed_block_types_all', 'misha_allowed_block_types', 25, 2);

function remove_default_gutenberg_styles() {
    // Remove Gutenberg block library styles
    wp_dequeue_style('wp-block-library');

    // Remove Gutenberg theme styles
    wp_dequeue_style('wp-block-library-theme');

    // Remove Gutenberg editor styles
    wp_dequeue_style('wp-edit-blocks');
}

// Hook into the enqueue block editor assets action
add_action('enqueue_block_editor_assets', 'remove_default_gutenberg_styles');
