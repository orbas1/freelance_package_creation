<?php

return [
    'modules' => [
        'gigs' => true,
        'projects' => true,
        'escrow' => true,
        'disputes' => true,
    ],

    'commissions' => [
        'gig_fee_percent' => 10,
        'project_fee_percent' => 12.5,
        'escrow_flat_fee' => 0,
    ],

    'default_roles' => [
        'freelancer' => 'freelancer',
        'client' => 'client',
    ],

    'features' => [
        'enable_livewire' => true,
        'publish_routes' => true,
        'publish_views' => true,
    ],

    'api' => [
        'middleware' => ['api'],
        'prefix' => 'api',
    ],

    'web' => [
        'middleware' => ['web'],
    ],
];
