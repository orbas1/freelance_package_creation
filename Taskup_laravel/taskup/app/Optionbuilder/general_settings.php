<?php
$currencies = currencyList();
$all_currencies = $per_page_rec = $all_site_pages = $all_payment_methods = [];

foreach( perPageOpt() as $key=> $single){
    $per_page_rec[$single] = $single;
}

foreach($currencies as $key=> $single){
    $all_currencies[$key] = $single['name'].' ('.$single['symbol'].')';
}

$setting   = getTPSetting(['payment'], ['payment_methods']);
if( !empty($setting['payment_methods']) ){

    $payment_methods = unserialize($setting['payment_methods']);
    $payment_methods = $payment_methods['others'];
    if( !empty($payment_methods) ){
        foreach($payment_methods as $key => $method) {
            $all_payment_methods[$key] = __("settings.$key"."_title");
        }
    }
}

return [
    'section' => [
       'id'     => '_general', 
       'label'  => __('sidebar.general_settings'), 
       'icon'   => '', 
    ],
    'fields' => [
        [
            'id'            => 'file_ext',
            'type'          => 'text',
            'value'         => 'pdf,doc,docx,xls,xlsx,ppt,pptx,csv,jpg,jpeg,gif,png,mp4,mp3,3gp,flv,ogg,wmv,avi,txt',
            'class'         => '',
            'label_title'   => __('settings.file_extensions'),
            'field_desc'   => __('settings.file_extensions_desc'),
            'placeholder'   => __('settings.file_extensions_placeholder'),
            'hint'     => [
                'content' => __('settings.file_extensions_placeholder'),
            ],
        ],
        [
            'id'            => 'image_file_ext',
            'type'          => 'text',
            'value'         => 'jpg,jpeg,gif,png',
            'class'         => '',
            'label_title'   => __('settings.image_file_ext'),
            'field_desc'   => __('settings.image_file_ext_desc'),
            'placeholder'   => __('settings.image_file_ext_placeholder'),
            'hint'     => [
                'content' => __('settings.image_file_ext_placeholder'),
            ],
        ],
        [
            'id'            => 'image_file_size',
            'type'          => 'number',
            'value'         => '5',
            'class'         => '',
            'label_title'   => __('settings.image_file_size'),
            'field_desc'    => __('settings.image_file_size_desc'),
            'placeholder'   => __('settings.file_size_placeholder'),
            'hint'     => [
                'content' => __('settings.file_size_placeholder'),
            ],
        ],
        [
            'id'            => 'file_size',
            'type'          => 'number',
            'value'         => '10',
            'class'         => '',
            'label_title'   => __('settings.file_size'),
            'field_desc'    => __('settings.file_size_desc'),
            'placeholder'   => __('settings.file_size_placeholder'),
            'hint'     => [
                'content' => __('settings.file_size_placeholder'),
            ],
        ],
        [
            'id'            => 'gig_listing_layout',
            'type'          => 'select',
            'class'         => '',
            'label_title'   => __('settings.gig_listing_layout'),
            'options'       => [
                'grid'   => __('settings.grid_view'),
                'list'   => __('settings.list_view'),
            ],
            'placeholder'   => __('settings.select_option'),  
        ],
        [
            'id'            => 'date_format',
            'type'          => 'select',
            'class'         => '',
            'label_title'   => __('settings.date_format'),
            'options'       => [
                'F j, Y, g:i a'     => sprintf(__('settings.date_format0'), date('F j, Y, g:i a')),
                'F j, Y'            => sprintf(__('settings.date_format1'), date('F j, Y')),
                'Y-m-d'             => sprintf(__('settings.date_format2'), date('Y-m-d')),
                'd-m-Y'             => sprintf(__('settings.date_format3'), date('d-m-Y')),
                'm/d/Y'             => sprintf(__('settings.date_format4'), date('m/d/Y')),
                'd/m/Y'             => sprintf(__('settings.date_format5'), date('d/m/Y'))
            ],
            'placeholder'   => __('settings.select_option'),  
        ],
        [
            'id'            => 'address_format',
            'type'          => 'select',
            'class'         => '',
            'label_title'   => __('settings.profile_formate_address'),
            'options'       => [
                'city_country'          => __('settings.address_format1'),
                'state_country'         => __('settings.address_format2'),
                'city_state_country'    => __('settings.address_format3'),
            ],
            'placeholder'   => __('settings.select_option'),  
        ],
        [
            'id'            => 'per_page_record',
            'type'          => 'select',
            'class'         => '',
            'label_title'   => __('settings.per_page_record'),
            'options'       => $per_page_rec,
            'placeholder'   => __('settings.select_option'),  
        ],
        [
            'id'            => 'currency',
            'type'          => 'select',
            'class'         => '',
            'label_title'   => __('settings.currency'),
            'options'       => $all_currencies,
            'placeholder'   => __('settings.select_option'),  
        ],
        [
            'id'            => 'default_payment_method',
            'type'          => 'select',
            'class'         => '',
            'label_title'   => __('settings.default_payment_method'),
            'options'       => $all_payment_methods,
            'placeholder'   => __('settings.select_option'),  
        ],
        // [
        //     'id'            => 'top_bar_for_pages',
        //     'type'          => 'select',
        //     'class'         => '',
        //     'multi'         => true,
        //     'label_title'   => __('settings.top_menu_page'),
        //     'options'       => $all_site_pages,
        //     'placeholder'   => __('settings.select_option'),  
        // ],
        // [
        //     'id'            => 'top_bar_content',
        //     'type'          => 'text',
        //     'value'         => 'Sign up & get $100 credit for your next purchase on marketplace.<a href="#" target="_blank" class="tk-header-topbar-btn">Learn more</a>',
        //     'class'         => '',
        //     'label_title'   => __('settings.top_bar_content'),
        //     'placeholder'   => __('settings.top_bar_content'),
        //     'hint'     => [
        //         'content' => __('settings.top_bar_content'),
        //     ],
        // ],
        
        // [
        //     'id'            => 'footer_page',
        //     'type'          => 'select',
        //     'class'         => '',
        //     'label_title'   => __('settings.dashbaord_footer_page'),
        //     'options'       => $all_site_pages,
        //     'placeholder'   => __('settings.select_option'),  
        // ],
        // [
        //     'id'            => 'error_page_footer',
        //     'type'          => 'select',
        //     'class'         => '',
        //     'label_title'   => __('settings.error_page_footer'),
        //     'options'       => $all_site_pages,
        //     'placeholder'   => __('settings.select_option'),  
        // ],
        [
            'id'                => 'deactive_account_reasons',
            'type'              => 'repeater',
            'label_title'       => __('settings.deactive_account_reasons'),
            'field'             => [
                'id'            => 'deactive_reason',
                'type'          => 'text',
                'value'         => '',
                'class'         => '',
                'placeholder'   => __('settings.placeholder_account_reasons'),
            ]
        ],
    ]
];