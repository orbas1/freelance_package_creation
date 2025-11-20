<?php

return [
    'id' => 'search-banner',
    'name' => __('Search banner'),
    'icon' => '<i class="icon-clipboard"></i>',
    'tab' => "Banner",
    'fields' => [
        [
            'id'            => 'search-btn-txt',
            'type'          => 'text',
            'value'         => 'Search',
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
        [
            'id'            => 'trusted-by-heading',
            'type'          => 'text',
            'value'         => 'Trusted by',
            'class'         => '',
            'label_title'   => __('Heading'),
            'placeholder'   => __('Enter heading'),
        ],
        [                                        
            'id'            => 'trusted-by-image',
            'type'          => 'file',
            'class'         => '',
            'label_title'   => __('Images'),
            'multi'       => true,
            'max_size'   => 4,                  // size in MB
            'ext'    =>[
                'jpg',
                'png',
                'webp',
                'svg',
            ], 
        ],
    ]
];
