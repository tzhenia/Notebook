<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 2.27.18 (19:06)
 */

require_once "Config.php";

abstract class AddNewNote extends ValidationForms {

    public static function check_GET(){

        if($_POST){

            try{
                self::AddNote();
            }

            catch(PDOException $exception){
                die('ERROR: ' . $exception->getMessage());
            }
        }

        else {
            header("location: " . Config::ROOT);
        }

    }


   static function AddNote(){
        $query = "INSERT INTO notes SET title=:title, text=:text, status=:status, dateTime=:dateTime";

        $title = ValidationForms::Check("title");
        $text =  ValidationForms::Check("text");

        $status = "1";
        $dateTime = date('Y-m-d H:i:s');

        $stmt = Config::get_db_connect()->prepare($query);
        $stmt->bindParam(':dateTime', $dateTime);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':text', $text);
        $stmt->bindParam(':status', $status);


        if($stmt->execute()){
            header("location: " . Config::ROOT . "/index.php?alert=saved");
        }

        else{
            header("location: " . Config::ROOT . "index.php?alert=unable");
        }
    }

}


AddNewNote::check_GET();
?>