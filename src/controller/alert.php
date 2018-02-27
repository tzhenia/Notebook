<?php

if (isset($_GET['alert'])) {

    if($_GET['alert'] == "saved"){
        echo "<div class='row'><div class='col-xs-12'><div class='alert alert-success'>Record was saved.</div></div></div>";
    }

}


else if (isset($_GET['alert'])) {

    if($_GET['alert'] == "unable"){
        echo "<div class='row'><div class='col-xs-12'><div class='alert alert-danger'>Unable to save record.</div></div></div>";
    }

}
