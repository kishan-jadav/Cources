<?php
    include 'connect.php';

    $sql = "SELECT *
            FROM students 
            LIMIT 5 
            OFFSET 10";       // 10th thi 5 record print kare
    // $sql = "SELECT sname FROM students LIMIT 5 OFFSET 10";
    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result)):
        while($row = mysqli_fetch_assoc($result)){
            echo "Roll : " .$row['rno']. ", Name : " .$row['sname'];
            echo "<br>";
        }
    endif;
    

    mysqli_close($connect);
?>