<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 2.27.18 (15:12)
 */

date_default_timezone_set('Europe/Kiev');

abstract class Config {

    const ROOT =  '/src';
    const HOST = 'phpmyadmin.loc';
    const DB = 'NoteBook';
    const USER = 'homestead';
    const PASS = 'secret';
    const DSN = 'mysql:host=' . self::HOST . ';dbname=' . self::DB;

    public static function get_db_connect(){

        try {
            $db_connect = new PDO(self::DSN, self::USER, self::PASS);
        }

        catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $db_connect;
    }

}