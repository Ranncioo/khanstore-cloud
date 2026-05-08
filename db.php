<?php
$servername = getenv('MYSQLHOST') ?: 'mysql.railway.internal';
$port       = getenv('MYSQLPORT') ?: '3306';
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