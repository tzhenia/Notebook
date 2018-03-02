<?php
    require_once "view/header.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

    }
?>

<div class="container">
    <div class="row title">
        <div class="col-xs-12"><h1>Edit ID: 1111</h1></div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form action="controller/EditNote.php?" method="post" >
                <div class="form-group">
                    <input type="text" name='title'  class="form-control" minlength="3" maxlength="75" placeholder="Enter your title of note" required >
                </div>

                <div class="form-group">
                    <textarea name='text' class="form-control" maxlength="500" required>...</textarea>
                </div>

                <div class="form-group text-right">
                    <input type="hidden" name='id' value='<?php echo $id ?>'>
                    <input type="submit" class="btn btn-success" value="UPDATE">
                </div>
            </form>
        </div>
    </div>

    <?php require_once "view/requirementsNotes.php"; ?>
</div>

<?php
    require_once "view/footer.php";
?>
