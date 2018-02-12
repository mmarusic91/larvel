<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "larvel";

$conn = new PDO("mysql:host=" . $servername . ";dbname=" . $dbname, $username, $password);

//Napravljena konekcija (x 1000)
$conn->exec("set names utf8;");
