<?php

function banner_hero_fields() {
    $key = 'banner_hero_fields_';
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
                'key' => $key . 'bg',
                'name' => 'bg',
                'label' => 'Background Image',
                'type' => 'image',
                'return_format' => 'url',
                'wrapper' => [
                    'width' => '33%',
                ]
            ],
            [
                'key' => $key . 'button_1',
                'name' => 'button_1',
                'label' => 'Button 1',
                'type' => 'link',
                'return_format' => 'array',
                'wrapper' => [
                    'width' => '33%',
                ]
            ],
            [
                'key' => $key . 'button_2',
                'name' => 'button_2',
                'label' => 'Button 2',
                'type' => 'link',
                'return_format' => 'array',
                'wrapper' => [
                    'width' => '33%',
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
add_action('acf/init', 'banner_hero_fields');
