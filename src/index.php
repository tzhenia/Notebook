<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    define('ROOT', dirname(__FILE__));
    require_once (ROOT . '/components/Router.php');

    $router = new Router();
    $router->run();



    require_once "views/header.php";
    require_once "controllers/ShowNoteController.php";
    require_once "controllers/Get.php";
?>

    <div class="container">

        <?php AlertController::check(); ?>

        <div class="row title">
            <div class="col-xs-12"><h1>List of notes</h1></div>
        </div>

        <?php ShowNoteController::printNote(); ?>

    </div>


<?php
    require_once "views/footer.php";
?>
