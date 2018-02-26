<?php
    require_once "view/header.php";
?>

<div class="container">
    <div class="row title">
        <div class="col-xs-12"><h1>Add new note</h1></div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form action="#" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" minlength="3" maxlength="75" placeholder="Title of your note" required >
                </div>

                <div class="form-group">
                    <textarea class="form-control"  maxlength="500"  required>111</textarea>
                </div>

                <div class="form-group">
                    <input type="button" class="btn btn-success" value="Success">
                </div>

            </form>
        </div>
    </div>

    <?php require_once "view/requirementsNotes.php"; ?>

</div>

<?php
    require_once "view/footer.php";
?>
