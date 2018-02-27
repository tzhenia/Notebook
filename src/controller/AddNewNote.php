<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 2.27.18 (19:06)
 */

require_once "config.php";

if($_POST){

    try{

        $query = "INSERT INTO notes SET title=:title, text=:text, status=:status, dateTime=:dateTime";

        $stmt = $db_connect->prepare($query);

        $title = htmlspecialchars(strip_tags($_POST['title']));
        $text = htmlspecialchars(strip_tags($_POST['text']));
        $status = "1";

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':text', $text);
        $stmt->bindParam(':status', $status);

        $dateTime = date('Y-m-d H:i:s');
        $stmt->bindParam(':dateTime', $dateTime);

        if($stmt->execute()){
            header("location: " . $rootDirectory . "/index.php?alert=saved");
        }

        else{
            header("location: " . $rootDirectory . "index.php?alert=unable");
        }

    }

    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}


else {

    header("location: " . $rootDirectory);

}


?>