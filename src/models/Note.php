<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.5.18 (14:29)
 */

include_once ROOT . '/models/Db.php';

abstract class Note{

    public static function checkNoteItem(){

        $db = Db::getConnection();

        $result = $db->query(
            'SELECT id '
            . 'FROM notes '
            . 'LIMIT 1'
        );

        $result -> setFetchMode(PDO::FETCH_ASSOC);

        $notesItem = $result->fetch();

        return $notesItem;
    }

    public static function getNoteItemById($id){

        $db = Db::getConnection();

        $result = $db->query(
            'SELECT * '
            . 'FROM notes '
            . 'WHERE id='. $id
        );

        $result -> setFetchMode(PDO::FETCH_ASSOC);

        $notesItem = $result->fetch();

        return $notesItem;
    }

    public static function getNoteList(){

        $db = Db::getConnection();

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