<?php

return [
    'id' => 'faqs',
    'name' => __('FAQ'),
    'icon' => '<i class="icon-help-circle"></i>',
    'tab' => "General",
    'fields' => [
        [
            'id'            => 'sub-heading',
            'type'          => 'text',
            'value'         => 'Talk to support',
            'class'         => '',
            'label_title'   => __('Sub heading'),
            'placeholder'   => __('Enter sub heading'),
        ],
        [
            'id'            => 'heading',
            'type'          => 'text',
            'value'         => 'Frequently asked questions',
            'class'         => '',
            'label_title'   => __('Heading'),
            'placeholder'   => __('Enter Heading'),
        ],
        [
            'id'            => 'paragraph',
            'type'          => 'text',
            'value'         => "Find answers to your questions instantly. Need more guidance? Dive into our extensive documentation for all your queries.",
            'class'         => '',
            'label_title'   => __('Paragraph'),
            'placeholder'   => __('Enter paragraph'),
        ],
        [
            'id'            => 'contact_us_url',
            'type'          => 'text',
            'value'         => "#",
            'class'         => '',
            'label_title'   => __('Contact us url'),
            'placeholder'   => __('Enter url'),
        ],
        [
            'id'            => 'contact_us_btn',
            'type'          => 'text',
            'value'         => "Contact our team",
            'class'         => '',
            'label_title'   => __('Contact our team button'),
            'placeholder'   => __('Enter button text'),
        ],
        [
            'id'                => 'faqs_data',
            'type'              => 'repeater',
            'label_title'       => __('FAQs'),
            'repeater_title'    => __('FAQ'),
            'multi'        => true,
            'fields'       =>
            [
                [
                    'id'            => 'question',
                    'type'          => 'text',
                    'value'         => '1. How do I get started as a freelancer?',
                    'class'         => '',
                    'label_title'   => __('Question'),
                    'placeholder'   => __('Enter question'),
                ],
                [
                    'id'            => 'answer',
                    'type'          => 'text',
                    'value'         => "Sign up, complete your profile, and start browsing projects. Submit proposals and communicate with clients to get hired.",
                    'label_title'   => __('Answer'),
                    'placeholder'   => __('Enter answer'),
                ],
               
            ],
        ]

    ]
];
