<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 2.27.18 (15:12)
 */

date_default_timezone_set('Europe/Kiev');
$rootDirectory =  "/Notebook/src/";

$host = 'phpmyadmin.loc';
$db = 'NoteBook';
$user = 'homestead';
$pass = 'secret';
$dsn = 'mysql:host=' . $host . ';dbname=' . $db;

$db_connect = new PDO($dsn, $user, $pass);

try {
    $db_connect = new PDO($dsn, $user, $pass);
}


catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}



?>