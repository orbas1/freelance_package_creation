<?php

return [

    /**
     *
     * Traductions communes.
     *
     */
    'title' => 'Installateur de Taskup',
    'next' => 'Étape suivante',
    'finish' => 'Installer',


    /**
     *
     * Traductions de la page d'accueil.
     *
     */
    'welcome' => [
        'title'   => 'Bienvenue dans l\'installateur de Taskup',
        'message' => 'Bienvenue dans l\'assistant de configuration.',
    ],


    /**
     *
     * Traductions de la page des exigences.
     *
     */
    'requirements' => [
        'title' => 'Exigences',
        'message' => 'Avant de continuer, veuillez vous assurer que <br > votre serveur répond aux exigences suivantes.',
    ],


    /**
     *
     * Traductions de la page des autorisations.
     *
     */
    'permissions' => [
        'title' => 'Autorisations',
        'message' => 'Veuillez vous assurer que Taskup dispose des autorisations nécessaires <br /> pour accéder aux répertoires suivants afin de continuer.',
    ],

    /**
     *
     * Semeurs de base de données.
     *
     */
    'seeders' => [
        'title' => 'Migrer et importer le contenu de démonstration',
        'migrate_title' => 'Migrer la base de données',
        'migrate_desc' => 'Migrer le schéma et la structure de la base de données pour Taskup.',
        'general_title' => 'Importer les paramètres du site',
        'general_desc' => 'Importe les paramètres et configurations de base pour votre site.',
        'pages_title' => 'Importer des pages et des mises en page',
        'pages_desc' => 'Importe toutes les pages par défaut et leurs mises en page pour votre site.',
        'users_title' => 'Importer des données d\'utilisateurs d\'exemple',
        'users_desc' => 'Importe des profils d\'utilisateurs et des données d\'exemple à des fins de test.',
        'tooltip_text' => 'Cliquez sur le bouton suivant pour commencer l\'importation',
        'migrate_tooltip_text' => 'Cliquez sur le bouton suivant pour commencer la migration',
        'import_text' => 'Migrons la base de données et importons le contenu de démonstration sur votre site <br /> pour vous aider à explorer et comprendre notre produit.',
    ],


    /**
     *
     * Traductions de la page d'environnement.
     *
     */
    'environment' => [
        'title' => 'Paramètres de l\'environnement',
        'message' => 'Veuillez entrer vos identifiants de base de données pour continuer.',
        'save' => 'Enregistrer .env',
        'success' => 'Les paramètres de votre fichier .env ont été enregistrés.',
        'errors' => 'Impossible d\'enregistrer le fichier .env, veuillez le créer manuellement.',
    ],
    
    'install' => 'Installer',


    /**
     *
     * Traductions de la page finale.
     *
     */
    'final' => [
        'title' => 'Terminé',
        'finished' => 'L\'application a été installée avec succès.',
        'exit' => 'Cliquez ici pour quitter',
    ],
    'checkPermissionAgain' => ' Vérifier les autorisations à nouveau'
];
