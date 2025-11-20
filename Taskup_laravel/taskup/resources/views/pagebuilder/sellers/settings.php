<?php

return [
    'id' => 'sellers',
    'name' => __('Sellers'),
    'icon' => '<i class="icon-clipboard"></i>',
    'tab' => "Home",
    'fields' => [
        [
            'id'            => 'seller_verient',
            'type'          => 'select',
            'class'         => '',
            'label_title'   => __('Select verient'),
            'options'       => [
                'tk-talent-section'        => 'Style 1',
                'tk-talent-uservtwo'       => 'Style 2',
            ],
            'default'       => 'tk-talent-section',  
            'placeholder'   => __('Select from the list'),  
        ],
        [
            'id'            => 'sub-heading',
            'type'          => 'text',
            'value'         => 'Hand picked talent',
            'class'         => '',
            'label_title'   => __('Sub heading'),
            'placeholder'   => __('Enter sub heading'),
        ],
        [
            'id'            => 'no_of_sellers',
            'type'          => 'select',
            'class'         => '',
            'label_title'   => __('Select No of Sellers'),
            'options'       => [
                '6'        => '6',
                '8'        => '8',
            ],
            'default'       => '6',  
            'placeholder'   => __('Select from the list'),  
        ],
        [
            'id'            => 'heading',
            'type'          => 'text',
            'value'         => '10,256 Talent available in',
            'class'         => '',
            'label_title'   => __('Heading'),
            'placeholder'   => __('Enter heading'),
        ],
        [
            'id'            => 'marketing_btn_text',
            'type'          => 'text',
            'value'         => 'Marketing',
            'class'         => '',
            'label_title'   => __('Button text'),
            'placeholder'   => __('Enter button text'),
        ],
        [
            'id'            => 'paragraph',
            'type'          => 'editor',
            'value'         => 'Within the top 1%, discover elite talent meticulously vetted to uphold the highest standards,ensuring excellence and unparalleled expertise.',
            'class'         => '',
            'label_title'   => __('Paragraph'),
            'placeholder'   => __('Enter paragraph'),
        ],
        [
            'id'            => 'btn_text',
            'type'          => 'text',
            'value'         => 'Explore More Talents',
            'class'         => '',
            'label_title'   => __('Button text'),
            'placeholder'   => __('Enter button text'),
        ],
        // [
        //     'id'            => 'btn_url',
        //     'type'          => 'text',
        //     'value'         => "#",
        //     'class'         => '',
        //     'label_title'   => __('Button Url'),
        //     'placeholder'   => __('Enter url'),
        // ],
    ]
];
