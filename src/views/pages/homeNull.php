<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.7.18 (13:46)
 */


require_once ROOT . "/views/layout/header.php";


echo '
<div class="container">
    <div class="row title">
            <div class="col-xs-12"><h1>List of notes</h1></div>     
     </div>
     ';


 AlertController::printAlert('danger', "List of notes is empty");


echo "</div> ";

require_once ROOT . "/views/layout/footer.php";