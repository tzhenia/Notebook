<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 2.28.18 (17:31)
 */


class AlertController{


    public static function actionCheck(){

        if (isset($_GET['Alert'])) {
            $status = $_GET['Alert'];
            self::setData($status);
        }
    }


    private static function setData($status){

        if($status == "saved"){
            self::printAlert("Record was saved.", "success");
        }

        else if($status == "unable"){
            self::printAlert("Unable to save record.", "danger");
        }

    }


    private static function printAlert($label, $text){



        }

}