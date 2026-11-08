<?php
/**
 * [TA6-4] CONFIGURACIÓN GENERAL: config/config.php
 *
 * Devuelve un array asociativo (return): quien lo cargue con
 * $config = require ... recibe el array.
 * Separar la configuración del código permite cambiar, por ejemplo,
 * la base de datos sin tocar ningún controlador.
 *
 * Las credenciales REALES irán en config/config.local.php, que está
 * en .gitignore para que nunca lleguen a GitHub.
 */
return [
    'app_name' => 'MVC_PHP_Template',   // nombre que se muestra en la web
    'db' => [                           // conexión a BD (aún sin usar)
        'host' => 'localhost',
        'name' => '',
        'user' => '',
        'pass' => '',
    ],
];