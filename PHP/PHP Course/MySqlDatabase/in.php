<?php 
    include 'connect.php';

    $sql = "SELECT * 
            FROM students
            WHERE sname IN ('kishan')";

    $result = mysqli_query($connect, $sql);

    while($row = mysqli_fetch_assoc($result)):
        echo "rno: " .$row['rno']. ', Name: ' .$row['sname']. "<br>";
        
    endwhile;


?>