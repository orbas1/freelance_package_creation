<?php

return [
    'id' => 'blog',
    'name' => __('Blog'),
    'icon' => '<i class="icon-clipboard"></i>',
    'tab' => "General",
    'fields' => [
        [
            'id'            => 'heading',
            'type'          => 'text',
            'value'         => 'Insights & Perspectives, Exploring the Boundless Horizons',
            'class'         => '',
            'label_title'   => __('Heading'),
            'placeholder'   => __('Enter heading'),
        ],
        [
            'id'            => 'paragraph',
            'type'          => 'editor',
            'value'         => 'Explore diverse topics with captivating articles and expert opinions in our thought-provoking blog section. Uncover new perspectives today!',
            'class'         => '',
            'label_title'   => __('Paragraph'),
            'placeholder'   => __('Paragraph'),
        ],
        [                                                          
            'id'                => 'blog_data',
            'type'              => 'repeater',
            'label_title'       => __('Blog'),
            'label_desc'        => __('Enter blog'),
            'repeater_title'    => __('Blog'),
            'multi'       => true,
            'fields'       =>[
                [
                    'id'            => 'blog_image',
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
                    'value'         => 'Technology & Innovation',
                    'class'         => '',
                    'label_title'   => __('Sub heading'),
                    'placeholder'   => __('Enter sub heading'),
                ],
                [
                    'id'            => 'date',
                    'type'          => 'text',
                    'value'         => 'Mar 25, 2024',
                    'class'         => '',
                    'label_title'   => __('Date'),
                    'placeholder'   => __('Enter date'),
                ],
                [
                    'id'            => 'blog_heading',
                    'type'          => 'text',
                    'value'         => 'Why is this happening? Many reasons. Fear of being usurped.',
                    'class'         => '',
                    'label_title'   => __('Blog heading'),
                    'placeholder'   => __('Enter blog heading'),
                ],
                [
                    'id'            => 'paragraph',
                    'type'          => 'text',
                    'value'         => 'Articles that teach programming languages, frameworks, libraries, and best practices.',
                    'class'         => '',
                    'label_title'   => __('Paragraph'),
                    'placeholder'   => __('Enter paragraph'),
                ],
            ]
        ],
        [
            'id'            => 'explore_more_url',
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
