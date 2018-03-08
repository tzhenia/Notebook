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
            RedirectController::redirectToHome();
        }

        return true;
    }

}