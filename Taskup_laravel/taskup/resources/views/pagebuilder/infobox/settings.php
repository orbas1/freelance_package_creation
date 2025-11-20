<?php

return [
    'id' => 'infobox',
    'name' => __('Infobox'),
    'icon' => '<i class="icon-clipboard"></i>',
    'tab' => "General",
    'fields' => [
        [
            'id'            => 'pre_heading',
            'type'          => 'text',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('Pre heading'),
            'placeholder'   => __('Enter pre heading'),
        ],
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
            'id'                => 'infobox_data',
            'type'              => 'repeater',
            'label_title'       => __('Blog'),
            'label_desc'        => __('Enter blog'),
            'repeater_title'    => __('Blog'),
            'multi'       => true,
            'fields'       =>[
                [
                    'id'            => 'info_heading',
                    'type'          => 'text',
                    'value'         => '',
                    'class'         => '',
                    'label_title'   => __('Pre heading'),
                    'placeholder'   => __('Enter pre heading'),
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
                    'id'            => 'paragraph',
                    'type'          => 'text',
                    'value'         => 'Articles that teach programming languages, frameworks, libraries, and best practices.',
                    'class'         => '',
                    'label_title'   => __('Paragraph'),
                    'placeholder'   => __('Enter paragraph'),
                ],
                [
                    'id'            => 'info_image',
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
            ]
        ],
        [
            'id'            => 'note',
            'type'          => 'text',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('Note'),
            'placeholder'   => __('Enter note'),
        ],
    ]
];
