<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.5.18 (14:29)
 */


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

    public static function checkNoteById($id){

        $db = Db::getConnection();

        $result = $db->query(
            'SELECT id '
            . 'FROM notes '
            . 'WHERE id = ' . $id . ' '
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

    public static function hideNoteItemById($id){

        $db = Db::getConnection();

        $result = $db->query(
            'UPDATE notes '
            . 'SET status = 0 '
            . 'WHERE id='. $id
        );

        $result -> setFetchMode(PDO::FETCH_ASSOC);

        $notesItem = $result->fetch();

        return $notesItem;
    }

    public static function deleteNoteItemById($id){

        $db = Db::getConnection();

        $result = $db->query(
            'DELETE FROM notes '
            . 'WHERE id='. $id
        );

        $result -> setFetchMode(PDO::FETCH_ASSOC);

        $notesItem = $result->fetch();

        return $notesItem;
    }

    public static function getNoteList(){

        $db = Db::getConnection();

        $result = $db->query(
            'SELECT id, title, status, dateTime '
            . 'FROM notes '
            . 'WHERE status = 1 '
            . 'ORDER BY ID DESC'
        );


        $i = 0;
        $notesList = array();

        while($row = $result->fetch()){

            $notesList[$i]['id'] = $row ['id'];
            $notesList[$i]['title'] = $row ['title'];
            $notesList[$i]['status'] = $row ['status'];
            $notesList[$i]['dateTime'] = $row ['dateTime'];

            $i++;

        }


        return $notesList;
    }

    public static function getNoteListAll(){

        $db = Db::getConnection();

        $result = $db->query(
            'SELECT id, title, status, dateTime '
            . 'FROM notes '
            . 'ORDER BY ID DESC'
        );


        $i = 0;
        $notesList = array();

        while($row = $result->fetch()){

            $notesList[$i]['id'] = $row ['id'];
            $notesList[$i]['title'] = $row ['title'];
            $notesList[$i]['status'] = $row ['status'];
            $notesList[$i]['dateTime'] = $row ['dateTime'];

            $i++;

        }


        return $notesList;
    }

    public static function addNew($title, $text, $status, $dateTime){

        $db = Db::getConnection();

        $query = "INSERT INTO notes SET title=:title, text=:text, status=:status, dateTime=:dateTime";

        $stmt = $db->prepare($query);

        $stmt->bindParam(':dateTime', $dateTime);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':text', $text);
        $stmt->bindParam(':status', $status);

        $stmt->execute();
    }

}