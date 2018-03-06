<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.1.18 (08:50)
 */

class NoteShowController{

    public function actionIndex(){

       $checkNoteItem = Note::checkNoteItem();

       if($checkNoteItem){

           $notesList = array();
           $notesList = Note::getNoteList();

           require_once ROOT . '/views/pages/homePage.php';
       }

       else{
           // redirect to Home page
       }

       return true;
    }

    public function actionIndexAll(){

        $checkNoteItem = Note::checkNoteItem();

        if($checkNoteItem){

            $notesList = array();
            $notesList = Note::getNoteListAll();

            require_once ROOT . '/views/pages/homePage.php';
        }

        else{
            // redirect to Home page
        }

        return true;
    }

    public function actionView($id){

       $checkNoteItem = Note::checkNoteById($id);

        if($checkNoteItem){

            $noteItem = array();
            $noteItem = Note::getNoteItemById($id);

            require_once ROOT . '/views/pages/note.php';
        }

        else{
            // redirect to Home page
        }

        return true;
    }

    public function statusConvert($status){

        if ($status=="0"){
             return $status = "deleted";
        }

        return $status = "";
    }

}