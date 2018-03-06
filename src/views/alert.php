<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.5.18 (14:38)
 */



class alert{

    public function printAlert($label, $text){
        echo "
            <div class='row'>
                <div class='col-xs-12'>
                    <div class='alert alert-" . $label ."'>" . $text . "</div>
                </div>
            </div>
        ";
    }

    public function actionPrintNUN(){
        echo "<div class='alert alert-danger'>No records found.</div>";
    }

}