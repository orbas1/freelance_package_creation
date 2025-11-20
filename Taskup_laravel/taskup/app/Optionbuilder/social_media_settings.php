<?php

return [
    'section' => [
       'id'     => '_social', 
       'label'  => __('sidebar.social_media_settings'), 
       'icon'   => '', 
    ],
    'fields' => [
        [
            'id'            => 'facebook',
            'type'          => 'text',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('settings.facebook'),
            'placeholder'   => __('settings.facebook'),
            'hint'     => [
                'content' => __('settings.facebook'),
            ],
        ],
        [
            'id'            => 'twitter',
            'type'          => 'text',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('settings.twitter'),
            'placeholder'   => __('settings.twitter'),
            'hint'     => [
                'content' => __('settings.twitter'),
            ],
        ],
        [
            'id'            => 'linkedin',
            'type'          => 'text',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('settings.linkedin'),
            'placeholder'   => __('settings.linkedin'),
            'hint'     => [
                'content' => __('settings.linkedin'),
            ],
        ],
        [
            'id'            => 'dribbble',
            'type'          => 'text',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('settings.dribbble'),
            'placeholder'   => __('settings.dribbble'),
            'hint'     => [
                'content' => __('settings.dribbble'),
            ],
        ],
        
    ]
];