<?php


declare(strict_types=1);

$displayErrors = ini_get('display_errors');
$errorReporting = error_reporting();
$dateTimezone = ini_get('date.timezone');
$shortOpenTag = ini_get('short_open_tag');
$exposePhp = ini_get('expose_php');
$memoryLimit = ini_get('memory_limit');

$horaAntes = date('H:i:s');

$valorAnterior = ini_set('date.timezone', 'UTC');

$horaDespues = date('H:i:s');

ini_restore('date.timezone');

$intentoShortOpenTag = ini_set('short_open_tag', 'Off');

$iniAdicionales = php_ini_scanned_files();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diagnóstico del servidor · Forja de Héroes</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<main>
    <h1>Diagnóstico del servidor</h1>
    <p class="subtitulo">
        PHP <?= phpversion() ?> · <?= PHP_OS ?>
    </p>

    <h2>Directivas configuradas en php/forja.ini</h2>
    <table>
        <tr><th>Directiva</th><th>Valor (ini_get)</th><th>Por qué</th></tr>
        <tr>
          <td>display_errors</td>
          <td><?= $displayErrors ?></td>
          <td>Mostrar errores durante el desarrollo</td>
        </tr>

        <tr>
          <td>error_reporting</td>
          <td><?= $errorReporting ?></td>
          <td>Mostrar todos los errores</td>
        </tr>

        <tr>
           <td>date.timezone</td>
           <td><?= $dateTimezone ?></td>
           <td>Zona horaria configurada</td>
        </tr>

        <tr>
           <td>short_open_tag</td>
           <td><?= $shortOpenTag ?></td>
           <td>Permite etiquetas cortas</td>
        </tr>

        <tr>
           <td>expose_php</td>
           <td><?= $exposePhp ?></td>
           <td>Oculta la versión de PHP</td>
        </tr>

        <tr>
           <td>memory_limit</td>
           <td><?= $memoryLimit ?></td>
           <td>Límite de memoria disponible</td>
        </tr>
    </table>

    <h2>Cambio en tiempo de ejecución (ini_set)</h2>
    <table>
        <tr>
           <td>Hora antes del cambio</td>
           <td><?= $horaAntes ?></td>
        </tr>

        <tr>
           <td>Hora después del cambio a UTC</td>
           <td><?= $horaDespues ?></td>
        </tr>

        <tr>
           <td>Valor devuelto por ini_set()</td>
           <td><?= $valorAnterior ?></td>
        </tr>

        <tr>
           <td>Intento de cambiar short_open_tag</td>
           <td><?= $intentoShortOpenTag ?></td>
        </tr>

        <tr>
           <td>Archivos INI adicionales cargados</td>
           <td><?= nl2br($iniAdicionales) ?></td>
        </tr>
    </table>

    <footer><a href="ficha.php">← Volver a la ficha</a></footer>
</main>
</body>
</html>
