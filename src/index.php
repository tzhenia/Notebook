<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    define('ROOT', dirname(__FILE__));
    require_once (ROOT . '/components/Router.php');

    $router = new Router();
    $router->run();



////    require_once "view/header.php";
////    require_once "controller/ShowNotes.php";
////    require_once "controller/Get.php";
//?>
<!---->
<!--    <div class="container">-->
<!---->
<!--        --><?php //Alert::check(); ?>
<!---->
<!--        <div class="row title">-->
<!--            <div class="col-xs-12"><h1>List of notes</h1></div>-->
<!--        </div>-->
<!---->
<!--        --><?php //ShowNotes::printNote(); ?>
<!---->
<!--    </div>-->
<!---->
<!---->
<?php
//    require_once "view/footer.php";
//?>
