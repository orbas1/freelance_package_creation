<?php
// $size = setting('_general.image_file_size');
$all_site_pages = [];

$site_pages = getDBData([
    'table'         => config('pagebuilder.db_prefix').'pages',
    'select'        => ['id', 'name'],
    'where'         => ['col' => 'status', 'match' => '=', 'value'=> 'published' ],
    'return_type'   => 'array'
]);

if( !empty($site_pages) ){
    foreach($site_pages as  $single){ 
        $all_site_pages[$single->id] = $single->name;
    }
}

return [
    'section' => [
       'id'     => '_front', 
       'label'  => __('sidebar.front_pages_settings'), 
       'icon'   => '', 
    ],
    'fields' => [
            [
                'id'            => 'top_bar_for_pages',
                'type'          => 'select',
                'class'         => '',
                'multi'         => true,
                'label_title'   => __('settings.top_menu_page'),
                'options'       => $all_site_pages,
                'placeholder'   => __('settings.select_option'),  
            ],
            [
                'id'            => 'top_bar_for_default_pages',
                'type'          => 'radio',
                'class'         => '',
                'label_title'   => __('settings.top_menu_default_page'),
                'options'       => [
                    'yes'   => __('Yes'),
                    'no'    => __('No'),
                ],
                'default'       => 'yes',  
            ],
            [
                'id'            => 'top_bar_content',
                'type'          => 'text',
                'value'         => 'Sign up & get $100 credit for your next purchase on marketplace.<a href="#" target="_blank" class="tk-header-topbar-btn">Learn more</a>',
                'class'         => '',
                'label_title'   => __('settings.top_bar_content'),
                'placeholder'   => __('settings.top_bar_content'),
                'hint'     => [
                    'content' => __('settings.top_bar_content'),
                ],
            ],
            [
                'id'            => 'header_search_for_pages',
                'type'          => 'select',
                'class'         => '',
                'multi'         => true,
                'label_title'   => __('settings.header_search_for_pages'),
                'options'       => $all_site_pages,
                'placeholder'   => __('settings.select_option'),  
            ],
            [
                'id'                => 'header_variation_for_pages',
                'type'              => 'repeater',
                'label_title'       => __('settings.header_variation_for_pages'),
                'repeater_title'    => __('settings.header_variation_for_pages'),
                'multi'             => true,
                'fields'            =>[
                        [
                            'id'            => 'page_id',
                            'type'          => 'select',
                            'class'         => '',
                            'label_title'   => __('settings.select_page'),
                            'options'       => $all_site_pages,
                            'placeholder'   => __('settings.select_option'),  
                        ],
                        [
                            'id'            => 'header_variation',
                            'type'          => 'select',
                            'class'         => '',
                            'label_title'   => __('settings.header_variation'),
                            'options'       => [
                                'header-v1'   => 'Header V1',
                                'header-v2'   => 'Header V2',
                                'header-v3'   => 'Header V3',
                                'header-v4'   => 'Header V4',
                                'header-v5'   => 'Header V5',
                                'header-v6'   => 'Header V6',
                                'header-v7'   => 'Header V7',
                                'header-v8'   => 'Header V8',
                                'header-v9'   => 'Header V9',
                                'header-v10'   => 'Header V10',
                                'header-v11'   => 'Header V11',
                                'header-v12'   => 'Header V12',
                                'header-v13'   => 'Header V13',
                            ],
                            'default'       => 'header-v1',  
                            'placeholder'   => __('settings.select_option'),  
                        ],
                    ]
                ],
    ]
];