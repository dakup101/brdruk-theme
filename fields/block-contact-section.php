<?php

function contact_section_fields() {
    $key = 'contact_section_fields_';
    acf_add_local_field_group([
        'key' => $key,
        'title' => 'Banner',
        'fields' => [
            [
                'key' => $key . 'cf_title',
                'name' => 'cf_title',
                'label' => 'Contact Form Title',
                'type' => 'text',
            ],
            [
                'key' => $key . 'cf_code',
                'name' => 'cf_code',
                'label' => 'Contact Form Shortcode',
                'type' => 'text',
            ],
            [
                'key' => $key . 'info_title',
                'name' => 'info_title',
                'label' => 'Contact Info Title',
                'type' => 'text',
            ],
            [
                'key' => $key . 'content',
                'name' => 'content',
                'label' => 'Contact Info Content',
                'type' => 'wysiwyg',
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/contact-section',
                ],
            ],
        ],
    ]);
}
add_action('acf/init', 'contact_section_fields');
