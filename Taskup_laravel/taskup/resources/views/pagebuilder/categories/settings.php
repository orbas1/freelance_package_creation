<?php

return [
    'id' => 'categories',
    'name' => __('Categories'),
    'icon' => '<i class="icon-clipboard"></i>',
    'tab' => "Home",
    'fields' => [
        [
            'id'            => 'sub-heading',
            'type'          => 'text',
            'value'         => 'Boost Your Working Flow',
            'class'         => '',
            'label_title'   => __('Sub heading'),
            'placeholder'   => __('Sub heading'),
        ],
        [
            'id'            => 'heading',
            'type'          => 'text',
            'value'         => 'Comprehensive Range of Talent Services to Meet Your Every Need',
            'class'         => '',
            'label_title'   => __('Heading'),
            'placeholder'   => __('Heading'),
        ],
        [
            'id'            => 'paragraph',
            'type'          => 'editor',
            'value'         => 'Explore a curated range of top categories, from tech gadgets to fashion trends, home essentials, and gourmet delights. Find your perfect match now.',
            'class'         => '',
            'label_title'   => __('Paragraph'),
            'placeholder'   => __('Paragraph'),
        ],
        [
            'id'            => 'btn_text',
            'type'          => 'text',
            'value'         => 'Explore all categories',
            'class'         => '',
            'label_title'   => __('Button text'),
            'placeholder'   => __('Button text'),
        ],
    ]
];
