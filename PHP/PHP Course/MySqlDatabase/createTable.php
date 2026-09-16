<?php

    // Connecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    // create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // check connection
    if(!$conn):
        echo "Connection Failed:<br>" . mysqli_connect_error();
    else:
        echo "Connected DB.<br>";
    endif;
    
    //sql to create table
    $sql = "CREATE TABLE MyGuests(
    id INT(6),
    firstname VARCHAR(11),
    lastname VARCHAR(11),
    email VARCHAR(25),
    reg_date DATETIME
    )";

    // check table created 
    if(mysqli_query($conn, $sql)):   // mysqli_query($connection, $sql_query) 
        echo "Table created successfully."; 
    else:
        echo "Error table creating.". mysqli_error($conn);
    endif;

    mysqli_close($conn);
    
?>