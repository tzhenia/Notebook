<?php
    require_once "views/header.php";
    require_once "controllers/ShowNotes.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

    }

?>

    <?php ShowNotes::printOne($id); ?>

<?php
    require_once "views/footer.php";
?>
