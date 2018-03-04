<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 2.28.18 (17:31)
 */


abstract class Alert{


    public static function check(){

        if (isset($_GET['alert'])) {
            $status = $_GET['alert'];
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


   private static function printAlert($text, $label){
        echo "<div class='row'><div class='col-xs-12'><div class='alert alert-" . $label ."'>" . $text . "</div></div></div>";
    }

}