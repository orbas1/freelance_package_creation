<?php

return [
    'id' => 'image',
    'name' => __('Image'),
    'icon' => '<i class="icon-image"></i>',
    'tab' => "General",
    'fields' => [
        [
            'id'            => 'image',
            'type'          => 'file',
            'class'         => '',
            'label_title'   => __('Image'),
            'placeholder'   => __('Add image'),
            'max_size'   => 4,                  // size in MB
            'ext'    => [
                'jpg',
                'png',
                'svg',
                'webp',
            ],
        ],
    ]
];
