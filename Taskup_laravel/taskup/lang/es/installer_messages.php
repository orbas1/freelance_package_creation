<?php

return [

    /**
     *
     * Traducciones comunes.
     *
     */
    'title' => 'Instalador de Taskup',
    'next' => 'Siguiente paso',
    'finish' => 'Instalar',


    /**
     *
     * Traducciones de la página de inicio.
     *
     */
    'welcome' => [
        'title'   => 'Bienvenido al Instalador de Taskup',
        'message' => 'Bienvenido al asistente de configuración.',
    ],


    /**
     *
     * Traducciones de la página de requisitos.
     *
     */
    'requirements' => [
        'title' => 'Requisitos',
        'message' => 'Antes de continuar, asegúrese de que <br > su servidor cumpla con los siguientes requisitos.',
    ],


    /**
     *
     * Traducciones de la página de permisos.
     *
     */
    'permissions' => [
        'title' => 'Permisos',
        'message' => 'Asegúrese de que Taskup tenga los permisos necesarios <br /> para acceder a los siguientes directorios para continuar.',
    ],

    /**
     *
     * Sembradores de base de datos.
     *
     */
    'seeders' => [
        'title' => 'Migrar e Importar Contenido de Demostración',
        'migrate_title' => 'Migrar Base de Datos',
        'migrate_desc' => 'Migrar el esquema y la estructura de la base de datos para Taskup.',
        'general_title' => 'Importar Configuraciones del Sitio',
        'general_desc' => 'Importa las configuraciones y ajustes básicos para su sitio.',
        'pages_title' => 'Importar Páginas y Diseños',
        'pages_desc' => 'Importa todas las páginas predeterminadas y sus diseños para su sitio.',
        'users_title' => 'Importar Datos de Usuarios de Ejemplo',
        'users_desc' => 'Importa perfiles de usuario de ejemplo y datos para fines de prueba.',
        'tooltip_text' => 'Haga clic en el botón siguiente para comenzar la importación',
        'migrate_tooltip_text' => 'Haga clic en el botón siguiente para comenzar la migración',
        'import_text' => 'Vamos a migrar la base de datos e importar contenido de demostración a su sitio <br /> para ayudarle a explorar y entender nuestro producto.',
    ],


    /**
     *
     * Traducciones de la página de entorno.
     *
     */
    'environment' => [
        'title' => 'Configuraciones del Entorno',
        'message' => 'Por favor, ingrese sus credenciales de base de datos para continuar.',
        'save' => 'Guardar .env',
        'success' => 'Las configuraciones de su archivo .env han sido guardadas.',
        'errors' => 'No se pudo guardar el archivo .env, por favor créelo manualmente.',
    ],
    
    'install' => 'Instalar',


    /**
     *
     * Traducciones de la página final.
     *
     */
    'final' => [
        'title' => 'Terminado',
        'finished' => 'La aplicación se ha instalado correctamente.',
        'exit' => 'Haga clic aquí para salir',
    ],
    'checkPermissionAgain' => ' Verificar permisos nuevamente'
];
