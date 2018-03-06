<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.2.18 (14:36)
 */

require_once "Config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    NoteDeleteController::hideNote($id);
}

else if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    NoteDeleteController::removeForever($id);
}



class NoteDeleteController{

    public static function hideNote($id){

        $query = "UPDATE notes SET status=:status, dateTime=:dateTime WHERE id=" . $id;

        $status = "0";
        $dateTime = date('Y-m-d H:i:s');

        $stmt = Config::get_db_connect()->prepare($query);
        $stmt->bindParam(':dateTime', $dateTime);
        $stmt->bindParam(':status', $status);
        //$stmt->bindParam(':id', $id);


        if($stmt->execute()){
            header("location: " . Config::ROOT . "/index.php?alert=saved");
        }

        else{
            header("location: " . Config::ROOT . "/index.php?alert=unable");
        }
    }

    public static function removeForever($id){

        $query = "DELETE FROM notes WHERE id=" . $id;
        $stmt = Config::get_db_connect()->prepare($query);

        if($stmt->execute()){
            header("location: " . Config::ROOT . "/index.php?alert=saved");
        }

        else{
            header("location: " . Config::ROOT . "/index.php?alert=unable");
        }
    }

}


