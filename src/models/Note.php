<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.5.18 (14:29)
 */


abstract class Note{


    public static function getNoteItemById($id){

        $host = 'phpmyadmin.loc';
        $db_name = 'NoteBook';
        $user = 'homestead';
        $pass = 'secret';
        $dsn = "mysql:host=$host;dbname=$db_name";

        $db = new PDO($dsn, $user, $pass);

        $result = $db->query(
            'SELECT * '
            . 'FROM notes '
            . 'WHERE id='. $id
        );

        $result -> setFetchMode(PDO::FETCH_ASSOC);

        $i = 0;

        $notesItem = $result->fetch();


        return $notesItem;


    }

    public static function getNoteList(){

        $host = 'phpmyadmin.loc';
        $db_name = 'NoteBook';
        $user = 'homestead';
        $pass = 'secret';
        $dsn = "mysql:host=$host;dbname=$db_name";

        $db = new PDO($dsn, $user, $pass);

        $notesList = array();

        $result = $db->query(
            'SELECT id, title, status, dateTime '
            . 'FROM notes '
            . 'ORDER BY ID DESC'
        );


        $i = 0;

        while($row = $result->fetch()){

            $notesList[$i]['id'] = $row ['id'];
            $notesList[$i]['title'] = $row ['title'];
            $notesList[$i]['status'] = $row ['status'];
            $notesList[$i]['dateTime'] = $row ['dateTime'];

            $i++;

        }


        return $notesList;
    }


}