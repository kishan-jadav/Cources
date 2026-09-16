<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "genq";

$connect = mysqli_connect($server, $username, $password, $dbname);

if (!$connect) {
    echo "Database genq not connected";
}
