<?php
$servername = "mysql.cba.pl";
$username = "hoxellSQL";
$password = "Hack1234@";
$dbname = "mrhoxell"; 

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} echo "SQL Connection -> OK";
?>