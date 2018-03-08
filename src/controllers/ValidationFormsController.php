<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 2.28.18 (20:00)
 */

abstract class ValidationFormsController{

    public static function clear($value, $type){

        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);

        $result = ValidationFormsController::checkLength($value, $type);

        return $result;
    }

    private static function checkLength($value, $type) {

        ValidationFormsController::checkNull($value);
        $value = ValidationFormsController::checkMaxLength($value, $type);

        return $value;
    }

    private static function checkNull($value) {

        $count = iconv_strlen($value);

        if ($count==0){
            RedirectController::redirectToAddForm();
        }
    }

    private static function checkMaxLength($value, $type) {

        if ($type == "text"){

            $value =  mb_strimwidth($value, 0, 75);
        }

        else if ($type == "textarea"){

            $value =  mb_strimwidth($value, 0, 500);
        }


        return $value;
    }
}