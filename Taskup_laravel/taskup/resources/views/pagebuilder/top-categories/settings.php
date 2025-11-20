<?php

return [
    'id' => 'top-categories',
    'name' => __('Blog'),
    'icon' => '<i class="icon-clipboard"></i>',
    'tab' => "General",
    'fields' => [
        [
            'id'            => 'heading',
            'type'          => 'text',
            'value'         => 'Trending Top Categories',
            'class'         => '',
            'label_title'   => __('Heading'),
            'placeholder'   => __('Enter heading'),
        ],
        [
            'id'            => 'paragraph',
            'type'          => 'editor',
            'value'         => 'At our core, we are experts in connecting local business with top-notch talent. We are passionate about helping you find the perfect match in key areas of expertise.',
            'class'         => '',
            'label_title'   => __('Paragraph'),
            'placeholder'   => __('Paragraph'),
        ],
        [                                                          
            'id'                => 'categories_data',
            'type'              => 'repeater',
            'label_title'       => __('Top categories'),
            'label_desc'        => __('Enter categories'),
            'repeater_title'    => __('Top categories'),
            'multi'       => true,
            'fields'       =>[
                [
                    'id'            => 'image',
                    'type'          => 'file',
                    'class'         => '',
                    'label_title'   => __('Images'),
                    'label_desc'    => __('Add images'),
                    'multi'       => true,
                    'max_size'   => 4,                  // size in MB
                    'ext'    =>[
                        'jpg',
                        'png',
                        'svg',
                    ], 
                ],
                [
                    'id'            => 'sub_heading',
                    'type'          => 'text',
                    'value'         => '',
                    'class'         => '',
                    'label_title'   => __('Heading'),
                    'placeholder'   => __('Enter Heading'),
                ],
                [
                    'id'            => 'description',
                    'type'          => 'text',
                    'value'         => '',
                    'class'         => '',
                    'label_title'   => __('Description'),
                    'placeholder'   => __('Enter description'),
                ],
            ]
        ],
        [
            'id'            => 'category_sub_heading',
            'type'          => 'text',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('Heading'),
            'placeholder'   => __('Enter Heading'),
        ],
        [
            'id'            => 'category_description',
            'type'          => 'text',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('Description'),
            'placeholder'   => __('Enter description'),
        ],
        [
            'id'            => 'btn_url',
            'type'          => 'text',
            'value'         => "#",
            'class'         => '',
            'label_title'   => __('Button url'),
            'placeholder'   => __('Enter url'),
        ],
        [
            'id'            => 'btn_text',
            'type'          => 'text',
            'value'         => 'Explore More',
            'class'         => '',
            'label_title'   => __('Button text'),
            'placeholder'   => __('Enter button text'),
        ],
    ]
];
