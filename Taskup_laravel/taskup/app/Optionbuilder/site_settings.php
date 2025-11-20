<?php

use App\Models\Taxonomies\ProjectCategory;

$size = setting('_general.image_file_size');

$projectCategories = ProjectCategory::select('id', 'name')->get();

$project_categories = [];
foreach($projectCategories as $category){
    $project_categories[$category->id] =$category->name;
}

return [
    'section' => [
       'id'     => '_site',
       'label'  => __('sidebar.site_settings'),
       'icon'   => '',
    ],
    'fields' => [
        [
            'id'            => 'enabled_module',
            'type'          => 'select',
            'class'         => '',
            'label_title'   => __('settings.manage_project_gig_module'),
            'options'       => [
                'project'      => __('settings.project'),
                'gig'          => __('settings.gig'),
                'both'         => __('project.both_payout_opt'),
            ],
            'default'       => 'both',
            'placeholder'   => __('settings.select_option'),
        ],
        [
            'id'            => 'rtl',
            'type'          => 'switch',
            'class'         => '',
            'label_title'   => __('settings.rtl_label'),
            'field_title'   => __('general.enable'),
            'field_desc'    => __('settings.rtl_desc'),
            'value'         => '1',
        ],
        [
            'id'            => 'site_name',
            'type'          => 'text',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('settings.site_title'),
            'placeholder'   => __('settings.site_title_placeholder'),
            'hint'     => [
                'content' => __('settings.site_title_placeholder'),
            ],
        ],
        [
            'id'            => 'site_favicon',
            'type'          => 'file',
            'class'         => '',
            'label_title'   => __('settings.site_favicon'),
            'field_desc'    => __('settings.image_option',['extension'=> 'jpg, png', 'size'=> !empty($size) ? $size.'mb' : '5mb']),
            'max_size'   => !empty($size) ? $size : '5',                  // size in MB
            'ext'    =>[
                'jpg',
                'png',
            ],
        ],
        [
            'id'            => 'site_dark_logo',
            'type'          => 'file',
            'class'         => '',
            'label_title'   => __('settings.site_dark_logo'),
            'field_desc'    => __('settings.image_option',['extension'=> 'jpg, png', 'size'=> !empty($size) ? $size.'mb' : '5mb']),
            'max_size'   => !empty($size) ? $size : '5',                  // size in MB
            'ext'    =>[
                'jpg',
                'png',
            ],
        ],
        [
            'id'            => 'site_lite_logo',
            'type'          => 'file',
            'class'         => '',
            'label_title'   => __('settings.site_lite_logo'),
            'field_desc'    => __('settings.image_option',['extension'=> 'jpg, png', 'size'=> !empty($size) ? $size.'mb' : '5mb']),
            'max_size'   => !empty($size) ? $size : '5',                  // size in MB
            'ext'    =>[
                'jpg',
                'png',
            ],
        ],
        [
            'id'            => 'auth_bg',
            'type'          => 'file',
            'class'         => '',
            'label_title'   => __('settings.auth_pages_bg'),
            'label_desc'   => __('settings.auth_pages_desc'),
            'field_desc'    => __('settings.image_option',['extension'=> 'jpg, png', 'size'=> !empty($size) ? $size.'mb' : '5mb']),
            'max_size'   => !empty($size) ? $size : '5',                  // size in MB
            'ext'    =>[
                'jpg',
                'png',
            ],
        ],
        [
            'id'            => 'footer_categories_heading',
            'type'          => 'text',
            'value'         => 'Top rated categories',
            'class'         => '',
            'label_title'   => __('settings.footer_categories_heading'),
            'placeholder'   => __('settings.footer_categories_heading'),
            'hint'     => [
                'content' => __('settings.footer_categories_heading'),
            ],
        ],
        [
            'id'            => 'popular-categories',
            'type'          => 'select',
            'class'         => '',
            'multi'         => true,
            'label_title'   => __('Popular categories'),
            'label_desc'    => __('Popular categories'),
            'field_desc'    => __('Popular categories'),
            'options'       => $project_categories,
            'default'       => ['uk'],
            'placeholder'   => __('Select from the list'),
        ],
        [
            'id'            => 'footer_text',
            'type'          => 'text',
            'value'         => 'Similique sunt in culpa qui officia deserunt mala animie idest laborum dolorum fuga harum quidem.            ',
            'class'         => '',
            'label_title'   => __('settings.footer_paragraph'),
            'placeholder'   => __('settings.footer_paragraph'),
            'hint'     => [
                'content' => __('settings.footer_paragraph'),
            ],
        ],
        [
            'id'            => 'footer-contact-heading',
            'type'          => 'text',
            'value'         => 'Contact us',
            'class'         => '',
            'label_title'   => __('settings.footer_contact_heading'),
            'placeholder'   => __('settings.footer_contact_heading'),
            'hint'     => [
                'content' => __('settings.footer_paragraph'),
            ],
        ],

        [
            'id'            => 'footer_apps_heading',
            'type'          => 'text',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('settings.footer_apps_heading'),
            'placeholder'   => __('settings.footer_apps_heading'),
            'hint'     => [
                'content' => __('settings.footer_apps_heading'),
            ],
        ],
        [
            'id'            => 'android_app_logo',
            'type'          => 'file',
            'class'         => '',
            'label_title'   => __('settings.android_app_logo'),
            'field_desc'    => __('settings.image_option',['extension'=> 'jpg, png', 'size'=> !empty($size) ? $size.'mb' : '5mb']),
            'max_size'   => !empty($size) ? $size : '5',                  // size in MB
            'ext'    =>[
                'jpg',
                'png',
            ],
        ],
        [
            'id'            => 'android_app_url',
            'type'          => 'text',
            'value'         => '#',
            'class'         => '',
            'label_title'   => __('settings.android_app_url'),
            'placeholder'   => __('settings.android_app_url'),
            'hint'     => [
                'content' => __('settings.android_app_url'),
            ],
        ],
        [
            'id'            => 'ios_app_logo',
            'type'          => 'file',
            'class'         => '',
            'label_title'   => __('settings.ios_app_logo'),
            'field_desc'    => __('settings.image_option',['extension'=> 'jpg, png', 'size'=> !empty($size) ? $size.'mb' : '5mb']),
            'max_size'   => !empty($size) ? $size : '5',                  // size in MB
            'ext'    =>[
                'jpg',
                'png',
            ],
        ],
        [
            'id'            => 'ios_app_url',
            'type'          => 'text',
            'value'         => '#',
            'class'         => '',
            'label_title'   => __('settings.ios_app_url'),
            'placeholder'   => __('settings.ios_app_url'),
            'hint'     => [
                'content' => __('settings.ios_app_url'),
            ],
        ],
    ]
];
