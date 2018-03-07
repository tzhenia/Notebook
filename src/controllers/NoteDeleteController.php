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

            echo "hide" . $id;
        }

        else{
            RedirectController::redirectToHome();
        }

        return true;
    }

    public static function actionDelete($id){

        $checkNoteItem = Note::checkNoteById($id);

        if($checkNoteItem){

            echo "actionDelete" . $id;
        }

        else{
            RedirectController::redirectToHome();
        }

        return true;
    }

}