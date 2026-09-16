<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    
    //create connection
    $conn = mysqli_connect($servername, $username, $password);

    //Check connection
    if(!$conn):
        echo "Database not connected.<br>   ";
    else:
        echo "Database connected successfully.<br>";
    endif;
    
    // create database
    $sql = "CREATE DATABASE myDB";

    
    if(mysqli_query($conn, $sql)):   // mysqli_query($connection, $sql_query)
        echo "Database created successfully";
    else:
        echo "Database not created". mysqli_error($conn);
    endif;

    // close connection
    mysqli_close($conn);

?>