<?php
    include '../connect.php';

    $sql = "SELECT MAX(rno) AS max
            FROM students";

    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);

    echo "Max number is : " .$row['max'];

    mysqli_close($connect);

?>