<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Taskup Installer',
    'next' => 'Next Step',
    'finish' => 'Install',


    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title'   => 'Welcome to the Taskup Installer',
        'message' => 'Welcome to the setup wizard.',
    ],


    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'Requirements',
        'message' => 'Before you proceed, please ensure that your <br > server meets the following requirements.',
    ],


    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'title' => 'Permissions',
        'message' => 'Please ensure that Taskup has the necessary permissions <br /> to access the following folders in order to continue.',
    ],

    /**
     *
     * Database Seeders.
     *
     */
    'seeders' => [
        'title' => 'Migrate & Import Demo Content',
        'migrate_title' => 'Database Migration',
        'migrate_desc' => 'Migrate the database schema and structure for Taskup.',
        'general_title' => 'Site Settings Import',
        'general_desc' => 'Imports basic settings and configurations for your site.',
        'pages_title' => 'Pages & Layouts Import',
        'pages_desc' => 'Imports all default pages and their layouts for your site.',
        'users_title' => 'Sample Users Data Import',
        'users_desc' => 'Imports demo user profiles and data for testing purposes.',
        'tooltip_text' => 'Click Next button to start import',
        'migrate_tooltip_text' => 'Click Next button to start migrate',
        'import_text' => 'Let’s migrate database & import demo content to your website <br /> to help you explore and understand the our product.',
    ],


    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'title' => 'Environment Settings',
        'message' => 'Please enter your database credentials to continue.',
        'save' => 'Save .env',
        'success' => 'Your .env file settings have been saved.',
        'errors' => 'Unable to save the .env file, Please create it manually.',
    ],
    
    'install' => 'Install',


    /**
     *
     * Final page translations.
     *
     */
    'final' => [
        'title' => 'Finished',
        'finished' => 'Application has been successfully installed.',
        'exit' => 'Click here to exit',
    ],
    'checkPermissionAgain' => ' Check Permission Again'
];
