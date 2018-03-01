<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.1.18 (08:50)
 */


require_once "Config.php";

abstract class ShowAllNotes{
    

    public static function printAll()
    {


        $query = "SELECT * FROM notes ORDER BY id";
        $stmt = Config::get_db_connect()->prepare($query);
        $stmt->execute();

        $num = $stmt->rowCount();


        if ($num > 0) {

           echo "sadda";

        }

        else {
            echo "<div class='alert alert-danger'>No records found.</div>";
        }

    }


}


?>