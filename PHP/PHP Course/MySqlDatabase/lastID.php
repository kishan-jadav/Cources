<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "newdb";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "INSERT INTO employee (firstname, surname, rno) VALUES ( 'Vishal', 'Makwana', '11')";

    if(mysqli_query($conn, $sql)):
        $last_id = mysqli_insert_id($conn);
        echo "Record inserted. Last inserted id is: ".$last_id;
    else:
        echo "Error: record not insert.";
    endif;

    mysqli_close($conn);
?>