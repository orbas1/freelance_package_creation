<?php

return [
    'id' => 'banner-with-slider',
    'name' => __('Banner V1'),
    'icon' => '<i class="icon-clipboard"></i>',
    'tab' => "Banner",
    'fields' => [ 
        [
            'id'                => 'banner6_repeator',
            'type'              => 'repeater',
            'label_title'       => __('Add banners'),
            'repeater_title'    => __('Banner data'),
            'multi'       => true,
            'fields'       =>[
                [
                    'id'            => 'heading',
                    'type'          => 'text',
                    'value'         => 'Thrive in the <span>World of Freelance</span> Excellence Marketplace!',
                    'class'         => '',
                    'label_title'   => __('Heading'),
                    'placeholder'   => __('Enter heading'),
                ],
                [
                    'id'            => 'paragraph',
                    'type'          => 'editor',
                    'value'         => 'Flourish in a thriving freelance ecosystem dedicated to excellence and limitless opportunities.',
                    'class'         => '',
                    'label_title'   => __('Paragraph'),
                    'placeholder'   => __('Enter paragraph'),
                ],
                [
                    'id'            => 'btn_green_text',
                    'type'          => 'text',
                    'value'         => 'Try it Free',
                    'class'         => '',
                    'label_title'   => __('Orange button text'),
                    'placeholder'   => __('Enter button text'),
                ],
                [
                    'id'            => 'first_btn_url',
                    'type'          => 'text',
                    'value'         => "#",
                    'class'         => '',
                    'label_title'   => __('First button url'),
                    'placeholder'   => __('Enter url'),
                ],
                [
                    'id'            => 'simple_btn_text',
                    'type'          => 'text',
                    'value'         => 'Learn More',
                    'class'         => '',
                    'label_title'   => __('White button text'),
                    'placeholder'   => __('Enter button text'),
                ],
                [
                    'id'            => 'second_btn_url',
                    'type'          => 'text',
                    'value'         => "#",
                    'class'         => '',
                    'label_title'   => __('Second button url'),
                    'placeholder'   => __('Enter url'),
                ],
                [
                    'id'            => 'image',
                    'type'          => 'file',
                    'class'         => '',
                    'label_title'   => __('Image'),
                    'label_desc'    => __('Add images'),
                    'max_size'   => 4,                  // size in MB
                    'ext'    =>[
                        'jpg',
                        'png',
                        'svg',
                    ], 
                ]
            ]
        ]                                                        
    ]
];
