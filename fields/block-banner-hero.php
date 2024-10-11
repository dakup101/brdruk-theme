<?php

function register_banner_fields() {
    acf_add_local_field_group([
        'key' => 'group_block_banner_hero',
        'title' => 'Banner',
        'fields' => [
            [
                'name' => 'title',
                'label' => 'Title',
                'type' => 'text',
            ],
            [
                'name' => 'content',
                'label' => 'Content',
                'type' => 'wysiwyg',
            ],
            [
                'name' => 'bg',
                'label' => 'Background Image',
                'type' => 'image',
                'return_format' => 'url',
            ],
            [
                'name' => 'button_1',
                'label' => 'Button 1',
                'type' => 'link',
                'return_format' => 'array',
                'wrapper' => [
                    'width' => '50%',
                ]
            ],
            [
                'name' => 'button_2',
                'label' => 'Button 2',
                'type' => 'link',
                'return_format' => 'array',
                'wrapper' => [
                    'width' => '50%',
                ]
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/banner-hero',
                ],
            ],
        ],
    ]);
}
add_action('acf/init', 'register_banner_fields');
