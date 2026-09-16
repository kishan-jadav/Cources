<?php 

// Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "harry";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn):
    echo "Database not connected". mysqli_connect_error();
else:
    echo "Database connected successfully";
endif;
?>