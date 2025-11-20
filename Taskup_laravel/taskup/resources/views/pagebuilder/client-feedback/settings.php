<?php

return [
    'id' => 'client-feedback',
    'name' => __('Client Feedback'),
    'icon' => '<i class="icon-clipboard"></i>',
    'tab' => "General",
    'fields' => [
        [
            'id'            => 'heading',
            'type'          => 'text',
            'value'         => 'We Love Our Client Feedback',
            'class'         => '',
            'label_title'   => __('Heading'),
            'placeholder'   => __('Heading'),
        ],
        [                                                          
            'id'                => 'feedback',
            'type'              => 'repeater',
            'label_title'       => __('Feedback'),
            'label_desc'        => __('Enter feedback'),
            'repeater_title'    => __('Feedback'),
            'multi'       => true,
            'fields'       =>[
                [
                    'id'            => 'feedback_image',
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
                        'webp',
                    ], 
                ],
                [
                    'id'            => 'paragraph',
                    'type'          => 'editor',
                    'value'         => '"I am absolutely thrilled with the exceptional service I received! The team went above and beyond to meet my needs, demonstrating a high level of professionalism and expertise.<br>The quality of their work exceeded my expectations, and I would highly recommend their services to anyone. Thank you for a job well done!"',
                    'class'         => '',
                    'label_title'   => __('Paragraph'),
                    'placeholder'   => __('Paragraph'),
                ],
                [
                    'id'            => 'name',
                    'type'          => 'text',
                    'value'         => 'John Doe',
                    'class'         => '',
                    'label_title'   => __('Name'),
                    'placeholder'   => __('Enter name'),
                ],
                [
                    'id'            => 'role',
                    'type'          => 'text',
                    'value'         => 'Developer',
                    'class'         => '',
                    'label_title'   => __('Role'),
                    'placeholder'   => __('Enter role'),
                ],
                [
                    'id'            => 'company',
                    'type'          => 'text',
                    'value'         => 'Google',
                    'class'         => '',
                    'label_title'   => __('Company'),
                    'placeholder'   => __('Enter company'),
                ],
            ]
        ],
    ]
];
