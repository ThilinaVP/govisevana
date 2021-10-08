<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "govisevana";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {

    die("Failed to connect to the database!");
}
?>