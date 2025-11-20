<?php

return [
    'id' => 'working-steps',
    'name' => __('Working steps'),
    'icon' => '<i class="icon-briefcase"></i>',
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
            'value'         => 'Unveiling the Mechanics',
            'class'         => '',
            'label_title'   => __('Sub heading'),
            'placeholder'   => __('Enter sub-heading'),
        ],
        [
            'id'            => 'heading',
            'type'          => 'text',
            'value'         => 'A Comprehensive Guide  on How It Works',
            'class'         => '',
            'label_title'   => __('Heading'),
            'placeholder'   => __('Enter heading'),
        ],
        [                                                          
            'id'                => 'working-steps-repeater',
            'type'              => 'repeater',
            'label_title'       => __('Working steps'),
            'repeater_title'    => __('Working step'),
            'multi'       => true,
            'fields'       =>[
                [
                    'id'            => 'heading',
                    'type'          => 'text',
                    'value'         => 'Search and Discover Talent',
                    'class'         => '',
                    'label_title'   => __('Heading'),
                    'placeholder'   => __('Enter heading'),
                ],
                [
                    'id'            => 'paragraph',
                    'type'          => 'text',
                    'value'         => 'Find the perfect match for your project needs with our intuitive search tools, tailored to help you discover skilled professionals effortlessly.',
                    'class'         => '',
                    'label_title'   => __('Paragraph'),
                    'placeholder'   => __('Enter paragraph'),
                ],
                [
                    'id'            => 'icon',
                    'type'          => 'text',
                    'value'         => '',
                    'class'         => '',
                    'label_title'   => __('Add icon'),
                    'placeholder'   => __('<i class="fa-solid fa-chart-mixed"></i>'),
                ],
                [
                    'id'            => 'icon_color',
                    'type'          => 'select',
                    'class'         => '',
                    'label_title'   => __('Select icon color'),
                    'options'       => [
                        ''            => 'Default',
                        'tk-bgblue'   => 'Primary',
                        'tk-bggreen'  => 'Success',
                    ],
                    'default'       => '',  
                    'placeholder'   => __('Select from the list'),  
                ],
            ]
        ],
        [
            'id'            => 'image',
            'type'          => 'file',
            'class'         => '',
            'label_title'   => __('Image'),
            'label_desc'    => __('Add image'),
            'max_size'   => 4,                  // size in MB
            'ext'    =>[
                'jpg',
                'png',
            ], 
        ],
    ]
];
