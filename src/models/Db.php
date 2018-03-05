<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.5.18 (22:18)
 */

class Db
{

    public static function getConnection(){

        $paramsPath = ROOT . '/config/db_config.php';
        $params = include ($paramsPath);

        $db = new PDO($params['dsn'], $params['user'], $params['pass']);

        return $db;
    }


}