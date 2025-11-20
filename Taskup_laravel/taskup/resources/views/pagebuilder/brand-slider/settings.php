<?php

return [
    'id' => 'brand-slider',
    'name' => __('Brand slider'),
    'icon' => '<i class="icon-sliders"></i>',
    'tab' => "General",
    'fields' => [
        [
            'id'            => 'heading',
            'type'          => 'text',
            'value'         => 'Join 20,000+ Highly Productive Teams',
            'class'         => '',
            'label_title'   => __('Heading'),
            'placeholder'   => __('Enter heading'),
        ],
        [
            'id'            => 'images',
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
        ]
    ]
];
