<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.1.18 (08:50)
 */


require_once "Config.php";

abstract class ShowNotes{



    public static function printNote(){

        $checkNote = self::checkNote();
        $showAll = false;

        if($checkNote && isset($_GET['show'])){
           $showAll = Get::checkGetAll($_GET['show']);
        }

        self::printAll($showAll);
    }

    private static function checkNote(){

        $query = "SELECT * FROM notes ORDER BY id";
        $stmt = Config::get_db_connect()->prepare($query);
        $stmt->execute();

        $num = $stmt->rowCount();

        if ($num == 0) {
            self::printNUN();
        }

        else{
           return true;
        }

    }

    private static function printOne($stmt){

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

            extract($row);

            echo "                   
                <div class='container'>
                    <div class='row'>
                        <div class='col-sm-9'><h1>ID: {$id} - Title <small>{$status}</small></h1></div>
                        <div class='col-sm-3'><p class='date text-right'>{$dateTime}</p></div>
                    </div>
                    <div class='row'>
                        <div class='col-lg-12'>
                            <div class='content'>
                                <p>{$text}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class='row'>
                        <div class='col-xs-12 text-right'>
                            <a href='edit.php?id={$id}' type='button' class='btn btn-warning'>Edit</a>
                        </div>
                    </div>                   
                 </div>
             ";

        }

    }

    private static function printAll($showAll){

        if ($showAll){
            $query = "SELECT * FROM notes ORDER BY id DESC";
        }

        else{
            $query = "SELECT * FROM notes WHERE status = 1 ORDER BY id";
        }


        $stmt = Config::get_db_connect()->prepare($query);
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

            extract($row);


            if ($status==1){
                echo "<div class='row note'>";
            }

            else if ($status==0){
                echo "<div class='row note deleted'>";
            }

            echo "   
                 
                    <div class='col-xs-12 col-sm-9 col-md-10'><a href='note.php?id={$id}'><span>ID: {$id}</span> - {$dateTime} - {$title}</a></div>
                    <div class='col-xs-12 col-sm-3 col-md-2'>
                        <a href='edit.php?id={$id}' type='button' class='btn btn-warning'>Edit</a>
                        <a href='delete.php?id={$id}' type='button' class='btn btn-danger'>Delete</a>
                    </div>
                </div>
             ";

        }

    }

    private static function printNUN(){
        echo "<div class='alert alert-danger'>No records found.</div>";
    }


}


?>