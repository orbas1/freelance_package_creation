<?php

return [
    'id' => 'counter',
    'name' => __('Counter'),
    'icon' => '<i class="icon-clipboard"></i>',
    'tab' => "General",
    'fields' => [
        [
            'id'            => 'conuter_description',
            'type'          => 'text',
            'value'         => 'Flourish in a thriving freelance ecosystem dedicated to excellence and limitless opportunities.',
            'class'         => '',
            'label_title'   => __('Counter record'),
            'placeholder'   => __('Enter counter record'),
        ],
        [                                                          
            'id'                => 'counter_repeator',
            'type'              => 'repeater',
            'label_title'       => __('Counter'),
            'repeater_title'    => __('Add counter'),
            'multi'       => true,
            'fields'       =>[
                [
                    'id'            => 'image',
                    'type'          => 'file',
                    'class'         => '',
                    'label_title'   => __('Images'),
                    'label_desc'    => __('Add images'),
                    'max_size'   => 4,                  // size in MB
                    'ext'    =>[
                        'jpg',
                        'png',
                        'svg',
                    ], 
                ],
                [
                    'id'            => 'conuter_record',
                    'type'          => 'text',
                    'value'         => '',
                    'class'         => '',
                    'label_title'   => __('Counter record'),
                    'placeholder'   => __('Enter counter record'),
                ],
                [
                    'id'            => 'heading',
                    'type'          => 'text',
                    'value'         => '',
                    'class'         => '',
                    'label_title'   => __('Heading'),
                    'placeholder'   => __('Enter heading'),
                ],
            ]
        ],
    ]
];
