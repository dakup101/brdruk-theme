<?php

function text_section_fields() {
    $key = 'text_section_fields_';
    acf_add_local_field_group([
        'key' => $key,
        'title' => 'Banner',
        'fields' => [
            [
                'key' => $key . 'title',
                'name' => 'title',
                'label' => 'Title',
                'type' => 'text',
            ],
            [
                'key' => $key . 'content',
                'name' => 'content',
                'label' => 'Content',
                'type' => 'wysiwyg',
            ],
            [
                'key' => $key . 'button',
                'name' => 'button',
                'label' => 'Button',
                'type' => 'link',
                'return_format' => 'array',
            ],
            [
                'key' => $key . 'is_gray',
                'name' => 'is_gray',
                'label' => 'Gray Background',
                'type' => 'true_false',
                'ui' => 1,
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/text-section',
                ],
            ],
        ],
    ]);
}
add_action('acf/init', 'text_section_fields');
