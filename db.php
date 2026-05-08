<?php
$servername = getenv('MYSQLHOST') ?: 'gondola.proxy.rlwy.net';
$port       = getenv('MYSQLPORT') ?: '39875';
$username   = getenv('MYSQLUSER') ?: 'root';
$password   = getenv('MYSQLPASSWORD') ?: 'XnkOhlzMltPtsixjxNdYbxvbkTDPFxvd';
$db         = getenv('MYSQL_DATABASE') ?: 'railway';

// Create connection
$con = mysqli_connect($servername, $username, $password, $db, $port);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>