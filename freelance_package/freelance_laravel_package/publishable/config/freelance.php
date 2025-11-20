<?php

return [
    'modules' => [
        'gigs' => true,
        'projects' => true,
        'escrow' => true,
        'disputes' => true,
        'project_management' => true,
        'gig_management' => true,
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
        'hourly_tracking' => true,
        'milestones' => true,
        'gig_packages' => true,
        'admin_escrow_management' => true,
    ],

    'api' => [
        'middleware' => ['api'],
        'prefix' => 'api',
    ],

    'web' => [
        'middleware' => ['web'],
    ],
];
