<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.6.18 (14:57)
 */


require_once ROOT . "/views/layout/header.php";

$status = $noteItem['status'];
$status = NoteShowController::statusConvert($status);

echo "
                <div class='container'>
                    <div class='row'>
                        <div class='col-sm-9'><h1>ID: {$noteItem['id']} - {$noteItem['title']} <small>$status</small></h1></div>
                        <div class='col-sm-3'><p class='date text-right'>{$noteItem['dateTime']}</p></div>
                    </div>
                    <div class='row'>
                        <div class='col-lg-12'>
                            <div class='content'>
                                <p>{$noteItem['text']}</p>
                            </div>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='col-xs-12 text-right'>
                            
";
                            if ($status != "deleted"){
                            echo "<a href='/hide/{$noteItem ['id']}' type='button' class='btn btn-danger'>Hide</a>";
                            }

echo "                            
                           <a href='/edit/{$noteItem['id']}' type='button' class='btn btn-warning'>Edit</a> 
                        </div>
                    </div>
                 </div>
";


require_once ROOT . "/views/layout/footer.php";