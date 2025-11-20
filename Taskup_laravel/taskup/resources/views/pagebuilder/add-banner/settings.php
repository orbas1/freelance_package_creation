<?php

return [
    'id' => 'add-banner',
    'name' => __('Add Banner'),
    'icon' => '<i class="icon-tv"></i>',
    'tab' => "General",
    'fields' => [
        [
            'id'            => 'pre_heading',
            'type'          => 'text',
            'value'         => 'Talk to support',
            'class'         => '',
            'label_title'   => __('Pre Heading'),
            'placeholder'   => __('Enter pre heading'),
        ],
        [
            'id'            => 'heading',
            'type'          => 'text',
            'value'         => 'Join & Get a <span>Unique</span>Opportunity',
            'class'         => '',
            'label_title'   => __('Heading'),
            'placeholder'   => __('Enter heading'),
        ],
        [
            'id'            => 'description',
            'type'          => 'editor',
            'value'         => 'Connect with skilled professionals, streamline collaboration, and unlock success.Join now and redefine your work experience!',
            'class'         => '',
            'label_title'   => __('Description'),
            'placeholder'   => __('Enter description'),
        ],
        [
            'id'            => 'btn_text',
            'type'          => 'text',
            'value'         => 'Get Started Now',
            'class'         => '',
            'label_title'   => __('CTA Text'),
            'placeholder'   => __('Enter CTA'),
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
            'id'            => 'promo_text',
            'type'          => 'text',
            'value'         => 'Try it risk free 14 days money-back guarantee',
            'class'         => '',
            'label_title'   => __('Promo Text'),
            'placeholder'   => __('Enter text'),
        ],
        [
            'id'            => 'enable_footer_bg',
            'type'          => 'radio',
            'class'         => '',
            'label_title'   => __('Enable footer background'),
            'options'       => [
                'yes'   => __('Yes'),
                'no'    => __('No'),
            ],
            'default'       => 'yes',  
        ]
    ]
];
