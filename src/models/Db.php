<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.5.18 (22:18)
 */

class Db
{

    public static function getConnection(){

        $paramsPath = ROOT . '/config/db.php';
        $params = include ($paramsPath);

        try {
            $db = new PDO($params['dsn'], $params['user'], $params['pass']);
        }

        catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $db;
    }


}