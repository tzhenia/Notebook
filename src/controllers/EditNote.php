<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.2.18 (13:54)
 */

require_once "Config.php";
require_once "ValidationForms.php";

class EditNote extends ValidationForms{

    public static function check_GET(){

        if($_POST){

            try{
                self::updateNote();
            }

            catch(PDOException $exception){
                die('ERROR: ' . $exception->getMessage());
            }
        }

        else {
            header("location: " . Config::ROOT);
        }

    }


    private static function updateNote(){
        $id = $_POST['id'];
        $query = "UPDATE notes SET title=:title, text=:text, status=:status, dateTime=:dateTime WHERE id=" . $id;

        $title = ValidationForms::Check("title");
        $text =  ValidationForms::Check("text");

        $status = "1";
        $dateTime = date('Y-m-d H:i:s');

        $stmt = Config::get_db_connect()->prepare($query);
        $stmt->bindParam(':dateTime', $dateTime);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':text', $text);
        $stmt->bindParam(':status', $status);
        //$stmt->bindParam(':id', $id);


        if($stmt->execute()){
           header("location: " . Config::ROOT . "/index.php?alert=saved");
        }

        else{
           header("location: " . Config::ROOT . "/index.php?alert=unable");
        }
    }

}


EditNote::check_GET();