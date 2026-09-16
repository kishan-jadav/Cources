<?php
$servername = "localhost";
$username = "root";
$password = "";

// connection
$connect = mysqli_connect($servername, $username, $password);

if (!$connect) {
    echo "Database not connected.";
} else {
    echo "Databse connected successfully.";
}


//create database
$sql = "CREATE DATABASE genq";

if (mysqli_query($connect, $sql)) {
    echo "<br>Database genq created.";
} else {
    echo "Database genq not created.";
}


mysqli_close($connect);
