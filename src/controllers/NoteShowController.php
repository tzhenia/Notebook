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

        $noteItem = Note::getNoteItemById($id);

        echo '<pre>';
        print_r($noteItem);
        echo '</pre>';

        echo "<br> <br> NoteShowController - actionView";
        return true;
    }


}


//class NoteShowController{
//
//
//    public static function  actionHome(){
//
//        require_once (ROOT . "/views/header.php");
//        require_once "NoteShowController.php";
//        require_once "Get.php";
//
//
//        echo  '<div class="container">';
//
//            AlertController::check();
//
//        echo '
//               <div class="row title">
//                     <div class="col-xs-12"><h1>List of notes</h1></div>
//               </div>';
//
//             NoteShowController::printNote();
//
//
//        echo  '</div>';
//
//
//
//
//        require_once (ROOT . "/views/footer.php");
//
//
//    }
//
//    public static function actionView(){
//        echo  "ssdsds";
//
//    require_once (ROOT . "/views/header.php");
//
//    if (isset($_GET['id'])) {
//        $id = $_GET['id'];
//
//    }
//
//
//    NoteShowController::printOne($id);
//
//    require_once "../views/footer.php";
//    }
//
//    public static function printNote(){
//
//        $checkNote = self::checkNote();
//        $showAll = false;
//
//        if($checkNote && isset($_GET['show'])){
//           $showAll = Get::checkGetAll($_GET['show']);
//        }
//
//        self::printAll($showAll);
//    }
//
//    private static function checkNote(){
//
//        $query = "SELECT * FROM notes ORDER BY id";
//        $stmt = Config::get_db_connect()->prepare($query);
//        $stmt->execute();
//
//        $num = $stmt->rowCount();
//
//        if ($num == 0) {
//            self::printNUN();
//        }
//
//        else{
//           return true;
//        }
//
//    }
//
//    public static function printOne($idNote){
//
//        $query = "SELECT * FROM notes WHERE id = " . $idNote;
//
//        $stmt = Config::get_db_connect()->prepare($query);
//        $stmt->execute();
//
//        $num = $stmt->rowCount();
//
//        if ($num == 0) {
//            header("location: " . Config::ROOT);
//        }
//
//        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//
//            extract($row);
//
//            if ($status == 0){
//                $status = "DELETED";
//            }
//
//            else{
//                $status = "";
//            }
//
//            echo "
//                <div class='container'>
//                    <div class='row'>
//                        <div class='col-sm-9'><h1>ID: {$id} - {$title} <small>{$status}</small></h1></div>
//                        <div class='col-sm-3'><p class='date text-right'>{$dateTime}</p></div>
//                    </div>
//                    <div class='row'>
//                        <div class='col-lg-12'>
//                            <div class='content'>
//                                <p>{$text}</p>
//                            </div>
//                        </div>
//                    </div>
//
//                    <div class='row'>
//                        <div class='col-xs-12 text-right'>
//                            <a href='edit.php?id={$id}' type='button' class='btn btn-warning'>Edit</a>
//                        </div>
//                    </div>
//                 </div>
//             ";
//
//        }
//
//    }
//
//    public static function printOneEdit($idNote){
//
//        $query = "SELECT * FROM notes WHERE id = " . $idNote;
//
//        $stmt = Config::get_db_connect()->prepare($query);
//        $stmt->execute();
//
//        $num = $stmt->rowCount();
//
//        if ($num == 0) {
//            header("location: " . Config::ROOT);
//        }
//
//        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//
//            extract($row);
//
//            if ($status == 0){
//                $status = "DELETED";
//            }
//
//            else{
//                $status = "";
//            }
//
//            echo "
//                <div class='container'>
//                    <div class='row title'>
//                        <div class='col-xs-12'><h1>Edit ID: $id</h1></div>
//                    </div>
//
//                    <div class='row'>
//                        <div class='col-lg-12'>
//                            <form action='controller/EditNote.php?' method='post'>
//                                <div class='form-group'>
//                                    <input type='text' name='title'  class='form-control' minlength='3' maxlength='75' value='$title' required >
//                                </div>
//
//                                <div class='form-group'>
//                                    <textarea name='text' class='form-control' maxlength='500' required>$text</textarea>
//                                </div>
//
//                                <div class='form-group text-right'>
//                                    <input type='hidden' name='id' value='$id'>
//                                    <a href='controller/NoteDeleteController.phproller.php?delete=$id' class='btn btn-danger'>Remove from database</a>
//                                    <input type='submit' class='btn btn-success' value='UPDATE'>
//                                </div>
//                            </form>
//                        </div>
//                    </div>
//                 </div>
//             ";
//
//        }
//
//    }
//

//
//}