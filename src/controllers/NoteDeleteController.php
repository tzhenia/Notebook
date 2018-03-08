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

            Note::hideNoteItemById($id);
            RedirectController::redirectToHome();
        }

        else{
            RedirectController::redirectToHome();
        }

        return true;
    }

    public static function actionDelete($id){

        $checkNoteItem = Note::checkNoteById($id);

        if($checkNoteItem){

            Note::deleteNoteItemById($id);
            RedirectController::redirectToHome();
        }

        else{
            RedirectController::redirectToHome();
        }

        return true;
    }

}