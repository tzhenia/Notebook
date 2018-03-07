<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.2.18 (13:54)
 */


class NoteEditController
{

    public static function actionIndex($id)
    {
        $checkNoteItem = Note::checkNoteById($id);

        if($checkNoteItem){

            $noteItem = array();
            $noteItem = Note::getNoteItemById($id);

            require_once ROOT . '/views/pages/noteEdit.php';
        }

        else{
            // redirect to Home page
        }

        return true;
    }

}



//class NoteEditController extends ValidationFormsController{
//
//    public static function check_GET(){
//
//        if($_POST){
//
//            try{
//                self::updateNote();
//            }
//
//            catch(PDOException $exception){
//                die('ERROR: ' . $exception->getMessage());
//            }
//        }
//
//        else {
//            header("location: " . Config::ROOT);
//        }
//
//    }
//
//
//    private static function updateNote(){
//        $id = $_POST['id'];
//        $query = "UPDATE notes SET title=:title, text=:text, status=:status, dateTime=:dateTime WHERE id=" . $id;
//
//        $title = ValidationFormsController::Check("title");
//        $text =  ValidationFormsController::Check("text");
//
//        $status = "1";
//        $dateTime = date('Y-m-d H:i:s');
//
//        $stmt = Config::get_db_connect()->prepare($query);
//        $stmt->bindParam(':dateTime', $dateTime);
//        $stmt->bindParam(':title', $title);
//        $stmt->bindParam(':text', $text);
//        $stmt->bindParam(':status', $status);
//        //$stmt->bindParam(':id', $id);
//
//
//        if($stmt->execute()){
//           header("location: " . Config::ROOT . "/index.php?alert=saved");
//        }
//
//        else{
//           header("location: " . Config::ROOT . "/index.php?alert=unable");
//        }
//    }
//
//}