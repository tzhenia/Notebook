<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.6.18 (12:13)
 */

require_once ROOT . "/views/header.php";

echo '
<div class="container">
                <div class="row title">
                    <div class="col-xs-12"><h1>Add new note</h1></div>
                </div>
    
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" minlength="3" maxlength="75" placeholder="Enter your title of note" required >
                            </div>
    
                            <div class="form-group">
                                <textarea name="text" class="form-control" maxlength="500" required>...</textarea>
                            </div>
    
                            <div class="form-group text-right">
                                <input type="submit" class="btn btn-success" value="Done">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    ';

require_once ROOT . "/views/footer.php";