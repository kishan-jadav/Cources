<?php
    include '../connect.php';

    $sql = "SELECT MIN(rno) AS min
            FROM students";
    
    $result = mysqli_query($connect, $sql);
    $x = mysqli_fetch_assoc($result);

    echo "Minimum roll no is: " .$x['min'];

    mysqli_close($connect); 
?>