<?php
/**
 * FRONT CONTROLLER MÍNIMO: public/index.php
 *
 * Es la ÚNICA puerta de entrada: el servidor web tiene public/ como raíz,
 * así que nada fuera de esta carpeta (app/, config/, vendor/) tiene URL.
 *
 * De momento solo muestra una página para comprobar que la estructura
 * funciona. Cuando el proyecto crezca, aquí se cargará el enrutador de
 * app/core y se delegará en los controladores (ver TA 7).
 */

// [TA6-1] Raíz del proyecto.
// __DIR__ = carpeta de ESTE fichero (public). dirname() sube un nivel.
// Todas las rutas se construyen desde aquí: BASE_PATH . '/config/...'
define('BASE_PATH', dirname(__DIR__));

// [TA6-2] Cargar la configuración.
// config.php hace "return [...]": require devuelve ese valor,
// así que $config queda como un array asociativo.
$config = require BASE_PATH . '/config/config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php
    // [TA6-3] La etiqueta corta "<?=" equivale a "<?php echo".
    // htmlspecialchars() escapa < > & " ' para que un dato nunca
    // se interprete como HTML o JavaScript.
    // (No se usa un comentario HTML <!-- -->: PHP ejecutaría igualmente
    //  cualquier etiqueta PHP escrita dentro de él.)
    ?>
    <title><?= htmlspecialchars($config['app_name']) ?></title>
</head>
<body>
    <h1><?= htmlspecialchars($config['app_name']) ?></h1>
    <p>La estructura MVC está en marcha.</p>
</body>
</html>