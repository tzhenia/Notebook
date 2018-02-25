<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 2.27.18 (19:06)
 */

require_once "ValidationFormsController.php";

class NoteNewController{

    public static function actionIndex()
    {
        require_once ROOT . "/views/pages/noteNew.php";
        return true;
    }

    public static function actionSave()
    {
        $title = $_POST["title"];
        $text = $_POST["text"];
        $status = 1;

        $now = new DateTime();
        $now->setTimezone(new DateTimeZone('Europe/Kiev'));
        $dateTime = $now->format('Y-m-d H:i:s');

        $title = ValidationFormsController::clear($title, "text");
        $text = ValidationFormsController::clear($text, "textarea");

        Note::addNew($title, $text, $status, $dateTime);
        RedirectController::redirectToHome();
        return true;
    }
}