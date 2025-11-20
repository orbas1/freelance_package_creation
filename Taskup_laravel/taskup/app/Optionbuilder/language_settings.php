<?php
$languages = [];
foreach (config('app.available_locales') as $key) {
    $languages[$key] = __("pages.lang_$key");
}
// dd($languages["en"]);
return [
    'section' => [
        'id'     => '_language', 
        'label'  => __('Multi language settings'), 
        'icon'   => '', 
     ],
     'fields' => [
         [
             'id'            => 'enable_language',
             'type'          => 'switch',
             'class'         => '',
             'label_title'   => __('Multi languages'),
             'field_title'   => __('Enable'), 
             'field_desc'    => __('Enable multi languages'), 
             'value'         => '1',  
         ],
         [
            'id'            => 'languages',
            'type'          => 'select',
            'class'         => '',
            'label_title'   => __('Select languages'),
            'multi'         => true,
            'options'       => $languages,
            'default'       => ['en'],
            'placeholder'   => __('Select from list'),  
        ],
     ]
];