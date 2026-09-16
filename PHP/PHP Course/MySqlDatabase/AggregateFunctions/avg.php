<?php
    include '../connect.php';

    $sql = "SELECT AVG(rno) AS Roll
            FROM students";

    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);

    echo "Average of Roll: " .$row['Roll'];

?>