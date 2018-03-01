<?php
    require_once "view/header.php";
    require_once "controller/ShowNotes.php";
    require_once "controller/Get.php";

    if (isset($_GET['show'])) {
        $show = $_GET['show'];
        Get::checkGet($show);
    }
?>

    <div class="container">

        <?php Alert::check(); ?>

        <div class="row title">
            <div class="col-xs-12"><h1>List of notes</h1></div>
        </div>

        <?php ShowNotes::checkNote("all"); ?>

    </div>


<?php
    require_once "view/footer.php";
?>
