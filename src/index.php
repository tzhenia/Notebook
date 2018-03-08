<?php

    define('ROOT', dirname(__FILE__));
    require_once ROOT . '/config/general.php';

    require_once ROOT . '/components/Router.php';
    require_once ROOT . '/controllers/RedirectController.php';
    require_once ROOT . '/models/db.php';
    require_once ROOT . '/models/Note.php';

    $router = new Router();
    $router->run();