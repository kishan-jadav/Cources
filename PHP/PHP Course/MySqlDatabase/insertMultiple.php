<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "newdb";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "INSERT INTO students (sname, std, dob) VALUES 
    ( 'Vishal', '12', '2005-08-03'),
    ('Naresh', '9', '2006-07-12'),  
    ('Kishan', '11', '2026-09-01')";

    if(mysqli_query($conn, $sql)):
        echo "Record inserted.";
    else:
        echo "Error: record not insert.";
    endif;

    mysqli_close($conn);
?>