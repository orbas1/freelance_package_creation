<?php

return [
    'id' => 'market-place',
    'name' => __('Market place'),
    'icon' => '<i class="icon-clipboard"></i>',
    'tab' => "General",
    'fields' => [
        [
            'id'            => 'sub-heading',
            'type'          => 'text',
            'value'         => 'Boost Your Working Flow',
            'class'         => '',
            'label_title'   => __('Sub heading'),
            'placeholder'   => __('Enter sub heading'),
        ],
        [
            'id'            => 'heading',
            'type'          => 'text',
            'value'         => 'Your One-Stop Online Marketplace for Everything You Need',
            'class'         => '',
            'label_title'   => __('Heading'),
            'placeholder'   => __('Enter heading'),
        ],
        [
            'id'            => 'paragraph',
            'type'          => 'text',
            'value'         => 'Your premier online marketplace. Find quality products and services, connect with trusted sellers, and enjoy a seamless shopping experience today.',
            'class'         => '',
            'label_title'   => __('Paragraph'),
            'placeholder'   => __('Enter paragraph'),
        ],
        [                                                          
            'id'                => 'market_place_repeator',
            'type'              => 'repeater',
            'label_title'       => __('Market place'),
            'repeater_title'    => __('Add data'),
            'multi'       => true,
            'fields'       =>[
                [
                    'id'            => 'image_sub_heading',
                    'type'          => 'text',
                    'value'         => '256 Listings',
                    'class'         => '',
                    'label_title'   => __('Sub heading'),
                    'placeholder'   => __('Enter sub heading'),
                ],
                [
                    'id'            => 'image',
                    'type'          => 'file',
                    'class'         => '',
                    'label_title'   => __('Images'),
                    'label_desc'    => __('Add images'),
                    'max_size'   => 4,                  // size in MB
                    'ext'    =>[
                        'jpg',
                        'png',
                        'svg',
                    ], 
                ],
                [
                    'id'            => 'image_heading',
                    'type'          => 'text',
                    'value'         => 'Voice Over',
                    'class'         => '',
                    'label_title'   => __('Heading'),
                    'placeholder'   => __('Enter heading'),
                ],
            ]
        ],
    ]
];
