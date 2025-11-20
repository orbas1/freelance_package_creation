<?php

return [
    'id' => 'search-experience',
    'name' => __('Search experience'),
    'icon' => '<i class="icon-clipboard"></i>',
    'tab' => "General",
    'fields' => [
        [
            'id'            => 'heading',
            'type'          => 'text',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('Heading'),
            'placeholder'   => __('Enter heading'),
        ],
        [
            'id'            => 'paragraph',
            'type'          => 'editor',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('Paragraph'),
            'placeholder'   => __('Paragraph'),
        ],
        [                                                          
            'id'                => 'experience_data',
            'type'              => 'repeater',
            'label_title'       => __('Remaining categories'),
            'label_desc'        => __('Enter categories'),
            'repeater_title'    => __('Remaining categories'),
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
    ]
];