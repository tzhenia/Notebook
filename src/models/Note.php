<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.5.18 (14:29)
 */


abstract class Note{





    public static function getNoteItemById($id){

    }

    public static function getNoteList(){




        $host = 'phpmyadmin.loc';
        $db_name = 'NoteBook';
        $user = 'homestead';
        $pass = 'secret';
        $dsn = 'mysql:host=' . $host . ';dbname=' . $db_name;

        $db = new PDO($dsn, $user, $pass);


        $noteList = array();


        $result = $db->query('SELECT id, title, text, status, dateTime');





    }


}