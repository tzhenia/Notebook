<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.7.18 (13:04)
 */

abstract class RedirectController
{
    public static function redirectToHomeWithAlertNull(){

        header('Location: ' . SITE_NAME . 'null/');
    }

    public static function redirectToHome(){

        header('Location: ' . SITE_NAME);
    }

    public static function redirectToAddForm(){

        header('Location: ' . SITE_NAME . 'new/');
    }

}