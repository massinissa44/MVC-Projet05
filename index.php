<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
<?php
    require_once(__DIR__.'/router.php');

    $router = new Router();
    $router->run();
?>
    </body>
</html>
<?php
    ob_end_flush();
?>
