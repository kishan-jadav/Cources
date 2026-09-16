<?php
    include '../connect.php';

    $sql = "SELECT COUNT(*) AS count
            FROM students";

    $result = mysqli_query($connect, $sql);

    $row = mysqli_fetch_assoc($result);
    echo "Total line is : " .$row['count'];

    mysqli_close($connect);
?>