<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.1.18 (08:50)
 */


require_once "Config.php";

abstract class ShowNotes{


    public static function printAll()
    {


        $query = "SELECT * FROM notes ORDER BY id";
        $stmt = Config::get_db_connect()->prepare($query);
        $stmt->execute();

        $num = $stmt->rowCount();


        if ($num > 0) {

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

                    extract($row);

                    echo "

               
                 <div class='row note'>
                <div class='col-xs-12 col-sm-9 col-md-10'><a href='note.php?id={$id}'><span>ID: {$id}</span> - {$dateTime} - {$title}</a></div>
                <div class='col-xs-12 col-sm-3 col-md-2'>
                    <a href='edit.php?id={$id}' type='button' class='btn btn-warning'>Edit</a>
                    <a href='delete.php?id={$id}' type='button' class='btn btn-danger'>Delete</a>
                </div>
            </div>
              ";
               


            }
        }

        else {
            echo "<div class='alert alert-danger'>No records found.</div>";
        }

    }


}


?>