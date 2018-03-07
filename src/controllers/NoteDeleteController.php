<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.2.18 (14:36)
 */

class NoteDeleteController{

    public static function actionHide($id){

        $checkNoteItem = Note::checkNoteById($id);

        if($checkNoteItem){

            echo "hide";
        }

        else{
            RedirectController::redirectToHome();
        }

        return true;
    }

    public static function actionFinally($id){

        $checkNoteItem = Note::checkNoteById($id);

        if($checkNoteItem){

            echo "actionFinally";
        }

        else{
            RedirectController::redirectToHome();
        }

        return true;
    }

}