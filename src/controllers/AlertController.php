<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 2.28.18 (17:31)
 */


class AlertController{


    public static function actionNull(){

        $checkNoteItem = Note::checkNoteItem();

        if($checkNoteItem){

            RedirectController::redirectToHome();
        }

        require_once ROOT . '/views/pages/homeNull.php';

        return true;
    }

    public static function printAlert($label, $text){

        require_once ROOT . "/views/alert.php";
    }

}