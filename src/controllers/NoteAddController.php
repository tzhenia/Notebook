<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 2.27.18 (19:06)
 */

require_once "../config/Config.php";
require_once "ValidationFormsController.php";

abstract class NoteAddController extends ValidationFormsController {


    public static function index(){



    require_once "../views/header.php";


    echo "add new notes";

    //        <div class="container">
    //            <div class="row title">
    //                <div class="col-xs-12"><h1>Add new note</h1></div>
    //            </div>
    //
    //            <div class="row">
    //                <div class="col-lg-12">
    //                    <form action="controllers/NoteAddController.phproller.php" method="post">
    //                        <div class="form-group">
    //                            <input type="text" name='title' class="form-control" minlength="3" maxlength="75" placeholder="Enter your title of note" required >
    //                        </div>
    //
    //                        <div class="form-group">
    //                            <textarea name='text' class="form-control" maxlength="500" required>...</textarea>
    //                        </div>
    //
    //                        <div class="form-group text-right">
    //                            <input type="submit" class="btn btn-success" value="Done">
    //                        </div>
    //                    </form>
    //                </div>
    //            </div>
    //        </div>


        require_once "../views/requirementsNotes.php";
        require_once "../views/footer.php";
    }




    public static function check_GET(){

        if($_POST){

            try{
                self::AddNote();
            }

            catch(PDOException $exception){
                die('ERROR: ' . $exception->getMessage());
            }
        }

        else {
            header("location: " . Config::ROOT);
        }

    }


   static function AddNote(){
        $query = "INSERT INTO notes SET title=:title, text=:text, status=:status, dateTime=:dateTime";

        $title = ValidationFormsController::Check("title");
        $text =  ValidationFormsController::Check("text");

        $status = "1";
        $dateTime = date('Y-m-d H:i:s');

        $stmt = Config::get_db_connect()->prepare($query);
        $stmt->bindParam(':dateTime', $dateTime);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':text', $text);
        $stmt->bindParam(':status', $status);


        if($stmt->execute()){
            header("location: " . Config::ROOT . "/index.php?alert=saved");
        }

        else{
            header("location: " . Config::ROOT . "/index.php?alert=unable");
        }
    }

}