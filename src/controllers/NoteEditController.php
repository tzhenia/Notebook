<?php



class NoteEditController
{

    public function actionIndex(){

        echo 'NotesController - actionIndex';
        echo self::printPage();
        return true;


    }


    private static function printPage(){
        require_once "views/header.php";
        require_once "NoteShowController.php";

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

        }


        NoteShowController::printOneEdit($id);


        require_once "views/requirementsNotes.php";
        require_once "views/footer.php";
    }



}