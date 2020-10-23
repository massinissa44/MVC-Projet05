<?php
    ob_start();

    require_once __DIR__.'/config.php';
    require_once __DIR__.'/router.php';

    $router = new Router();
    $router->run();

    ob_end_flush();
?>
