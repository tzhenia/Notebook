<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.1.18 (17:31)
 */

abstract class Get{

    public static function checkGetAll($showAll){

            if ($showAll  == "all"){
                return true;
            }

            return false;
    }



}