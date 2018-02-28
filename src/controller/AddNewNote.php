<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 2.27.18 (19:06)
 */

require_once "Config.php";


abstract class AddNewNote{


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

        $title = htmlspecialchars(strip_tags($_POST['title']));
        $text = htmlspecialchars(strip_tags($_POST['text']));
        $status = "1";

        $stmt = Config::get_db_connect()->prepare($query);

        $dateTime = date('Y-m-d H:i:s');
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