<?php

$servername = "146.190.88.116";
$username = "root";
$password = "informatika";
$db = "khanstore";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>