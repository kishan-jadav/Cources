<?php 
    include 'connect.php';

    $sql = "SELECT * 
            FROM students
            WHERE rno BETWEEN 5 AND 10";

    $result = mysqli_query($connect, $sql);

    while($row = mysqli_fetch_assoc($result)):
        echo "rno: " .$row['rno']. ', Name: ' .$row['sname'];
        echo "<br>";
    endwhile;


?>