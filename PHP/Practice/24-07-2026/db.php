<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "genq";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if(!$connect):
    echo "Database not connected." . mysqli_error($connect);
endif;


?>