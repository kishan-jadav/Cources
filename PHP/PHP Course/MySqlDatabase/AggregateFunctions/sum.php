<?php
    include '../connect.php';

    $sql = "SELECT SUM(rno) AS total
            FROM students";
    
    $result = mysqli_query($connect, $sql);

    $x = mysqli_fetch_assoc($result);
    echo "Total sum is: " .$x['total'];

    mysqli_close($connect);

?>