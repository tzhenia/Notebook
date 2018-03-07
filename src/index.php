<?php

    date_default_timezone_set('Europe/Kiev');
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    define('ROOT', dirname(__FILE__));
    require_once ROOT . '/components/Router.php';
    require_once ROOT . '/models/db.php';
    require_once ROOT . '/models/Note.php';

    $router = new Router();
    $router->run();