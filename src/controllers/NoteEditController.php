<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.2.18 (13:54)
 */

require_once "ValidationFormsController.php";

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

    public static function actionSave($id)
    {
        $checkNoteItem = Note::checkNoteById($id);

        if($checkNoteItem){

            $title = $_POST["title"];
            $text = $_POST["text"];
            $status = 1;

            $now = new DateTime();
            $now->setTimezone(new DateTimeZone('Europe/Kiev'));
            $dateTime = $now->format('Y-m-d H:i:s');

            $title = ValidationFormsController::clear($title, "text");
            $text = ValidationFormsController::clear($text, "textarea");

            Note::editNoteById($id, $title, $text, $status, $dateTime);
            RedirectController::redirectToHome();
        }

        else{
            RedirectController::redirectToHome();
        }

        return true;
    }
}