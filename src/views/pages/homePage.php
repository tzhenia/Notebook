<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.5.18 (23:44)
 */

require_once ROOT . "/views/layout/header.php";




echo '
<div class="container">
    <div class="row title">
            <div class="col-xs-12"><h1>List of notes</h1></div>     
     </div>';


foreach($notesList as $field){

    if ($field ['status']==1){
        echo "<div class='row note'>";
    }

    else if ($field ['status']==0){
        echo "<div class='row note deleted'>";
    }

    echo "
        <div class='col-xs-12 col-sm-9 col-md-10'><a href='/note/{$field ['id']}'><span>ID: {$field ['id']}</span> - {$field ['dateTime']} - {$field ['title']}</a></div>
            <div class='col-xs-12 col-sm-3 col-md-2'>
         ";

                if ($field['status'] != 0){echo "<a href='/hide/{$field ['id']}' type='button' class='btn btn-danger'>Hide</a>";}

    echo "  
                <a href='/edit/{$field ['id']}' type='button' class='btn btn-warning'>Edit</a> 
             </div>
        </div>";
}

echo "</div>";

require_once ROOT . "/views/layout/footer.php";