<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Task</title>
</head>
<body>
<?php
if (isset($_SESSION['prijavljen'])) { ?>
    <p>Welcome <?= $_SESSION['prijavljen']->ime ?></p>
    <p><a href="logout.php">Odjava</a></p>
<?php } else { ?>
    <p><a href="login.php">Prijava</a></p>
<?php } ?>
