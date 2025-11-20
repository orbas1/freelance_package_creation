<?php

return [
    'id' => 'packages',
    'name' => __('Packages'),
    'icon' => '<i class="icon-package"></i>',
    'tab' => "Home",
    'fields' => [
        [
            'id'            => 'sub-heading',
            'type'          => 'text',
            'value'         => 'Best Plans to Go With',
            'class'         => '',
            'label_title'   => __('Sub heading'),
            'placeholder'   => __('Enter sub heading'),
        ],
        [
            'id'            => 'heading',
            'type'          => 'text',
            'value'         => 'Tailored Packages for Every Business Stage and Size',
            'class'         => '',
            'label_title'   => __('Heading'),
            'placeholder'   => __('Enter heading'),
        ],
        [
            'id'            => 'paragraph',
            'type'          => 'editor',
            'value'         => 'Enter a realm of limitless possibilities, where extraordinary talent thrives and beckons you to unfold your boundless potential.',
            'class'         => '',
            'label_title'   => __('Paragraph'),
            'placeholder'   => __('Enter paragraph'),
        ],
        [
            'id'            => 'btn_heading',
            'type'          => 'text',
            'value'         => 'Explore best packages for',
            'class'         => '',
            'label_title'   => __('Button heading'),
            'placeholder'   => __('Enter button heading'),
        ],
        [
            'id'            => 'talent_btn_text',
            'type'          => 'text',
            'value'         => 'Talent',
            'class'         => '',
            'label_title'   => __('Talent button text'),
            'placeholder'   => __('Enter text'),
        ],
        [
            'id'            => 'employer_btn_text',
            'type'          => 'text',
            'value'         => 'Employer',
            'class'         => '',
            'label_title'   => __('Employer button text'),
            'placeholder'   => __('Enter text'),
        ],
        [
            'id'            => 'note_heading',
            'type'          => 'text',
            'value'         => '*Pros who post over 4 jobs per month get 10x more views on average than non-payers',
            'class'         => '',
            'label_title'   => __('Note heading'),
            'placeholder'   => __('Enter note heading'),
        ],
    ]
];
