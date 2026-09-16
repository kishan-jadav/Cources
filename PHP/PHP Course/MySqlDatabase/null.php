<?php
    include 'connect.php';

    $sql = "SELECT *
            FROM students
            WHERE std IS NULL"; // null value return kare
    
    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) > 0):
        while($row = mysqli_fetch_assoc($result)):
            echo "Roll: " .$row['rno']. ", Name: " .$row['sname']. ", Standard " .$row['std'];
        endwhile;
    endif;

    mysqli_close($connect);
?>