<?php

return [
    'section' => [
       'id'     => '_contact', 
       'label'  => __('sidebar.contact_us_settings'), 
       'icon'   => '', 
    ],
    'fields' => [
        [
            'id'            => 'phone',
            'type'          => 'text',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('settings.phone'),
            'placeholder'   => __('settings.phone'),
            'hint'     => [
                'content' => __('settings.phone'),
            ],
        ],
        [
            'id'            => 'email',
            'type'          => 'text',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('settings.email'),
            'placeholder'   => __('settings.email'),
            'hint'     => [
                'content' => __('settings.email'),
            ],
        ],
        [
            'id'            => 'whatsapp',
            'type'          => 'text',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('settings.whatsapp'),
            'placeholder'   => __('settings.whatsapp'),
            'hint'     => [
                'content' => __('settings.whatsapp'),
            ],
        ],
        [
            'id'            => 'fax',
            'type'          => 'text',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('settings.fax'),
            'placeholder'   => __('settings.fax'),
            'hint'     => [
                'content' => __('settings.fax'),
            ],
        ],
        [
            'id'            => 'phone_call_availability',
            'type'          => 'text',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('settings.phone_call_availability'),
            'placeholder'   => __('settings.phone_call_availability'),
            'hint'     => [
                'content' => __('settings.phone_call_availability'),
            ],
        ],
        [
            'id'            => 'whatsapp_call_availability',
            'type'          => 'text',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('settings.whatsapp_call_availability'),
            'placeholder'   => __('settings.whatsapp_call_availability'),
            'hint'     => [
                'content' => __('settings.whatsapp_call_availability'),
            ],
        ],
        
    ]
];