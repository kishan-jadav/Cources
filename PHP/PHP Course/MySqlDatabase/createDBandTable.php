<?php 
    // connect server
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "newdb";
    
    //connect connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //check status
    if(!$conn):
        echo "Database not connected.<br>";
    else:
        echo "Database connected successfully.<br>";
    endif;

    //create database
    // $sql = "CREATE DATABASE newdb";

    // if(mysqli_query($conn, $sql)):
    //     echo "Database created successfully.<br>";
    // else:
    //     echo "Error: Database not created.<br>";
    // endif;

    //create table 
    $sql = "CREATE TABLE students(
    rno INT(3) PRIMARY KEY,
    sname VARCHAR(10),
    std INT(2),
    dob DATE
    )";

    if(mysqli_query($conn, $sql)):
        echo "Table created successfully.<br>";
    else:
        echo "Table not created.<br>";
    endif;

    mysqli_close($conn);
?>