<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 2.27.18 (15:12)
 */

$host = 'phpmyadmin.loc';
$db = 'NoteBook';
$user = 'homestead';
$pass = 'secret';

$dsn = 'mysql:host=' . $host . ';dbname=' . $db;

$db_connect = new PDO($dsn, $user, $pass);


function create(){

}

function getOne(){

}

function getAll(){

}

function update(){

}

function delete(){

}


?>