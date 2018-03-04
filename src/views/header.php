<?php
    require_once "config/Config.php";
    require_once "controllers/AlertController.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="tzhenia.com">
    <title>Notebook | Developed by Yevhenii Taranukha</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
</head>
    <body>
        <header class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav">
                        <li><a href="<?php echo Config::ROOT?>" class="logo hidden-xs">Notebook</a></li>
                        <li><a href="<?php echo Config::ROOT?>" class="logo visible-xs">NB</a></li>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php?show=all">All notes</a></li>
                        <li><a href="new.php">Add new</a></li>
                    </ul>
                </div>
            </div>
        </header>