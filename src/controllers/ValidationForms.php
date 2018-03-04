<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 2.28.18 (20:00)
 */

abstract class ValidationForms{

    protected static function check($value){
       return $value = htmlspecialchars(strip_tags($_POST[$value]));
    }

}