<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "newdb";

    //connection
    $connect = mysqli_connect($servername, $username, $password, $dbname);

    if(!$connect):
        echo "Database is not connected.". mysqli_connect_error();
    endif;
?>