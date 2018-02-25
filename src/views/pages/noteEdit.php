<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.6.18 (15:12)
 */


require_once ROOT . "/views/layout/header.php";

echo "

                <div class='container'>
                    <div class='row title'>
                        <div class='col-xs-12'><h1>Edit ID: {$noteItem['id']}</h1></div>
                    </div>
                    <div class='row'>
                        <div class='col-lg-12'>
                            <form action='/edit/save/{$noteItem['id']}' method='post'>
                                <div class='form-group'>
                                    <input type='text' name='title'  class='form-control' minlength='3' maxlength='75' value='{$noteItem['title']}' required >
                                </div>

                                <div class='form-group'>
                                    <textarea name='text' class='form-control' maxlength='500' required>{$noteItem['text']}</textarea>
                                </div>

                                <div class='form-group text-right'>
                                    <input type='hidden' name='id' value='{$noteItem['id']}'>
                                    <a href='/delete/{$noteItem ['id']}' class='btn btn-danger'>Remove from database</a>
                                    <input type='submit' class='btn btn-success' value='UPDATE'>
                                </div>
                            </form>
                        </div>
                    </div>
                 </div>

    ";

require_once ROOT . "/views/requirementsNotes.php";
require_once ROOT . "/views/layout/footer.php";