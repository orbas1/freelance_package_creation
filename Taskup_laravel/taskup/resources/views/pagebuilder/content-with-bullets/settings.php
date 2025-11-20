<?php

return [
    'id' => 'content-with-bullets',
    'name' => __('Content with bullets'),
    'icon' => '<i class="icon-clipboard"></i>',
    'tab' => "General",
    'fields' => [
        [
            'id'            => 'theme_style',
            'type'          => 'radio',
            'class'         => '',
            'label_title'   => __('Theme style'),
            'options'       => [
                'dark'     => __('Dark'),
                'light'    => __('Light'),
            ],
            'default'       => 'dark',  
        ],
        [
            'id'            => 'sub-heading',
            'type'          => 'text',
            'value'         => 'We’re expanding day by day',
            'class'         => '',
            'label_title'   => __('Sub heading'),
            'placeholder'   => __('Enter sub-heading'),
        ],
        [
            'id'            => 'heading',
            'type'          => 'text',
            'value'         => 'Global Trust of <span>1 Million</span> Businesses and Counting',
            'class'         => '',
            'label_title'   => __('Heading'),
            'placeholder'   => __('Enter heading'),
        ],
        [
            'id'            => 'paragraph',
            'type'          => 'text',
            'value'         => 'Connect with skilled professionals, streamline collaboration, and unlock success. Join now and redefine your work experience!.',
            'class'         => '',
            'label_title'   => __('Paragraph'),
            'placeholder'   => __('Enter paragraph'),
        ],
        [                                                    
            'id'                => 'list-data',
            'type'              => 'repeater',
            'label_title'       => __('List'),
            'field'             => [
                'id'            => 'list_item',
                'type'          => 'text',
                'class'         => '',
                'label_title'   => __('List item'),
                'placeholder'   => __('Enter text'),
            ]
        ],
        [
            'id'            => 'get_started_url',
            'type'          => 'text',
            'value'         => "#",
            'class'         => '',
            'label_title'   => __('Get started btn url'),
            'placeholder'   => __('Enter url'),
        ],
        [
            'id'            => 'get_started_btn',
            'type'          => 'text',
            'value'         => "Get Started",
            'class'         => '',
            'label_title'   => __('Get started button'),
            'placeholder'   => __('Enter button text'),
        ],
    ]
];
