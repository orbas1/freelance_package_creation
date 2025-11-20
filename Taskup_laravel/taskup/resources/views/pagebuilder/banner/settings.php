<?php

    $fields = [
        // Select verient
        [
            'id'            => 'select_verient',
            'type'          => 'select',
            'class'         => '',
            'label_title'   => __('Select verient'),
            'options'       => [
                'tk-hero-banner'            => 'Banner Style 1',
                'tk-hero-banner-two'        => 'Banner Style 2',
                'tk-hero-banner-three'      => 'Banner Style 3',
                'tk-hero-banner-four'       => 'Banner Style 4',
                'tk-hero-banner-nine'       => 'Banner Style 5',
                'tk-hero-banner-ten'        => 'Banner Style 6',
                'tk-hero-banner-seven'      => 'Banner Style 7',
                'tk-hero-banner-five'       => 'Banner Style 8',
                'tk-hero-banner-eleven'     => 'Banner Style 9',
                'tk-hero-banner-twelve'     => 'Banner Style 10',
            ],
            'default'       => '',  
            'placeholder'   => __('Select from the list'),  
        ],

        // Select media type
        [
            'id'            => 'media_type',
            'type'          => 'select',
            'class'         => '',
            'label_title'   => __('Select media type'),
            'options'       => [
                ''        => 'None',
                'video'   => 'Video',
                'image'   => 'Image',
                'slider'  => 'Slider',
            ],
            'default'       => '',  
            'placeholder'   => __('Select from the list'),  
        ],

        // Image
        [
            'id'            => 'image',
            'type'          => 'file',
            'class'         => '',
            'label_title'   => __('Add banner image'),
            'max_size'   => 4,                  // size in MB
            'ext'    => [
                'jpg',
                'png',
                'webp',
                'svg',
            ],
        ],

        // Video
        [
            'id'            => 'video',
            'type'          => 'file',
            'class'         => '',
            'label_title'   => __('Add banner video'),
            'max_size'   => 20,                  // size in MB
            'ext'    => [
                'mp4',
            ],
        ],
        
        // Slider
        [
            'id'            => 'slider_image',
            'type'          => 'file',
            'class'         => '',
            'label_title'   => __('Add banner slider images'),
            'multi'       => true,
            'max_size'   => 4,                  // size in MB
            'ext'    =>[
                'jpg',
                'png',
                'svg',
            ], 
        ],

        [
            'id'            => 'media_frame',
            'type'          => 'radio',
            'class'         => '',
            'label_title'   => __('Enable media frame'),
            'options'       => [
                'yes'   => __('Yes'),
                'no'    => __('No'),
            ],
            'default'       => 'no',  
        ],

        // Heading
        [
            'id'            => 'heading',
            'type'          => 'text',
            'value'         => 'Thrive in the <span>World of Freelance</span> Excellence Marketplace!',
            'class'         => '',
            'label_title'   => __('Heading'),
            'placeholder'   => __('Enter heading'),
        ],
        [
            'id'            => 'heading_text_color',
            'type'          => 'colorpicker',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('Heading text color'),
        ],

        // Paragraph
        [
            'id'            => 'paragraph',
            'type'          => 'editor',
            'value'         => 'Flourish in a thriving freelance ecosystem dedicated to excellence and limitless opportunities.',
            'class'         => '',
            'label_title'   => __('Paragraph'),
            'placeholder'   => __('Enter paragraph'),
        ],
        [
            'id'            => 'paragraph_text_color',
            'type'          => 'colorpicker',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('Paragraph text color'),
        ],

        // Checkbox
        [
            'id'                    => 'configs_checkbox',
            'type'                  => 'checkbox',
            'class'                 => '',
            'label_title'           => __('Select section configurations'),
            'options'       => [
                'buttons'       => __('Buttons'),
                'search'        => __('Search'),
                'categories'    => __('Categories'),
                'trusted_by'    => __('Trusted by'),
            ],
            'default'       => ['buttons','categories'],  
        ],

        // Search
        [
            'id'            => 'search-btn-txt',
            'type'          => 'text',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('Search button text'),
            'placeholder'   => __('Enter search button text'),
        ],
        [
            'id'            => 'search-placeholder',
            'type'          => 'text',
            'value'         => 'Search by keyword',
            'class'         => '',
            'label_title'   => __('Search placeholder'),
            'placeholder'   => __('Enter search placeholder'),
        ],

        // Buttons 
        [
        'id'                => 'buttons_repeater',
        'type'              => 'repeater',
        'label_title'       => __('Buttons'),
        'repeater_title'    => __('Button'),
        'multi'       => true,
        'fields'       =>[
                [
                    'id'            => 'btn_text',
                    'type'          => 'text',
                    'value'         => 'Find a Better Job',
                    'class'         => '',
                    'label_title'   => __('Button text'),
                    'placeholder'   => __('Enter button text'),
                ],
                [
                    'id'            => 'btn_text_color',
                    'type'          => 'colorpicker',
                    'value'         => '',
                    'class'         => '',
                    'label_title'   => __('Button text color'),
                ],
                [
                    'id'            => 'btn_bg_color',
                    'type'          => 'colorpicker',
                    'value'         => '',
                    'class'         => '',
                    'label_title'   => __('Button background color'),
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
                    'id'            => 'btn_icon',
                    'type'          => 'text',
                    'value'         => '',
                    'class'         => '',
                    'label_title'   => __('Add icon'),
                    'placeholder'   => __('<i class="fa-solid fa-arrow-up-right-from-square"></i>'),
                ],
            ]
        ],

         // Categories
         [
            'id'            => 'all_category_heading',
            'type'          => 'text',
            'value'         => 'All categories',
            'class'         => '',
            'label_title'   => __('Category heading'),
            'placeholder'   => __('Enter category heading'),
        ],
        [
            'id'            => 'category_heading',
            'type'          => 'text',
            'value'         => 'Popular categories',
            'class'         => '',
            'label_title'   => __('Category heading'),
            'placeholder'   => __('Enter category heading'),
        ],
        [
            'id'            => 'category_heading_text_color',
            'type'          => 'colorpicker',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('Category heading text color'),
        ],
        [
            'id'            => 'category_text_color',
            'type'          => 'colorpicker',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('Category text color'),
        ],
        [
            'id'            => 'category_bg_color',
            'type'          => 'colorpicker',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('Category background color'),
        ],

        // Trusted by
        [
            'id'            => 'trusted_by_heading',
            'type'          => 'text',
            'value'         => 'Trusted by',
            'class'         => '',
            'label_title'   => __('Trusted by heading'),
            'placeholder'   => __('Enter heading'),
        ],
        [
            'id'            => 'trusted_by_heading_text_color',
            'type'          => 'colorpicker',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('Trusted by text color'),
        ],
        [                                        
            'id'            => 'trusted_by_image',
            'type'          => 'file',
            'class'         => '',
            'label_title'   => __('Trusted by images'),
            'multi'       => true,
            'max_size'   => 4,                  // size in MB
            'ext'    =>[
                'jpg',
                'png',
                'webp',
                'svg',
            ], 
        ],

        [                                        
            'id'            => 'banner_shape',
            'type'          => 'file',
            'class'         => '',
            'label_title'   => __('Upload a shape'),
            'max_size'   => 4,                  // size in MB
            'ext'    =>[
                'svg',
            ], 
        ],
    ];
   
    return [
        'id' => 'banner',
        'name' => __('Banner'),
        'icon' => '<i class="icon-clipboard"></i>',
        'tab' => "Banner",
        'fields' => $fields
    ];