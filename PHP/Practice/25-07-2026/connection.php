<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db";

    $connect = mysqli_connect($servername, $username, $password, $dbname);

    if(!$connect){
        echo "Database not connected";
    }else{
        echo "Database connected";
    }

?>