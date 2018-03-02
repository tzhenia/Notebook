<?php
    require_once "view/header.php";
    require_once "controller/ShowNotes.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

    }
?>


    <?php ShowNotes::printOneEdit($id); ?>


<?php
    require_once "view/requirementsNotes.php";
    require_once "view/footer.php";
?>
